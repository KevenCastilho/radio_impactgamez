<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<? 
$id = $_GET['id'];
$pagina = mysql_real_escape_string($_POST['pagina']);
$conteudo = mysql_real_escape_string($_POST['conteudo']);

if($_POST['altera']) {
$query = "UPDATE paginas SET pagina='$pagina',conteudo='$conteudo' WHERE id='$id'";
mysql_query($query) or die(mysql_error());
echo "<script>location.href='index.php?abrir=pagAlterarPag&id=$id&msg=sucesso';</script>
";

}
?>
<?php
$id = $_GET['id'];
$resultado = mysql_query("SELECT*FROM paginas WHERE id='$id'");
while($play = mysql_fetch_assoc($resultado)){
$pagina  = $play['pagina'];
$conteudo  = $play['conteudo'];
}
?>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Alterar Página: <? echo $pagina;?> </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />

<form name="envia" action="index.php?abrir=pagAlterarPag&id=<? echo $id ?>" method="post" name="envia">
<table width='922' height='91' border='0'>
  <tr>
    <td width="88" height="23"><div align="right">Nome da P&aacute;gina:</div></td>
    <td width="824"><input name="pagina" type="text" id="pagina" value="<?php echo $pagina; ?>" class="text-input small-input" /></td>
  </tr>
  <tr>
    <td height="30"><div align="right">Conteudo:</div></td>
    <td><textarea name="conteudo" class="text-input textarea wysiwyg" id="textarea" ><?php echo $conteudo; ?></textarea></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><input name="altera" class="button" type="submit" value="Alterar" /></td>
  </tr>
</table>
<center>
</center>
</form>
				<?php
				   $msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
				   ?>
                   <?php
				   $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Página Alterada Com Sucesso!</div>";}
				   ?> 
				   <? } ?>