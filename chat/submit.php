<?php
  session_start();
  require_once( "config.php" );
  require_once( "/path/to/class/chatClass.php" );
  $chattext = htmlspecialchars( $_GET['chattext'] );
  chatClass::setChatLines( $chattext, $_SESSION['usrname'], $_SESSION['color']);
?>