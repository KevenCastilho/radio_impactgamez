<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Editar Publicidade </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<? 
$id = $_GET['id'];
$nome = ($_POST['nome']);
$url = ($_POST['url']);
$banner = ($_POST['banner']);
if($_POST['envia']) {
$query = "UPDATE publicidade SET nome='$nome',url='$url',banner='$banner' WHERE id='$id'";
mysql_query($query) or die(mysql_error());
echo "<script>location.href='index.php?abrir=pagEditPublicidade&id=$id&msg=sucesso'</script>";}
?>
<?php
$id = $_GET['id'];
$resultado = mysql_query("SELECT*FROM publicidade WHERE id='$id'");
while($since = mysql_fetch_assoc($resultado)){
$nomee = $since['nome'];
$urll = $since['url'];
$bannerr = $since['banner'];}
?>
<form method="post" name="regform" action="">
  <table width="800" border="0">
    <tr>
      <td width="99"><div align="right">Nome:</div></td>
      <td width="1074"><input name="nome" type="text" class="text-input small-input" id="nome" value="<? echo $nomee ?>"/></td>
    </tr>
    <tr>
      <td><div align="right">Site:</div></td>
      <td><input name="url" type="text" class="text-input small-input" id="site" value="<? echo $urll ?>" /></td>
    </tr>
    <tr>
      <td><div align="right">Link da Imagem:</div></td>
      <td><input name="banner" type="text" class="text-input medium-input datepicker" id="medium-input" value="<? echo $bannerr ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="envia" type="submit" class="button" id="envia" value="Editar" /></td>
    </tr>
  </table>
  <center>
</center>
</form>
<?php
$msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
?>
<?php
$msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Publicidade editada com sucesso!</div>";}
?>   
<? } ?>