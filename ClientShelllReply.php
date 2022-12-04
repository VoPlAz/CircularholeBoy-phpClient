<?php

$reply = $_GET["reply"];
$Ip = $_GET["ip"];
$ConfigFile = fopen("config/".$Ip."/replyconfig.cir","w+");
fwrite($ConfigFile,$reply);
fclose($ConfigFile);

?>