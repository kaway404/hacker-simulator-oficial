<?php
require './../config.php';
$para = $_POST['iduser'];
$de = $_COOKIE['iduser'];
$result_usuario_msg = "SELECT * FROM msg WHERE de = '$de' && para = '$para' OR de = '$para' && para = '$de'  ";
$resultado_usuario_msg = mysqli_query($conn, $result_usuario_msg);
$msg = mysqli_fetch_assoc($resultado_usuario_msg);
if(isset($msg)){
foreach ($resultado_usuario_msg as $resultado_usuario_msg => $resultado_usuario_msgs) {?>

<?php if($resultado_usuario_msgs['de'] == $de){?>
<li style="cursor: pointer; float: right; right: 10px; position: relative; display: block; width: 95%; border-radius: 10px; background: #7383bf; margin-top : 10px; padding-bottom: 10px;padding-top: 10px;"  class="msg_stranger" data-id="<?php echo $resultado_usuario_msgs['id'];?>"><img src="res/img/default.jpg" style="border-radius: 50%; left: 10px; position: relative; width: 30px; height: 30px; top: 5px;" /> <p style="position: relative; color: #fff; top: -20px; left: 50px; font-size: 17px;"><?php echo $resultado_usuario_msgs['msg'];  ?></p></li>
<?php } ?>
<?php if($resultado_usuario_msgs['de'] == $para){?>
<li style="cursor: pointer; float: right; right: 10px; position: relative; display: block; width: 95%; border-radius: 10px; background: #ddd;  margin-top : 10px; padding-bottom: 10px;padding-top: 10px;" class="msg_stranger" data-id="<?php echo $resultado_usuario_msgs['id'];?>"><img src="res/img/default.jpg" style="border-radius: 50%; left: 10px; position: relative; width: 30px; height: 30px; top: 5px;" /> <p style="position: relative; color: #000; top: -20px; left: 50px; font-size: 17px;"><?php echo $resultado_usuario_msgs['msg'];  ?></p></li>
<?php } ?>


<?php } } else{?> <li style="cursor: pointer; float: right; right: 10px; position: relative; display: block; width: 95%; border-radius: 10px; background: #7383bf; margin-top : 10px; padding-bottom: 10px;padding-top: 10px;" class="msg_stranger"><p style="position: relative; color: #fff; top: 0px; left: 10px; font-size: 17px;">Nenhuma conversa</p></li>
<?php } ?>


<script type="text/javascript">
	sykpeiduser = <?php echo $para;?>;
	$("#skype .container .bottom").html("<form><input style='position: relative; width: 100%; height: 50px;' data-id='<?php echo $para;?>' class='sendmsg' placeholder='Mensagem..'> <button class='sendmsgok' data-id='<?php echo $para;?>'></button></form>");
	$("#skype .container .bottom .sendmsgok").hide();
	skypeopen = 1;
	$(".sendmsgok").click(function(){
	var idbutton = $(this).data("id");
	var msg = $(".sendmsg").val();
	$.post("/sendmsg", {iduser: idbutton, msg: msg},
        function(send){
        if(send == "sucess"){
          	console.log("send msg");
          	$(".sendmsg").val("");
          	$.post("/bloo", {iduser: idbutton},
                function(update){
                    console.log(update);
                    console.log("update");
                 }
                  , "html");
	       }
         }
          , "html");
	return false;
	});
</script>
