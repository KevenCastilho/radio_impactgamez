<?php include ('AutorizaUser.php');?>
<?php
session_start("login_usuario");
if(!($login_usuario AND senha_usuario)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<div class="text2"> Usu&aacute;rios Cadastrados
</div>
<br />
<center>
<?php
require_once("Config.php");
$id = $_GET["id"];
$query = "SELECT * FROM usuarios_clube order BY id";
$result = mysql_query($query);
while($play = mysql_fetch_array($result)){
$nome = $play['nome'];
$foto = $play['foto'];
?>
                &nbsp;<span><a href="index.php?pagina=Perfil&amp;nome=<? echo $play['nome']; ?>" title="<? echo $play['nome']; ?>"><img src='<?=$foto;?>' width='70' height='70' border="0" /></a></span>
                <? }?>
</center>
<br />