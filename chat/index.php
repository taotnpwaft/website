<?php
  session_start();
  if(IsSet($_SESSION[ "usrname" ]) && $_SESSION[ "usrname" ] == "") {
    ?>
<html>
  <head>
    <title>Chat Room Example</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <h1>Please choose a nickname and a color</h1>
    <form action="login.php" method="post">
      <table cellpadding="5" cellspacing="0" border="0">
        <tr>
          <td align="left" valign="top">Nickname :</td>
          <td align="left" valign="top">
            <input type="text" name="usrname" />
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">Color :</td>
          <td align="left" valign="top">
            <select name="color">
              <option value="000000">Black</option>
              <option value="000080">Navy</option>
              <option value="800080">Purple</option>
              <option value="00FFFF">Aqua</option>
              <option value="FFFF00">Yellow</option>
              <option value="008080">Teal</option>
              <option value="A52A2A">Brown</option>
              <option value="FFA500">Orange</option>
              <option value="CCCCCC">Gray</option>
              <option value="0000FF">Blue</option>
              <option value="00FF00">Green</option>
              <option value="FF00FF">Magenta</option>
              <option value="FF0000">Red</option>
            </select>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top"></td>
          <td align="left" valign="top"><input type="submit" value="Login" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
    <?php
  }else{ }
?>