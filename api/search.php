<?php
require './../config.php';
$user = $_POST['username'];
$result_usuario_friend = "SELECT * FROM user WHERE username LIKE '%$user%'";
$resultado_usuario_friend = mysqli_query($conn, $result_usuario_friend);
$friend = mysqli_fetch_assoc($resultado_usuario_friend);
if(isset($friend)){
foreach ($resultado_usuario_friend as $resultado_usuario_friend => $resultado_usuario_friends) {?>

<li data-id="<?php echo $resultado_usuario_friends['id'];?>"><img src="res/img/default.jpg"/><span><?php echo $resultado_usuario_friends['username'];?></span></li>

<?php } } else{ echo '404';}?><script type="text/javascript" src="res/js/started_chat_skype.js"></script>