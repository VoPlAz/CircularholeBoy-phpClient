<?php
$Ip = $_GET["ip"];
$Reply = file_get_contents("config/".$Ip."/replyconfig.cir","w+");
exit($Reply);
?>