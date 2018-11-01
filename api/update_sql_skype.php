<?php
require './../config.php';
$para = $_POST['iduser'];
$de = $_COOKIE['iduser'];
$ativo = "1";
$sql = "UPDATE msg SET ativo= '$ativo' WHERE de='$de' and para='$para'";
if ($conn->query($sql) === TRUE) {
	$senddd = "1";
}