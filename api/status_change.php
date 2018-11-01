<?php
require './../config.php';
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
		$iduser = $_COOKIE['iduser']; 
		$status = $_POST['status'];
		$sql = "UPDATE user SET status= '$status' WHERE id='$iduser'";
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