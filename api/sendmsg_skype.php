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
$sql = "INSERT INTO msg (de, para, msg, ativo)
VALUES ('".$iduser."', '".$quem."', '".$msg."', '".$ativo."')";
if (mysqli_query($conn, $sql)) {
	echo 'sucess';
}
$sql2 = "INSERT INTO news (de, para, msg, ativo)
VALUES ('".$iduser."', '".$quem."', '".$ativo."')";
if (mysqli_query($conn, $sql2)) {
	$sucess = "1";
}
}
