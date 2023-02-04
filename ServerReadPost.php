<?php
$Ip = $_GET["ip"];
$body = file_get_contents("config/".$Ip."/postconfig.cir","w+");
exit($body);

?>