<?php
require './../config.php';
$para = $_POST['iduser'];
$de = $_COOKIE['iduser'];
$result_usuario_news = "SELECT * FROM news WHERE para = '$de' and ativo = '0' ";
$resultado_usuario_news = mysqli_query($conn, $result_usuario_news);
$news = mysqli_fetch_assoc($resultado_usuario_news);
if(isset($news)){
foreach ($resultado_usuario_news as $resultado_usuario_news => $resultado_usuario_newss) {
$idusera = $resultado_usuario_newss['de'];
$result_usuario_usu = "SELECT * FROM user WHERE id = '$idusera' ";
$resultado_usuario_usu = mysqli_query($conn, $result_usuario_usu);
$usus = mysqli_fetch_assoc($resultado_usuario_usu);
foreach ($resultado_usuario_usu as $resultado_usuario_usu => $resultado_usuario_usus) {
	?>

<div class="new-noti">
        <h1><?php echo $resultado_usuario_usus['username'];?></h1>
        <p>Te mandou uma mensagem</p>
</div>

<script type="text/javascript">
	$(".new-noti").click(function(){
        $(this).css("display", "none");
    });
</script>

<?php  } } } 
else{ echo 'no'; } ?>