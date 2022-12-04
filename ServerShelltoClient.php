<?php

$shell = $_GET["shell"];
$Ip = $_GET["ip"];
$ConfigFile = fopen("config/".$Ip."/shellconfig.cir","w+");
fwrite($ConfigFile,$shell);
fclose($ConfigFile);

?>