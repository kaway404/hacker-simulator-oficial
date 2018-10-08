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