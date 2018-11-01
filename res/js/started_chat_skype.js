$(".busca li").click(function(){
	$("#skype .container .contentmsg").html("");
	skypeopen = "0";
	var idpeople = $(this).text();
	var idstranger = $(this).data("id");
	var inicial = '<div class="before"></div>';
	if(idpeople == ""){
		console.log("campo vazio");
	}
	else{
		$(".namestranger").html(idpeople);
		$(".busca404").hide();
		$(".buscart").val("");
        $(".busca").html("");
		$.post("/newchat", {iduser: idstranger},
        function(chat){
        if(chat == "notfound"){
          	$("#skype .container .contentmsg").html("");
          	$("#skype .container .center .me").hide();
			$("#skype .container .center .stranger").show();
	       }
	       else{
	        $("#skype .container .center .me").hide();
			$("#skype .container .center .stranger").show();
			$("#skype .container .contentmsg").html(chat);
			$("#skype .container .hallow").html(inicial);
	       }
         }
          , "html");
         return false;
	}
});