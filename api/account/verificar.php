<?php 
require '../../config.php';

if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
    echo 'Você está logado';
}
else{
if(isset($_POST['email'])){
  $ip=$_SERVER['REMOTE_ADDR'];
	$email = $_POST['email'];
	
	$password = sha1($_POST['senha']);
    $iduser = $_COOKIE['iduser'];

		$result_usuario = "SELECT * FROM user WHERE iduser = '$iduser' && password = '$password' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    if(isset($resultado)){
    $iduser = $resultado['id'];
    $iduser = $resultado['cry'];
            setcookie("iduser", $resultado['id'], time() + (86400 * 30), "/");
            setcookie("cry", $resultado['cry'], time() + (86400 * 30), "/");
            echo 'true';
        }
        else{
        	echo 'check';
        }	
}
}
?>