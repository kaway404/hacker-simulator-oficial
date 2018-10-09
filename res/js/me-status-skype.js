$("#skype .container .left .status").click(function(){
	if ($('#skype .container .center .me').is(":visible")){
		$("#skype .container .center .me").hide();
		$("#skype .container .center .stranger").show();
	}
	else{
	$("#skype .container .center .me").show();
	$("#skype .container .center .stranger").hide();
	}
});