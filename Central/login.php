<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Clube de Ouvintes</title>
<link href="./Css/Login.css" rel="stylesheet" type="text/css" />
<script src="./Funcoes/scriptaculous/lib/prototype.js" type="text/javascript"></script>
<script src="./Funcoes/scriptaculous/src/effects.js" type="text/javascript"></script>
<script type="text/javascript" src="./Funcoes/fabtabulous.js"></script>
<script type="text/javascript" src="./Funcoes/validation.js"></script>
<script type="text/javascript">
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if(document.layers||(document.getElementById&&!document.all)) {if (e.which==2||e.which==3) {alert(message);return false;}}}if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false");
function MM_findObj(n, d) {
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImgRestore() { 
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { 
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImage() { 
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<style>
@import url('./Css/Login.css');
body,td,th {
	font-family: Tahoma;
}
a:link {
	color: #000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: none;
	color: #333333;
}
a:active {
	text-decoration: none;
	color: #000;
}
</style></head>
<body>
<div align="center">
<img src="Imagens/Banner.png" width="185" height="156" />
</div>
<form action="FuncLogar.php" method="post" id="test">
  <table width="188" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="46" height="25"><div align="right">Login:</div></td>
    <td width="142"><label></label>
    <input type="text" name="login" id="login" /></td>
  </tr>
  <tr>
    <td height="27"><div align="right">Senha:</div></td>
    <td><label></label>
      <input name="senha" type="password" id="senha" value="" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" class="botao" value="Entrar" /></td>
  </tr>
</table>
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="400" height="25"><div align="center">Ainda N&atilde;o &eacute; Cadastrado ?&nbsp;<a href="../Website/Cadastro.php">Clique Aqui</a> e Cadastre-se ! </div></td>
    </tr>
  </table>
  <br />
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="46" height="25">	<?php
	$acao = $_GET["acao"]; if($acao=="erro"){echo "<font family=Tahoma size='2'><div class=no>Usu&aacute;rio ou Senha Inv&aacute;lidos!</div>";}
	?>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>