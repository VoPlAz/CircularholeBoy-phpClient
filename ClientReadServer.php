<?php
$Ip = $_GET["ip"];
$Shell = file_get_contents("config/".$Ip."/shellconfig.cir","w+");
//clear the shell to inf read
$ConfigFile = fopen("config/".$Ip."/shellconfig.cir","w+");
fwrite($ConfigFile,"");
fclose($ConfigFile);
exit($Shell);
?>