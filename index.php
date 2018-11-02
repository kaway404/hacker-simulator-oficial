<?php
include 'config.php';
include 'api/user.php';
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title><?php echo $namesite;?></title>
  
  
  
      <link rel="stylesheet" href="res/css/style.css">

<script type="text/javascript" src="res/js/jquery.js"></script>
<script type="text/javascript" src="res/js/jqueryui.js"></script>
<script type="text/javascript" src="res/js/moderno.js"></script>
<script type="text/javascript" src="res/js/functions.js"></script>
<script type="text/javascript" src="res/js/sound.js"></script>
  
</head>

<body>
<!-- FAIL -->
<div id="fail">
	<div class="fail-browser-logo">
    	<img src="res/img/apple-logo-login.png" alt="Mac OS X" />
    </div>
    <div class="fail-browser">
        <p><strong>I'm sorry to inform you that your browser don't support CSS3 Animations!</strong></p> 
        <p>This site uses features that <em>require</em> a modern browser - why not try <a href="https://www.mozilla.org/en-US/firefox/fx/" target="_blank" title="Download Firefox">Firefox</a> ?</p>
    </div>
</div>

<!-- BOOT -->
<div id="pageLoading">
    <div class="loading">
        <div class="apple-logo"></div>
        <div class="spinner"></div>
    </div>
</div>

<?php
if(empty($_COOKIE['iduser']) && (empty($_COOKIE['cry']) )){?>
<!-- LOGIN -->
<div id="pageLogin">
	<header id="headlogin">
		<nav id="menu-dx-login">
    	<ul>
   			<li class="wireless"></li>
    		<li class="time">
    		<ul>
				<li class="hours"> </li>
    			<li class="point">:</li>
    			<li class="min"> </li>
        	</ul>
    		</li>
		</ul>
    	</nav>
    </header>
	<div class="new-apple-logo"></div>
    
    <div class="user-avatar">
        <div id="avatar">
        <a href="#hide" class="hide" id="hide"></a>
        <a href="#show" class="show" id="show"></a>
        <div id="cover"></div>
        <div class="ava-css">
        <img src="res/img/default.jpg" />
        </div>
        <div class="logName">
        <p>Stranger</p>
        </div>
        <div id="switch">
        <div class="validate logando">
        <form>
        	<input type="text" id="username" placeholder="Username" />
            <input type="password" id="password" placeholder="Password" />
            <input type="submit" class="submit" />
            </form>
        <a class="cadastrarse" style="color: #fff; position: relative; top: 10px; cursor: pointer;">I dont have any account</a>
        </div>
        <div class="validate cadastra">
        <form>
            <input type="text" id="username-r" placeholder="Username" />
            <input type="text" id="email" placeholder="E-mail" />
            <input type="password" id="password-r" placeholder="Password" />
            <input type="submit" class="cadastro" />
            </form>
        <a class="logandos" style="color: #fff; position: relative; top: 10px; cursor: pointer;">I have account</a>
        </div>
        </div>
        </div>
        </div>
    </div>

<script type="text/javascript">
    $(".cadastra").hide();
</script>

<script type="text/javascript" src="res/js/login.js"></script>

<?Php } 
        else if(isset($_COOKIE['cry'])){
        if(empty($_COOKIE['iduser'])){
    ?>
<!-- LOGIN -->
<div id="pageLogin">
    <header id="headlogin">
        <nav id="menu-dx-login">
        <ul>
            <li class="wireless"></li>
            <li class="time">
            <ul>
                <li class="hours"> </li>
                <li class="point">:</li>
                <li class="min"> </li>
            </ul>
            </li>
        </ul>
        </nav>
    </header>
    <div class="new-apple-logo"></div>
    
    <div class="user-avatar">
        <div id="avatar">
        <a href="#hide" class="" s="hide" id="hide"></a>
        <a href="#show" class="show" id="show"></a>
        <div id="cover"></div>
        <div class="ava-css">
        <img src="res/img/default.jpg" />
        </div>
        <div class="logName">
        <p><?php echo $cry['username'];?></p>
        </div>
        <div id="switch">
        <div class="validate verificando">
        <form>
            <input type="password" id="passwordok" placeholder="Password" />
            <input type="submit" class="verificar" style="top: 1px;" />
            </form>
        <a href="/logoutp" class="cadastrarse" style="color: #fff; position: relative; top: 10px; cursor: pointer;">Start session in other account</a>
        </div>
        </div>
        </div>
        </div>
    </div>

<script type="text/javascript" src="res/js/login.js"></script>

<?php } } ?>
<?php if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){?>

<script type="text/javascript">
    let thisuser = '<?php echo $user['username'];?>';
    let thisip = '<?php echo $user['ip'];?>';
</script>

<!-- DESKTOP -->
<div id="page">
<header id="head">
	<nav id="menu">
    	<ul>
        <li class="apple">
        	<a href="#all" class="logoa">Apple</a>
            <ul class="sublist">
            <li><a href="#about-this-mac" data-rel="show">About This Mac</a></li>
            <li>Software Updates...</li>
            <li>App Store...</li>
            <li class="divider"></li>
            <li>System Preferences...</li>
            <li>Dock
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>Turn Hiding Off</li>
                <li>Turn Magnification Off</li>
                <li class="divider"></li>
                <li>Position on Left</li>
                <li>Position on Bottom</li>
                <li>Position on Right</li>
                <li class="divider"></li>
                <li>Dock Preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Recent Items
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">Applications</li>
                <li class="divider"></li>
                <li class="disable">Documents</li>
                <li class="divider"></li>
                <li class="disable">Servers</li>
                <li class="divider"></li>
                <li>Clear Menu</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Force Quit...</li>
            <li class="divider"></li>
            <li>Sleep</li>
            <li>Restart...</li>
            <li>Shut Down...</li>
            <li class="divider"></li>
            <a style="color: #000; left: 0; position: relative;" href="/logout"><li>Log Out...</li></a>
            </ul>
        </li>
        <li class="here">
        	<a href="#all">Finder</a>
        	<ul class="sublist">
            <li><a href="#finder" data-rel="show">About Finder</a></li>
            <li class="divider"></li>
            <li>Preferences...</li>
            <li class="divider"></li>
            <li>Secure Empty Trash...</li>
            <li class="divider"></li>
            <li>Services
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">No Services Apply</li>
                <li>Services Preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Hide Finder</li>
            <li>Hide Others</li>
            <li class="disable">Show All</li>
            </ul>
        </li>
        </ul>
	</nav>
    <nav id="menu-dx">
    	<ul>
        <li class="wireless">
        	<a href="#all">Wireless</a>
        </li>
        <li class="time">
        	<ul>
            <li id="DateAbbr"> </li>
            <li class="hour"> </li>
    		<li class="point">:</li>
    		<li class="mins"> </li>
            </ul>
        </li>
        <li class="username">
        	<a href="#all" id="usernamea"><?php echo $user['username'];?></a>
        </li>
		</ul>
    </nav>
</header>


<div id="finder" class="window finder">
	<nav class="control-window">
    <a href="#finder" class="close" data-rel="close">close</a>
    <a href="#" class="minimize">minimize</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">About Finder</h1>
    <div class="container">
    	<div class="container-inside">
        <img src="res/img/FinderIcon.png" alt="Finder"/>
        <div class="about-this">
        <h2>Finder</h2>
        <p>The Macintosh Desktop Experience</p>
        <p class="small">Finder version 10.7.1</p>
        </div>
        <div class="copyright">
        <p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
        </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let sykpeiduser = 0;
</script>

<!-- Skype -->
<div id="skype" class="window skype">
    <nav class="control-window">
    <a href="#skype" class="close" data-rel="closeskype">close</a>
    <a href="#" class="minimize">minimize</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">Skype</h1>
    <div class="container">
        <div class="left">
            <div class="status">
                <img src="res/img/default.jpg" style="border-radius: 50%; height: 30px; width: 30px; position: absolute; left: 10px; top: 5px;" />
                <p><?php echo $user['username'];?></p>
            </div>
            <input class="buscart" type="text" name="" placeholder="Search friend..">
            <div class="busca404">
                <center><span style="position: relative; top: 3px;">Busca não encontrada para <span class="keysearch"></span></span></center>
            </div>
            <ul class="busca">
            </ul>
        </div>
        <div class="center">
            <div class="stranger">
            <div class="header">
                <center>
                    <h1 class="namestranger">Stranger</h1>
                    <div class="menu"></div>
                </center>
            </div>
            <div class="msgcontent">
                <div class="contentmsg"><div class="msgpapa"></div></div>
                <div class="hallow">
                <div class="before"></div>
                </div>
            </div>
            <div class="bottom">
                <input type="" name="" placeholder="Mensagem..">
            </div>
            </div>
            <div class="me">
                <img style="width: 100px; height: 100px; position: relative; top: 20px; left: 20px; border-radius: 50%;" src="res/img/default.jpg"/>
                <h1 style="font-size: 18px; position: relative; left: 130px; top: -35px;"><?php echo $user['username'];?></h1>
                <span class="status_p_d">Meu status : <span class="status_atual"><?php if($user['status'] == "")
                { echo 'Status...';
                } else
                { echo $user['status'];}
                ?></span></span>
                <form>
                <input type="text" class="change_status" placeholder="No que você tá pensando?" value="<?php if($user['status'] == "")
                { echo '';
                } else
                { echo $user['status'];}
                ?>">
                <button class="confirm_status">OK</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".stranger").hide();
    $(".busca404").hide();
    $(".change_status").hide();
    $(".confirm_status").hide();
    $(".close_status").hide();
    $("#skype .container .status_p_d").click(function(){
        if ($('#skype .container .change_status').is(":visible")){
            $(".change_status").hide();
            $(this).show();
        }
        else{
            $(".change_status").show();
            $(this).hide();
            $(".close_status").show();
        }
    });

    $(".confirm_status").click(function(){
        var type = $(".change_status").val();
        if(type == ""){
            $(".change_status").hide();
            $(".status_p_d").show();
        }
        else{
            $(".status_atual").html(type);
            $(".change_status").val(type);
            $(".change_status").hide();
            $(".status_p_d").show();
            $.post("/status_change", {status: type},
            function(data){
            console.log(data);
             }
          , "html");
        }
        return false;
    });

</script>

<script type="text/javascript" src="res/js/me-status-skype.js"></script>
<script type="text/javascript" src="res/js/search-user-skype.js"></script>
<script type="text/javascript" src="res/js/started_chat_skype.js"></script>

<script type="text/javascript">
        setInterval( function() {
            if(skypeopen == "1"){
            setTimeout(  function() {
            $.post("/buzz", {iduser: sykpeiduser},
            function(okaysr){
                if(okaysr == "no"){
                    console.log("not");
                }
                else{
                soundnot();
                bottomscroll();
                console.log("work");
                if(skypeopen == "1"){
                $.post("/update_1", {iduser: sykpeiduser},
                function(update){
                    console.log(update);
                    console.log("update");
                 }
                  , "html");
                }
                $("#skype .container .center .me").hide();
                $("#skype .container .center .stranger").show();
                $("#skype .container .before").before(okaysr);
                }
             }
              , "html");
          }, 1500);
          }
            },1500);



function soundnot(){
    console.log("notication sound");
    notification.play();
    setTimeout(function(){
    notification.pause();
    notification.currentTime = 0;
    }, 2000);
}

function bottomscroll(){
    event.preventDefault();
    $(".msgcontent").animate({
     scrollTop: "+=100070"
   }, "fast");
}

</script>


<!-- Preferences -->

<div id="terminald" class="window terminal">
    <nav class="control-window">
    <a href="#terminald" class="close" data-rel="close">close</a>
    <a href="#" class="minimize">minimize</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">Terminal</h1>
    <div class="container" style="overflow-y: auto; overflow-x: hidden; height: 370px;">
      <div id="container">

      </div>
      <script src='./res/js/termly-prompt.min.js'></script>
      <script>
        var shell = new TermlyPrompt('#container')
      </script>
    </div>
</div>

<div id="about-this-mac" class="window mac">
	<nav class="control-window">
    <a href="#about-this-mac" class="close" data-rel="close">close</a>
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="title-mac">About This Mac</h1>
    <div class="container">
    	<div class="container-inside">
    	<img src="res/img/MacOSX.png" alt="Mac OS X"/>
    	<div class="about-this">
    	<p>Version 10.7.2</p>
        <p><a class="button about" href="#">Software Update...</a></p>
        <ul class="hardware">
        <li><strong>Processor</strong> 2 Ghz Intel Core 2 Duo</li>
        <li><strong>Memory</strong> 4 GB 1067 Mhz DDR3</li>
        <li><strong>Startup Disk</strong> Macintosh HD</li>
        </ul>
        <p><a class="button about" href="#">More Info...</a></p>
    	<div class="copyright">
    	<p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
    	</div>
    	</div>
    	</div>
    </div>
</div>
<?php if($user['tuturial'] == "0"){?>
<div id="about-this-mac" class="window mac ajuda">
    <nav class="control-window">
    <a href="#" class="close" data-rel="close">close</a>
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="title-mac">Help</h1>
    <div class="container">
        <div class="container-inside">
        <div class="progress">
            <div class="pointer pone"></div>
            <div class="pointer ptwo"></div>
            <div class="subprogress"></div>
        </div>
        <img src="res/img/MacOSX.png" alt="Mac OS X"/>
        <div class="about-this" id="oneclass">
        <p>Seja bem vindo <?php echo $user['username'];?> ao <?php echo $namesite;?></p>
        <ul class="hardware">
        <li>Isso aqui é um jogo de "hacker", você pode hackiar os outros players, instalar vírus na maquina</li>
        <li>Você pode também configurar seu DESKTOP, configurar o Dock</li>
        <li>Seja o melhor hack de todos! :)</li>
        </ul>
        <p><a class="button about" href="#" id="continue">Continuar</a></p>
        <div class="copyright">
        <p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
        </div>
        </div>
        <div class="about-this" id="twoclass">
        <p>Algumas coisas importantes</p>
        <ul class="hardware">
        <li>Você não pode fazer flood no chat! Caso contrario você será banido</li>
        <li>Você não pode insultar os outros membros</li>
        <li><strong>Eu aceito todos os termos</strong></li>
        </ul>
        <p><a class="button about" href="#" id="finish">Finalizar</a></p>
        <div class="copyright">
        <p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
        </div>
        </div>
        </div>
    </div>
</div>

<style type="text/css">
    .progress{
        position: relative;
        width: 90%;
        margin: 0px auto;
        height: 10px;
        border-radius: 10px;
        background: #b3b2b2;
        margin-bottom: 20px;
        box-shadow: 1px 1px 2px rgba(68, 28, 81);
    }

    .progress .pointer{
        position: absolute;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 1px 1px 2px rgba(0,0,0,.50);
        top: -3px;
        transition: 0.5s;
    }

    .progress .pone{
        left: 20px;
    }

    .progress .ptwo{
        left: 107px;
    }

    .progress .subprogress{
        width: 10%;
        height: 10px;
        border-radius: 10px;
        background: -webkit-gradient( linear, left bottom, left top, color-stop(0, #D3F7FD), color-stop(0.5, #87C5FB), color-stop(0.5, #A1D1F9), color-stop(1, #D4E9FC));
        transition: 0.5s;
    }
</style>

<script type="text/javascript">
    $(".ptwo").hide();
    $("#twoclass").hide();
    $("#continue").click(function(){
        $("#oneclass").hide();
        $("#twoclass").show();
        $(".progress .subprogress").css("width", "50%");
        $(".pone").hide();
        $(".ptwo").show();
    });
    $("#finish").click(function(){
        $(".progress .subprogress").css("width", "100%");
        $(".ajuda").hide();
        $(".ptwo").hide();
        $.post( "/finish_tuturial", function( data ) {
              console.log("finish tuturial");
        });
    });
</script>
<?php } ?>

<div id="warning" class="window warning">
	<div class="tab"></div>
    <div class="container">
    	<div class="container-alert">
        <img src="res/img/Alert.png" alt="alert"/>
        <div class="about-alert">
        <h2>Alert</h2>
        <p>This application cannot be used in this version</p>
        <a href="#warning" class="button blink" data-rel="close">Close</a>
        </div>
        </div>
    </div>
</div>

<div id="trash" class="window warning">
	<div class="tab"></div>
    <div class="container">
    	<div class="container-alert">
        <img src="res/img/FinderIcon.png" width="48px" height="48px" alt="alert"/>
        <div class="about-alert">
        <h2>Secure Empty Trash permanently erases the items in the Trash. Are you sure you want to permanently erase them?</h2>
        <p>If you choose Secure Empty Trash, you can't recover the items unless you've backed them up using Time Machine or another backup program.</p>
        <a href="#warning" class="button blink" data-rel="">Secure Empty Trash</a>
        <a href="#trash" class="button simple" data-rel="close">Cancel</a>
        </div>
        </div>
    </div>
</div>

<!-- DOCK -->
<div class="dock">
	<ul>
    	<li id="finderr">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Finder</span></em>
                <img src="res/img/FinderIcon.png" alt="Finder"/>
            </a>
        </li>
        <li id="skypee">
        	<a href="#skype" data-rel="skype">
            	<em><span>Skype</span></em>
                <img src="res/img/skype.png" alt="Skype"/>
            </a>
        </li>
         <li id="terminal">
            <a href="#terminal" data-rel="terminal">
                <em><span>Terminal</span></em>
                <img src="res/img/cmd.png" alt="Terminal"/>
            </a>
        </li>
        <li id="appStore">
        	<a href="#warning" data-rel="showOp">
            	<em><span>App Store</span></em>
                <img src="res/img/appstore.png" alt="App Store"/>
            </a>
        </li>
        <li id="safari">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Safari</span></em>
                <img src="res/img/Safari.png" alt="Safari"/>
            </a>
        </li>
        <li id="iTunes">
        	<a href="#warning" data-rel="showOp">
            	<em><span>iTunes</span></em>
                <img src="res/img/iTunes.png" alt="iTunes"/>
            </a>
        </li>
        <li id="preferences" data-rel="preferences">
        	<a href="#warning" data-rel="showOp">
            	<em><span>System Preferences</span></em>
                <img src="res/img/preferences.png" alt="System Preferences"/>
            </a>
        </li>
        <li id="trash">
        	<a href="#trash" data-rel="showOpTrash">
            	<em><span>Trash</span></em>
                <img src="res/img/trash.png" alt="Trash"/>
            </a>
        </li>
    </ul>
</div>

</div>

<div class="notification_div">
    <div class="noti">
    <div class="after">
        
    </div>
    </div>
</div>

<script type="text/javascript">
    var me = <?php echo $_COOKIE['iduser'];?>;
    setInterval( function() {
            setTimeout(  function() {
            $.post("/count_news", {iduser: me},
            function(okaysr){
                if(okaysr == "no"){
                    console.log("not");
                }
                else{
                soundnot();
                bottomscroll();
                console.log("work");
                $.post("/update_2", {iduser: sykpeiduser},
                function(update){
                    console.log(update);
                    console.log("update");
                 }
                  , "html");
                $(".notification_div .after").before(okaysr);
                }
             }
              , "html");
          }, 1500);
            },1500);



function soundnot(){
    console.log("notication sound");
    notification.play();
    setTimeout(function(){
    notification.pause();
    notification.currentTime = 0;
    }, 2000);
}
</script>

<style type="text/css">
    .notification_div{
        position: absolute;
        width: 200px;
        height: 85%;
        bottom: 50px;
        float: right;
        right: 20px;
    }
    .notification_div .new-noti{
        margin-top: 10px;
        border-radius: 0px 5px;
        cursor: pointer;
        position: relative;
        width: 100%;
        height: auto;
        background: #fff;
        padding: 10px;
        background-image:-webkit-gradient(linear,left bottom,left top,color-stop(0, #EBEBEB),color-stop(0.5, #ECECEC),color-stop(0.5, #F3F3F3),color-stop(1, #FFFFFF));
        background-image:-moz-linear-gradient( center bottom, #EBEBEB 0%, #ECECEC 50%, #F3F3F3 50%, #FFFFFF 100%);
        box-shadow:inset 0 1px 0 rgba(255,255,255,1), 0 1px 0 rgba(0,0,0,0.09);
        transition: 1s; 
    }
</style>


<script type="text/javascript">
    $("#skype").hide();
    $("#about-this-mac").hide();
    $("#finder").hide();
    $("#terminald").hide();
</script>


<script type="text/javascript">
        $('#pageLogin').addClass('initLog').delay(1900).queue(function() { $(this).removeClass('initLog').addClass('initLogExit'); $(this).dequeue(); });;
        $('#page, #head').delay(2500).queue(function() { $(this).addClass('vis'); $(this).dequeue(); });
        $('.window').delay(3000).queue(function() { $(this).addClass('windows-vis'); $(this).dequeue(); });
//-----------------------------------------------------------------------------------
//  0    Var
//-----------------------------------------------------------------------------------
var left = 50 + '%';
var top = 15 + '%';
var item = $('<div class="fresh"></div>').hide();
var itemR = $('<div class="fresh"></div>').hide();

var skypeopen = "0";

$("a[data-rel=closeskype]").click(function(e) {
    e.preventDefault();
    $(this.hash).fadeOut(200, function() {
        $(this).css({ top: top, left: left });
    });
    skypeopen = "0";
});

</script>
<?php } ?>

</body>
  
<!-- Cool -->


</html>
