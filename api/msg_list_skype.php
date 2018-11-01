<?php
require './../config.php';
$para = $_POST['iduser'];
$de = $_COOKIE['iduser'];
$result_usuario_msg = "SELECT * FROM msg WHERE de = '$de' && para = '$para' and ativo = '0' OR de = '$para' && para = '$de' and ativo = '0'  ";
$resultado_usuario_msg = mysqli_query($conn, $result_usuario_msg);
$msg = mysqli_fetch_assoc($resultado_usuario_msg);
if(isset($msg)){
foreach ($resultado_usuario_msg as $resultado_usuario_msg => $resultado_usuario_msgs) {?>

<?php if($resultado_usuario_msgs['de'] == $de){?>
<li style="cursor: pointer; float: right; right: 10px; position: relative; display: block; width: 95%; border-radius: 10px; background: #7383bf; margin-top : 10px; padding-bottom: 10px;padding-top: 10px;"  class="msg_stranger" data-id="<?php echo $resultado_usuario_msgs['id'];?>"><img src="res/img/default.jpg" style="border-radius: 50%; left: 10px; position: relative; width: 30px; height: 30px; top: 5px;" /> <p style="position: relative; color: #fff; top: -20px; left: 50px; font-size: 17px;"><?php echo $resultado_usuario_msgs['msg'];  ?></p></li>
<?php } ?>
<?php if($resultado_usuario_msgs['de'] == $para){?>
<li style="cursor: pointer; float: right; right: 10px; position: relative; display: block; width: 95%; border-radius: 10px; background: #ddd;  margin-top : 10px; padding-bottom: 10px;padding-top: 10px;" class="msg_stranger" data-id="<?php echo $resultado_usuario_msgs['id'];?>"><img src="res/img/default.jpg" style="border-radius: 50%; left: 10px; position: relative; width: 30px; height: 30px; top: 5px;" /> <p style="position: relative; color: #000; top: -20px; left: 50px; font-size: 17px;"><?php echo $resultado_usuario_msgs['msg'];  ?></p></li>
<?php } } } 
else{ echo 'no'; } ?>