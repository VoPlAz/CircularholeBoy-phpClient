<?php
$Ip = $_GET["ip"];

$state = file_get_contents("config/".$Ip."/shellstate.cir","w+");

exit($state);


?>