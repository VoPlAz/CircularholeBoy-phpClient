<?php
$Ip = $_GET["ip"];
$Reply = file_get_contents("config/".$Ip."/replyconfig.cir","w+");
$File = fopen("config/".$Ip."/replyconfig.cir","w+");
fwrite($File,"");
fclose($File);
exit($Reply);
?>