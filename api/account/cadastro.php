<?php
require '../../config.php';
$email = $_POST['email'];
$user = $_POST['user'];
$senha = sha1($_POST['senha']);
$cry = sha1($_POST['email']);
$randomip = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);

if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
	$logado = 1;
}
else{

if(empty($_POST['user'])){
	$status_user = 0;
}
if(empty($_POST['email'])){
		$status_email = 0;
}
if(empty($_POST['senha'])){
		$status_senha = 0;
}

if (@$status_email == "0" OR @$status_senha == "0" OR @$status_user == "0") {
	echo '01';
	exit();
}

$result_usuario = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);
if(isset($resultado)){
echo '02';
exit();
}

$result_usuario2 = "SELECT * FROM user WHERE username = '$user' LIMIT 1";
$resultado_usuario2 = mysqli_query($conn, $result_usuario2);
$resultado2 = mysqli_fetch_assoc($resultado_usuario2);
if(isset($resultado2)){
echo '02';
exit();
}

else{
$sql = "INSERT INTO user (cry, email, password, username, ip)
VALUES ('".$cry."', '".$email."', '".$senha."', '".$user."', '".$randomip."')";
if (mysqli_query($conn, $sql)) {
	$result_usuario = "SELECT * FROM user WHERE email = '$email' && password = '$senha' LIMIT 1";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	setcookie("iduser", $resultado['id'], time() + (86400 * 30), "/");
	setcookie("cry", $resultado['cry'], time() + (86400 * 30), "/");
	echo 'sucess';
}
}
}