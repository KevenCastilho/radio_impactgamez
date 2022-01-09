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
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Editar M&uacute;sica </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<? 
$id = $_GET['id'];
$musica = $_POST['musica'];
$artista = $_POST['artista'];
$foto = $_POST['foto'];
$link = $_POST['link'];
$video = $_POST['video'];
if($_POST['envia']) {
$query = "UPDATE topmusica SET musica='$musica',artista='$artista',foto='$foto',link='$link',video='$video' WHERE id='$id'";
mysql_query($query) or die(mysql_error());
echo "<script>location.href='index.php?abrir=pagEditMusica&id=$id&msg=sucesso'</script>";}
?>
<?php
$id = $_GET['id'];
$resultado = mysql_query("SELECT*FROM topmusica WHERE id='$id'");
while($play = mysql_fetch_assoc($resultado)){
$fotoo = $play["foto"];
$musicaa = $play["musica"];
$artistaa = $play["artista"];
$linkk = $play["link"];
$videoo = $play["video"];}
?>
<form method="post" name="regform" action="">
  <table width="800" border="0">
    <tr>
      <td><div align="right">Artista:</div></td>
      <td><input name="artista" type="text" class="text-input medium-input datepicker" id="medium-input" value="<? echo $artistaa ?>" /></td>
    </tr>
    <tr>
      <td width="99"><div align="right">M&uacute;sica:</div></td>
      <td width="1074"><input name="musica" type="text" class="text-input medium-input datepicker" id="musica" value="<? echo $musicaa ?>"/></td>
    </tr>
    <tr>
      <td><div align="right">
          <div align="right">Link da Imagem:</div>
      </div></td>
      <td><input name="foto" type="text" class="text-input medium-input datepicker" id="foto" value="<? echo $fotoo ?>" /></td>
    </tr>
    <tr>
      <td><div align="right">Link Download: </div></td>
      <td><input name="link" type="text" class="text-input medium-input datepicker" id="medium-input" value="<? echo $linkk ?>" /></td>
    </tr>
    <tr>
      <td><div align="right">Video:</div></td>
      <td><input name="video" type="text" class="text-input medium-input datepicker" id="medium-input" value="<? echo $videoo ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="envia" type="submit" class="button" id="editar" value="Envia" /></td>
    </tr>
  </table>
  <center>
</center>
</form>
<?php
$msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
?>
<?php
$msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Música editada com sucesso!</div>";}
?>   
<? } ?>