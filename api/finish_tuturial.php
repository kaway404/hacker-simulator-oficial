<?php
require './../config.php';
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
		$iduser = $_COOKIE['iduser']; 
		$sql = "UPDATE user SET tuturial= '1' WHERE id='$iduser'";
		if ($conn->query($sql) === TRUE) {
	    echo "sucess";
	}
	else{
		echo 'erro';
	}
}
else{
	echo 'no logado';
}