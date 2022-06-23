<?php
$chatfile = "chat.log";
switch($_POST["action"]) {
    case "send":
        $format = "<p>%s <span class='nickname'>%s</span> %s</p>";
        $str = sprintf($format, date("H:i"), $_POST["name"], $_POST["msg"]);
        file_put_contents($chatfile, "$str\n", FILE_APPEND | LOCK_EX);
        echo chatLog($chatfile);
        break;
    case "poll":
        echo chatLog($chatfile);
        break;
}
function chatLog($f) {
    if(file_exists($f)) $log = file_get_contents($f); else $log = "";
    return $log;
}
?>