<?php include("AutorizaUser.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Clube de Ouvintes</title>
<?php
$select = "SELECT * FROM usuarios_clube WHERE login='$login_usuario'";
$result = mysql_query($select);
while ($play = mysql_fetch_array($result)){
$nome = $play['nome'];
$id = $play['id'];
$login = $play['login'];
$skype = $play['skype'];
$senha = $play['senha'];
$msn = $play['msn'];
$nick = $play['nick'];
$orkut = $play['orkut'];
$twitter = $play['twitter'];
$estado = $play['estado'];
$cidade = $play['cidade'];
$bairro = $play['bairro'];
$sexo = $play['sexo'];
$dia = $play['dia'];
$mes = $play['mes'];
$ano = $play['ano'];
$relacionamento = $play['relacionamento'];
$estilo = $play['estilo'];
$conheceu = $play['conheceu'];
$acha = $play['acha'];
} ?>
<link href="Css/Estilo.css" rel="stylesheet" type="text/css" />
<link href="Css/Menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Funcoes/play.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){
	$("ul.subnav").parent().append("<span></span>");
	$("ul.topnav li span").click(function() {
		$(this).parent().find("ul.subnav").slideDown('fast').show();
		$(this).parent().hover(function() {
		}, function(){	
			$(this).parent().find("ul.subnav").slideUp('slow');
		});
		}).hover(function() { 
			$(this).addClass("subhover");
		}, function(){
			$(this).removeClass("subhover");
	});
});
</script>
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
<style type="text/css">
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body,td,th {
	font-family: Tahoma;
	font-size: 13px;
}
</style></head>
<body alink="#F">
<div id="topo">
<div id="topo_banner">
</div>
</div>
<div id="nav">
<ul class="topnav">
<li><a href="index.php?pagina=inicio">Inicio</a></li>
<li><a href="index.php?pagina=AlterarPerfil&id=<? echo $id ?>">Alterar Perfil</a></li>
<li><a href="index.php?pagina=Infos">Informa&ccedil;&otilde;es</a></li>
<li><a href="index.php?pagina=Usuarios">Usu&aacute;rios Cadastrados</a></li>
<li><a href="index.php?pagina=Pedido">Fazer Pedido</a></li>
<li><a href="index.php?pagina=Recado">Enviar Recado</a></li>
</ul>
</li>
</ul>
</div>
<div class="space"></div>
<div id="info">
  <div class="info">
   Ol&aacute; <strong><?php echo"$nome" ?></strong> ( <a href="deslogar.php">Sair</a> )</div>
</div>
<div class="space2"></div>
<div id="content">
<?php
$Conteudo = $_REQUEST['pagina']; if($Conteudo == ''){$Conteudo = 'inicio';}
if(file_exists('Paginas/' . $Conteudo . '.php')){require('Paginas/' . $Conteudo . '.php');}else{require('Paginas/404.php');}
?>
</div>
<div class="space"></div>
<div id="footer">
  <div class="text">
Desenvolvido por <a href="javascript: alert(&quot;Msn: angelusinferni@live.com&quot;);">Angelus Inferni</a></div>
</div>
</body>
</html>