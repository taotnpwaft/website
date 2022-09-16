<?php
  include "DatabaseHelper.php";
  $result = ValidateLogin($_POST['UserName'], $_POST['Password']);
  $json = GetLoginTableData("SELECT * FROM logins");
  echo $result;
