<?php
/*------------------------------------------------------------
 * Name:          GetMySqliConnection
 * Purpose:       Gets an instance of a MySqlI Connection Object
 * Args:          None
 * Returns:       MySqli Connection Object
 * Date Created:  06 July 2021
 * Author:        Ivan Dormain
 * ------------------------------------------------------------*/
function GetMySqliConnection(): mysqli
{
  $servername = "64.20.44.202";
  $username = "radio_admin";
  $password = "G3tR3@dY1970";

  //Create connection
  $conn = new mysqli($servername, $username, $password);

  //Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}
/*------------------------------------------------------------
 * Name:          ValidateLogin
 * Purpose:       Validates a User Login from the Logins Tabe
 * Args:          UserName (STRING)
 *                Password (STRING)
 * Returns:       BOOL
 * Date Created:  06 July 2021
 * Author:        Ivan Dormain
 * Date Modified:      22 April 2022 ( Hritik R)
 * Modifications: Implemented Prepared Statements to prevent SQL Injection
 * ------------------------------------------------------------*/
function ValidateLogin($username, $password): bool
{
  $username = strtolower($username);
  $conn = GetMySqliConnection();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $conn->select_db("radiologger");
  $stmt = $conn->prepare("SELECT * FROM logins WHERE UserName = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();
    if (password_verify($password, $userData['Password'])) {
      $stmt = $conn -> prepare('UPDATE logins SET LastLogin = ? WHERE UserName = ? LIMIT 1');
      $login_date = date("Y-m-d H:i:s");
      $stmt->bind_param("ss", $login_date, $username);
      $stmt->execute();
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }

  $stmt->close();
  $conn->close();
}

/*------------------------------------------------------------
 * Name:          GetLoginTableData
 * Purpose:       Returns JSON of all Record in the Login Table
 * Args:          None
 * Returns:       JSON
 * Date Created:  06 July 2021
 * Author:        Ivan Dormain
 * ------------------------------------------------------------*/
function GetLoginTableData()
{
  $conn = GetMySqliConnection();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $conn->select_db("radiologger");
  $sql = "SELECT * FROM logins";
  $result = $conn->query($sql);
  $info = array();
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $loginInfo = array();
      $loginInfo["LoginId"] = $row["LoginId"];
      $loginInfo["UserName"] = $row["UserName"];
      $loginInfo["Password"] = $row["Password"];
      $loginInfo["LastLogin"] = $row["LastLogin"];
      array_push($info, $loginInfo);
    }
    return json_encode($info);
  } else {
    echo "0 results";
  }
}

/*------------------------------------------------------------
 * Name:          General PHP to Check for an AJAX Call from JQuery
 * Purpose:       General PHP to Check for an AJAX Call from JQuery
 * Args:          None
 * Returns:       None
 * Date Created:  06 July 2021
 * Author:        Ivan Dormain
 * ------------------------------------------------------------*/
if (isset($_POST['GetLoginTableData'])) {
  echo GetLoginTableData($_POST['GetLoginTableData']);
}

/*------------------------------------------------------------
 * Name:          CreateUser
 * Purpose:       Insert new user into login table
 * Args:          Email (String)
 *                Username (String)
 *                Password (String)
 * Returns:       BOOL
 * Date Created:  22 April 2022
 * Author:        Hritik R
 * ------------------------------------------------------------*/
function CreateUser($email, $username, $password): bool
{
  $username = strtolower($username);
  $email = strtolower($email);
  $conn = GetMySqliConnection();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $conn->select_db("radiologger");
  $username = mysqli_real_escape_string($conn, stripslashes($_REQUEST['username']));
  $email = mysqli_real_escape_string($conn, stripslashes($_REQUEST['email']));
  $password = mysqli_real_escape_string($conn, stripslashes($_REQUEST['password']));
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  $trn_date = date("Y-m-d H:i:s");
  $insQuery = $conn->prepare("INSERT INTO logins (Email, UserName, Password, CreatedOn) VALUES (?,?,?,?)");
  $insQuery->bind_param("ssss", $email, $username, $hashedPassword, $trn_date);
  $result = $insQuery->execute();
  if ($result) {
    return true;
  } else {
    return false;
  }
  $conn->close();
}

/*------------------------------------------------------------
 * Name:          CheckUserName
 * Purpose:       Returns true if username already exists
 * Args:          Username (String)
 * Returns:       BOOL
 * Date Created:  22 April 2022
 * Author:        Hritik R
 * ------------------------------------------------------------*/
function CheckUserName($username): bool
{
  $username = strtolower($username);
  $conn = GetMySqliConnection();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $conn->select_db("radiologger");
  $stmt = $conn->prepare("SELECT * FROM logins WHERE UserName = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    return true;
  } else {
    return false;
  }
  $stmt->close();
  $conn->close();
}

/*------------------------------------------------------------
 * Name:          CheckEmail
 * Purpose:       Returns true if email already exists
 * Args:          Username (String)
 * Returns:       BOOL
 * Date Created:  22 April 2022
 * Author:        Hritik R
 * ------------------------------------------------------------*/
function CheckEmail($email): bool
{
  $email = strtolower($email);
  $conn = GetMySqliConnection();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $conn->select_db("radiologger");
  $stmt = $conn->prepare("SELECT * FROM logins WHERE Email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    return true;
  } else {
    return false;
  }
  $stmt->close();
  $conn->close();
}


/*------------------------------------------------------------
 * Name:          REQUEST_METHOD to Check UserName
 * Purpose:       Check if username exists in database
 * Args:          username
 * Returns:       Return JSON Message
 * Date Created:  22 April 2022
 * Author:        Hritik R
 * ------------------------------------------------------------*/
if (isset($_POST['checkUserName'])) {
  $responseArr = array();
  if (CheckUserName($_POST['username'])) {
    $responseArr['code'] = 400;
    $responseArr['msg'] = '<span class="error">Username not available</span>';
  } else {
    $responseArr['code'] = 200;
  }
  echo json_encode($responseArr, JSON_PRETTY_PRINT);
}

/*------------------------------------------------------------
 * Name:          REQUEST_METHOD to Check Email
 * Purpose:        Check if email exists in database
 * Args:          username
 * Returns:       Return JSON Message
 * Date Created:  22 April 2022
 * Author:        Hritik R
 * ------------------------------------------------------------*/
if (isset($_POST['checkEmail'])) {
  $responseArr = array();
  if (CheckEmail($_POST['email'])) {
    $responseArr['code'] = 400;
    $responseArr['msg'] = '<span class="error">Email address already in use</span>';
  } else {
    $responseArr['code'] = 200;
  }
  echo json_encode($responseArr, JSON_PRETTY_PRINT);
}
