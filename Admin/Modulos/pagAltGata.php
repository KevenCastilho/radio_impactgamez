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
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Alterar Gata</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<form method="post" action="">
<input type="hidden" />
<table width="100%" border="0" cellpadding="0" cellspacing="1" class="Tabelas">
<tr>
<td width="1"><select name="id">
<?
$resultado = mysql_query("SELECT * FROM usuarios_clube where sexo='Feminino' ORDER BY id ASC");
while($usuario = mysql_fetch_array($resultado)){
echo '<option value="' . $usuario['id'] . '">[' . $usuario['id'] . '] ' . $usuario['nome'] . '</option>';}
?>
</select>
<input type="hidden" name="Acao" value="Colocar" /></td>
<td><input name="submit" type="submit" class="button" value="Alterar !" /></td>
</tr>
</table>
</form>
</form>
<?
if($_POST['Acao'] == 'Colocar'){
file_put_contents('Funcoes/Gata.txt', $_POST['id']);
?>
<div class="sucess">Gata alterada com sucesso!</div>
<? }} ?>
