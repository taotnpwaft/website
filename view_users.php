<?php

include("DatabaseHelper.php");

$view users query="select * from users";
//Select query for viewing users.

$run mysqli query($dbcon,$view_users_query);

while($row=mysqli_fetch_array($run))
{
    $user_id=$row[0];
    $user_name=$row[1];
    $user_email=$row[2];
    $user_pass=$row[3];
}

echo $user_id;
echo $user_name;
echo $user_email;
echo $user_pass;

<td><a href="delete.php?del=<?php echo $user_id ?>"><button class="danger">Delete</button></a></td>
<?php } ?>
