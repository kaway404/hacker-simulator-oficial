<?php
require './../config.php';
$de = $_COOKIE['iduser'];
$ativo = "1";
$sql = "UPDATE news SET ativo= '$ativo' WHERE para='$de'";
if ($conn->query($sql) === TRUE) {
	$senddd = "1";
}