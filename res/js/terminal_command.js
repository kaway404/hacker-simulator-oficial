$(".commandar").click(function(){
	var comando = $(".comando").val();
	if(comando === ""){
		console.log("comando vazio");
	}else{
	$(".comando").val("");
	if(comando === "help"){
	$(".commands").before("<p>Comandos de ajuda<br> ifconfig (Visualizar o seu IP) <br> clear (limpar)</p>");
	}
	else if(comando === "ifconfig"){
		$(".commands").before("<p>127.0.0.1</p>");
	}
	else if(comando === "clear"){
		$(".clear").html("<div class='commands'></div>");
	}
	else{
		$(".commands").before("<p>Esse comando não existe</p>");
	}
	}
	return false;
});