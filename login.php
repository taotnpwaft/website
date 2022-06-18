<?php
include "DatabaseHelper.php";
$result = ValidateLogin($_POST['username'], $_POST['password']);
$responseArr = array();
if ($result) {
  $responseArr['code'] = 200;
  $responseArr['msg'] = '<span class="success">Login Successful, You will be redirected to your profile in <span class="tm-c">3</span> seconds</span>';
} else {
  $responseArr['code'] = 400;
  $responseArr['msg'] = '<span class="error">Invalid username or password</span>';
}

echo json_encode($responseArr, JSON_PRETTY_PRINT);
