<?php 
require '../../config.php';

	$password = sha1($_POST['senha']);
    $crys = $_COOKIE['cry'];

	$result_usuariot = "SELECT * FROM user WHERE cry = '$crys' && password = '$password' LIMIT 1";
    $resultado_usuariot = mysqli_query($conn, $result_usuariot);
    $resultadot = mysqli_fetch_assoc($resultado_usuariot);
    if(isset($resultadot)){
    $iduser = $resultadot['id'];
    setcookie("iduser", $resultadot['id'], time() + (86400 * 30), "/");
    setcookie("cry", $resultadot['cry'], time() + (86400 * 30), "/");
    echo 'true';
        }
        else{
        	echo 'check';
        }	
?>