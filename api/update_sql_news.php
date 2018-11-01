<?php
require './../config.php';
$para = $_POST['iduser'];
$de = $_COOKIE['iduser'];
$ativo = "1";
$sql = "UPDATE news SET ativo= '$ativo' WHERE para='$de'";
if ($conn->query($sql) === TRUE) {
	$senddd = "1";
}