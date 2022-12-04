<?php

$Ip = file_get_contents("config/ipconfig.cir","w+");
$File = fopen("config/ipconfig.cir","w+");
fwrite($File,"");
fclose($File);
exit($Ip);


?>