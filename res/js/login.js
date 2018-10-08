//-----------------------------------------------------------------------------------
//	1.	Fix Classes after Validate Login
//-----------------------------------------------------------------------------------

// $('.submit').click(function() {
// 	var ValPassword = $('#password').val() === 'admin';
//     if (ValPassword === true) {
// 		$('input[type=password]').addClass('valid');
// 		$('input[type=text]').addClass('valid');
// 		$('.tooltip-pass').hide();
// 		$('.submit').removeClass('submit').addClass('charge');
// 		$('#pageLogin').addClass('initLog').delay(1900).queue(function() { $(this).removeClass('initLog').addClass('initLogExit'); $(this).dequeue(); });;
// 		$('#page, #head').delay(2500).queue(function() { $(this).addClass('vis'); $(this).dequeue(); });
// 		$('.window').delay(3000).queue(function() { $(this).addClass('windows-vis'); $(this).dequeue(); });
// 		event.preventDefault();
//     }
//     else {
// 		$('input[type=password]').select();
//     	$('.validate').addClass('error').delay(210).queue(function() { $(this).removeClass('error'); $(this).dequeue(); $('.tooltip-pass').show(); });
// 			return false;
//     	}
// });

 $(".cadastrarse").click(function() {
     $(".logando").hide();
     $(".cadastra").show();
});

$(".logandos").click(function() {
	$(".cadastra").hide();
    $(".logando").show();
    });


$('.submit').click(function() {
	 	var email = $("#username");
        var emailPost = email.val();
        var senha = $("#password");
        var senhaPost = senha.val();
        $.post("/logando", {email: emailPost, senha: senhaPost},
        function(data){
       	if(data == "check"){
       		$('input[type=password]').select();
	    	$('.validate').addClass('error').delay(210).queue(function() { $(this).removeClass('error'); $(this).dequeue(); $('.tooltip-pass').show(); });
			return false;
       	}
       	else if(data == "true"){
       		$('input[type=password]').addClass('valid');
    			$('input[type=text]').addClass('valid');
    			$('.submit').removeClass('submit').addClass('charge');
          location.reload();
			 	}
         }
          , "html");
         return false;
});

$('.cadastro').click(function() {
	 	var user = $("#username-r");
        var userPost = user.val();
        var senha = $("#password-r");
        var senhaPost = senha.val();
        var email = $("#email");
        var emailPost = email.val();
        $.post("/cadastrando", {email: emailPost, senha: senhaPost, user: userPost},
        function(data){
       	if(data == "01"){
       		$('.cadastro input[type=password]').select();
	    	$('.validate').addClass('error').delay(210).queue(function() { $(this).removeClass('error'); $(this).dequeue(); $('.tooltip-pass').show(); });
			return false;
       	}
       	else if(data == "02"){
       		$('.cadastro input[type=password]').select();
	    	$('.validate').addClass('error').delay(210).queue(function() { $(this).removeClass('error'); $(this).dequeue(); $('.tooltip-pass').show(); });
			return false;
       	}
       	else if(data == "sucess"){
			location.reload();	
    }
         }
          , "html");
         return false;
});

$('.verificar').click(function() {
        var senha = $("#passwordok");
        var senhaPost = senha.val();
        $.post("/verificando", {senha: senhaPost},
        function(data){
        if(data == "01"){
          $('.verificando input[type=password]').select();
          $('.validate').addClass('error').delay(210).queue(function() { $(this).removeClass('error'); $(this).dequeue(); $('.tooltip-pass').show(); });
      return false;
        }
        else if(data == "02"){
          $('.verificando input[type=password]').select();
          $('.validate').addClass('error').delay(210).queue(function() { $(this).removeClass('error'); $(this).dequeue(); $('.tooltip-pass').show(); });
      return false;
        }
        else if(data == "sucess"){
      location.reload();  
    }
         }
          , "html");
         return false;
});