<?php include ('AutorizaUser.php');?>
<?php
session_start("login_usuario");
if(!($login_usuario AND senha_usuario)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<div align="center"><style>
body
{margin:0px;}</style>
</div>
<div class="text2">
Informa&ccedil;&otilde;es Pessoais
</div>
<br />
<center>
<table width="600" border="0" align="center" cellspacing="4">
  <tr>
    <td width="113" rowspan="5" class="tt"><img src="<?php echo"$foto" ?>" width="113" height="110" border="0" title="<? echo"$login" ?>" /></td>
    <td width="1">&nbsp;</td>
    <td width="464" class="tt"><span class="text3">Usu&aacute;rio: </span><span class="phpinfo"><strong><? echo"$login_usuario" ?></strong></span></td>
  </tr>
      <tr>
    <td>&nbsp;</td>
    <td class="tt"><span class="text3">Nome: </span><span class="phpinfo"><strong><? echo"$nome" ?></strong></span></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td class="tt"><span class="text3">Nick: </span><span class="phpinfo"><strong><? echo"$nick" ?></strong></span></td>
  </tr>
</table>
<br />
  </center>
