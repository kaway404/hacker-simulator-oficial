$(".buscart").keyup(function(){
	var texto = $(".buscart").val();
	if(texto == ""){
		$(".busca404").hide();
        $(".busca").html("");
	}
	else{
	$.post("/search_user", {username: texto},
        function(data){
        	if(data == '404<script type="text/javascript" src="res/js/started_chat_skype.js"></script>'){
        		$(".busca404").show();
        		$(".keysearch").html(texto);
                $(".busca").html("");
        	}
        	else{
        	$(".busca").html(data);
        	$(".busca404").hide();
        	}
        	return false;
       }
          , "html");
}
});