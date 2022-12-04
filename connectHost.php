<?php 
//Get IP
$ip = $_GET["ip"];
$IpConfigFile = fopen("config/ipconfig.cir","w+");
mkdir("config/".$ip, 0700);
fwrite($IpConfigFile,$ip);
fclose($IpConfigFile);
echo "test status:1";
?>
