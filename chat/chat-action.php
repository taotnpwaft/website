<?php
session_start();
include ('Chat.php');
if($_POST['action'] == 'insert_chat') {
	$chat->insertChat($_POST['to_user_id'], $_SESSION['userid'], $_POST['chat_message']);
}
?>