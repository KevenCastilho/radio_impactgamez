<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(!($login_user AND $senha_user)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
<?
$select = "SELECT*FROM configs";
$result = mysql_query($select);
while ($alterar = mysql_fetch_array($result)){
$titulo = $alterar["titulo"];
$nomeradio = $alterar["nomeradio"];
$url = $alterar["url"];
$orkut = $alterar["orkut"];
$ip = $alterar["ip"];
$port = $alterar["port"];
$senha = $alterar["senha"];}
?>
<?php 
if($_POST['altera']){
$titulo = $_POST['titulo'];
$nomeradio = $_POST['nomeradio'];
$url = $_POST["url"];
$orkut = $_POST["orkut"];
$ip = $_POST['ip'];
$port = $_POST["port"];
$senha = $_POST["senha"];

mysql_query("update configs set titulo='$titulo'");
mysql_query("update configs set nomeradio='$nomeradio'");
mysql_query("update configs set url='$url'");
mysql_query("update configs set orkut='$orkut'");
mysql_query("update configs set ip='$ip'");
mysql_query("update configs set port='$port'");
mysql_query("update configs set senha='$senha'");
echo "<script>location.href='?abrir=pagAlterarConfig&msg=sucesso'</script>";
}
?>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Alterar Configura&ccedil;&otilde;es </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<form method="post" name="regform" action="">
<table width="800" border="0">
  <tr>
    <td width="99"><div align="right">Titulo do Site:</div></td>
    <td width="1074"><input name="titulo" value="<?php echo $titulo; ?>" type="text" class="text-input medium-input datepicker"/></td>
  </tr>
   <tr>
    <td width="99"><div align="right">Nome da R&aacute;dio:</div></td>
    <td width="1074"><input name="nomeradio" value="<?php echo $nomeradio; ?>" type="text" class="text-input small-input"  /></td>
  </tr>
  <tr>
    <td><div align="right">Orkut:</div></td>
    <td><input name="orkut" type="text" value="<?php echo $orkut; ?>" class="text-input medium-input datepicker" /></td>
  </tr>
  <tr>
    <td><div align="right">Link do Site:</div></td>
    <td><input name="url" type="text" value="<?php echo $url; ?>" class="text-input small-input" /></td>
  </tr>
   <tr>
    <td><div align="right">Ip Streaming:</div></td>
    <td><input name="ip" type="text" value="<?php echo $ip; ?>"  class="text-input small-input"/></td>
  </tr>
   <tr>
    <td><div align="right">Porta Streaming:</div></td>
    <td><input name="port" type="text" value="<?php echo $port; ?>" class="text-input small-input" /></td>
  </tr>
   <tr>
    <td><div align="right">Senha Streaming:</div></td>
    <td><input name="senha" type="text" value="<?php echo $senha; ?>" class="text-input small-input"/></td>
  </tr>
   <tr>
     <td>&nbsp;</td>
     <td><input name="altera" type="submit" class="button" value="Alterar" /></td>
   </tr>
</table>
<center>
</center>
</form>
<? } ?>
				<?php
				   $msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
				   ?>
                   <?php
				   $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Configurações Do Site Alteradas Com Sucesso!</div>";}
				   ?>   