<?php
$System = $_GET["system"];
$Ip = $_GET["ip"];
$ConfigFile = fopen("config/".$Ip."/systemconfig.cir","w+");
fwrite($ConfigFile,$System);
fclose($ConfigFile);
?>