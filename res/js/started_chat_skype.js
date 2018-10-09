$(".busca li").click(function(){
	var idpeople = $(this).text();
	if(idpeople == ""){
		console.log("campo vazio");
	}
	else{
		$(".namestranger").html(idpeople);
		$("#skype .container .center .me").hide();
		$("#skype .container .center .stranger").show();
	}
});