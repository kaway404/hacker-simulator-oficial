<?php
require './../config.php';
$iduser = $_COOKIE['iduser'];
$quem = $_POST['iduser'];
$msg = $_POST['msg'];
$ativo = "0";

if(empty($_POST['msg'])){
	$status_msg = 0;
}

if (@$status_msg == "0") {
	echo '01';
	exit();
}
else{
$cool = "INSERT INTO news (de, para, ativo, lol)
VALUES ('".$iduser."', '".$quem."', '".$msg."', '".$ativo."', '".$ativo."')";
if (mysqli_query($conn, $cool)) {
	$sucess = "1";
}
}
