<?php
require './../config.php';
$iduser = $_COOKIE['iduser'];
$quem = $_POST['iduser'];
$ativo = "0";
$sql2 = "INSERT INTO news (de, para, ativo)
VALUES ('".$iduser."', '".$quem."', '".$ativo."')";
if (mysqli_query($conn, $sql2)) {
	$sucess = "1";
}
