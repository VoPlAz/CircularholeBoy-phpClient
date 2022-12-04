<?php
$Ip = $_GET["ip"];
$System = file_get_contents("config/".$Ip."/systemconfig.cir","w+");
exit($System);
?>