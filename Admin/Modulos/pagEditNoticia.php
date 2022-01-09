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
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Editar Noticia</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<? 
$id = $_GET['id'];
$titulo = ($_POST['titulo']);
$data = ($_POST['data']);
$conteudo = ($_POST['conteudo']);
$foto = ($_POST['foto']);
$poster = ($_POST['poster']);
if($_POST['envia']) {
$query = "UPDATE noticias SET titulo='$titulo',conteudo='$conteudo',foto='$foto',data='$data',poster='$poster' WHERE id='$id'";
mysql_query($query) or die(mysql_error());
echo "<script>location.href='index.php?abrir=pagEditNoticia&id=$id&msg=sucesso'</script>";}
?>
<?php
$id = $_GET['id'];
$resultado = mysql_query("SELECT*FROM noticias WHERE id='$id'");
while($play = mysql_fetch_assoc($resultado)){
$tituloo = $play['titulo'];
$dataa = $play['data'];
$conteudoo = $play['conteudo'];
$fotoo = $play['foto'];
$posterr = $play['poster'];
}
?>
<form method="post" name="regform" action="">
  <table width="800" border="0">
    <tr>
      <td width="99"><div align="right">Titulo:</div></td>
      <td width="1074"><input name="titulo" type="text" class="text-input medium-input datepicker" id="titulo" value="<? echo $tituloo ?>"/></td>
    </tr>
    <tr>
      <td><div align="right">Data:</div></td>
      <td><input name="data" type="text" id="data" class="text-input small-input" value="<? echo $dataa ?>" /></td>
    </tr>
    <tr>
      <td><div align="right">Link da Imagem:</div></td>
      <td><input class="text-input medium-input datepicker" type="text" id="medium-input" name="foto" value="<? echo $fotoo ?>" /></td>
    </tr>
	    <tr>
      <td><div align="right">Postada por:</div></td>
      <td>                                      <select name="poster" id="poster">
	  <option value="<? echo $posterr ?>"><? echo $posterr ?></option>
<?
$resultado = mysql_query("SELECT * FROM usuarios");
while($usuario = mysql_fetch_array($resultado)){
echo '<option value="' . $usuario['nome'] . '">' . $usuario['nome'] . '</option>';}
?>
                                      </select></td>
    </tr>
    <tr>
      <td><div align="right">Conteudo:</div></td>
      <td><textarea class="text-input textarea wysiwyg" id="textarea" name="conteudo" cols="79" rows="15"><? echo $conteudoo ?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input class="button" type="submit" value="Editar" name="envia" /></td>
    </tr>
  </table>
  <center>
</center>
</form>
<?php
$msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
?>
<?php
$msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Noticia editada com sucesso!</div>";}
?>   
<? } ?>