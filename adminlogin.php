<?php

include("DatabaseHelper.php");

if(isset($_POST['admin_login'])); //This will tell us what to do if some data has
{
$admin_name=$_POST['admin name'];
$admin_pass=$_POST['admin_pass'];

$admin_query="select * from admin where admin_name='$admin_name' AND admin_;

$run_query=mysqli_query($dbcon, $admin_query);

if(mysqli_num_rows($run_query)>0)
{

echo "<script>window.open('view_users.php','_self')</script>";

}
else {echo"<script>alert('Admin Details are incorrect..!')</script>";}
};

?>
