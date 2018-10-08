<?php
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
$iduser = $_COOKIE['iduser'];
$cry = $_COOKIE['cry'];
$result_usuario = "SELECT * FROM user WHERE id = '$iduser' and cry = '$cry' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$user = mysqli_fetch_assoc($resultado_usuario);
$logged = null;



if(isset($user)){
	$logged = 'true';
	echo '<p class="logged" style="display: none"></p>';
}
else{
	$logged = 'false';
	setcookie("iduser", '', time() + (86400 * 30), "/");
	setcookie("cry", '', time() + (86400 * 30), "/");
	header('Location: /');
}
}

if(empty($_COOKIE['iduser']) ){
if(isset($_COOKIE['cry'])){
$cryd = $_COOKIE['cry'];
$result_cry = "SELECT * FROM user WHERE cry = '$cryd' LIMIT 1";
$resultado_cry = mysqli_query($conn, $result_cry);
$cry = mysqli_fetch_assoc($resultado_cry);
$logged = null;


if(isset($cry)){
	$logged = 'true';
	echo '<p class="logged" style="display: none"></p>';
}
else{
	$logged = 'false';
	setcookie("cry", '', time() + (86400 * 30), "/");
	header('Location: /');
}
}
}