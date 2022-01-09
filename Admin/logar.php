<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>R&aacute;dio Administr&aacute;vel - Version v1.0</title>
<style>
@import url('./Css/Play.Painel.css');
</style>
</head>
<body><div class="Centralizador">
  <div id="conteudo">
    <div class="conteudo_topo">
	  <form id="form1" name="form1" method="post" action="FuncLogar.php">
      <p align="center" style="padding:3px;">&Aacute;rea de Administra&ccedil;&atilde;o </p>
    </div>
    <p>&nbsp;</p>
    <table width="350" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;&nbsp;&raquo;&nbsp;Login&nbsp;</td>
      </tr>
      <tr>
        <td height="33"><div align="center">
          <input name="login" type="text" id="login" size="50" />
        </div></td>
      </tr>
      <tr>
        <td height="13">&nbsp;&nbsp;&raquo;&nbsp;Senha&nbsp;</td>
      </tr>
      <tr>
        <td height="33"><div align="center">
            <input name="senha" type="password" id="senha" size="50" />
        </div></td>
      </tr>
      <tr>
        <td height="33"><div align="center">
          <input class="button" type="submit" value="Efetuar Login" name="Submit" />
        </div></td>
      </tr>
    </table>
    <p align="center"><br />
    </p>
  </div><br />
  <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="46" height="25"><?php
	$acao = $_GET["fail"]; if($acao=="aviso"){echo "<div class=falha><strong>ERRO:</strong> Dados Incorretos !</div>";}
	?>
	<?php
	$acao = $_GET["fail"]; if($acao=="incorreto"){echo "<div class=falha><strong>ERRO:</strong> Senha Incorreta !</div>";}
	?>
	<?php
	$acao = $_GET["fail"]; if($acao=="restrito"){echo "<div class=falha><strong>RESTRITO:</strong> Para acessar é preciso estar logado !</div>";}
	?>
		<?php
	$acao = $_GET["fail"]; if($acao=="deslogar"){echo "<div class=sucesso>Deslogado com sucesso!</div>";}
	?>
        &nbsp;</td>
    </tr>
  </table>
	  </form>
  </div>
</body>
</html>
