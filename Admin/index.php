<?php
include('AutorizaUser.php');
include ('Config.php');
$resultado = mysql_query("SELECT*FROM configs");
$linhas = mysql_num_rows($resultado);
while ($edition = mysql_fetch_array($resultado)){
$titulo = $edition["titulo"];
$nomeradio = $edition["nomeradio"];
$ipp = $edition["ip"];
$portt = $edition["port"];
$senhaa = $edition["senha"];}
?>
<?php
$select = "SELECT * FROM usuarios WHERE login='$login_user'";
$result = mysql_query($select);
while ($edition = mysql_fetch_array($result)){
$login = $edition["login"];
$nome = $edition["nome"];
$nick = $edition["nick"];
$senha = $edition["senha"];
$id = $edition["id"];
$cargo = $edition["cargo"];
$foto = $edition["foto"];
$programa = $edition["programa"];
}
?>
<?php
if (isset($_GET['Deslogar'])) {
    session_destroy();
echo "<script>window.location='logar.php?fail=deslogar'</script>";
	exit(); }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>R&aacute;dio Administr&aacute;vel - Version v1.0</title>
<script type="text/javascript">
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if(document.layers||(document.getElementById&&!document.all)) {if (e.which==2||e.which==3) {alert(message);return false;}}}if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false");
</script>
<script type="text/javascript" src="Funcoes/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="Funcoes/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="Funcoes/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="Funcoes/facebox.js"></script>
<script type="text/javascript" src="Funcoes/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="Funcoes/jquery.js"></script>
<script type="text/javascript">
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});
</script>
<style>
@import url('./Css/Edition.css');
@import url('./Css/superfish.css');
@import url('./Css/style.css');
a {
	font-family: Tahoma;
	color: #F4F4F4;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #F4F4F4;
}
a:hover {
	text-decoration: none;
	color: #F4F4F4;text-shadow: 0 0 .3em #FFF;
}
a:active {
	text-decoration: none;
	color: #F4F4F4;
}
.style1 {font-size: 13px}
</style>
</head>
<body><div class="Centralizador">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
  <tr>
    <td width="178" height="20" class="style1"><div id="header">
      <div id="header_logo"> </div>
      <div id="header_perfil">
        <table width="290" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="178" height="20" class="style1">&nbsp;&nbsp;&raquo;&nbsp;Nome:</span>
                <?=$nome;?></td>
          </tr>
          <tr>
            <td height="20" class="style1">&nbsp;&nbsp;&raquo;&nbsp;Nick:
              <?=$nick;?></td>
          </tr>
          <tr>
            <td height="20" class="style1">&nbsp;&nbsp;&raquo;&nbsp;Programa:
              <?=$programa;?></td>
          </tr>
          <tr>
            <td height="20" class="style1">&nbsp;&nbsp;&raquo;&nbsp;Cargo:
              <?=$cargo;?></td>
          </tr>
          <tr>
            <td height="20" class="style1">&nbsp;&nbsp;&raquo;&nbsp;<a href="index.php?Deslogar=1">Deslogar-se</a></td>
          </tr>
        </table>
      </div>
    </div></td>
  </tr>
  <tr>
    <td height="40" class="style1"><div id="menu">
    		<div id="menu">
            <ul class="sf-menu">
			<li><a href="index.php?abrir=pagInicio">Inicio</a></li>	
			<li class="current"><a href="#">Streaming</a><ul>
			<li><a href="index.php?abrir=pagAlterarDJ">Alterar DJ</a></li>
			<li><a href="index.php?abrir=pagDadosTrans">Dados de Transmissão</a></li>
			<li><a href="index.php?abrir=pagKickarDJ">Kickar DJ</a></li>
			<li><a href="index.php?abrir=pagPedidos">Pedidos</a></li>
		</ul>
			<li><a href="#">Perfil</a><ul>
			<li><a href="index.php?abrir=pagAlterarFoto">Alterar Foto</a></li>
			<li><a href="index.php?abrir=pagAlterarPerfil">Alterar Perfil</a></li>
			</ul><? if($cargo == "Administrador"){ ?>
		<li><a href="#">Administração</a><ul>
			<li><a href="index.php?abrir=pagAlterarConfig">Alterar Configurações</a></li>
			<li><a href="index.php?abrir=pagTorpedos">Torpedos</a></li>
			<li><a href="index.php?abrir=pagUserClube">Usuários Clube</a></li>
			</ul>
		<li><a href="#">Usuários</a><ul>
			<li><a href="index.php?abrir=pagNovoUser">Novo Usuário</a></li>
			<li><a href="index.php?abrir=pagTodosUser">Todos Usuários</a></li>
			</ul>
		<li><a href="#">Paginas</a><ul>
<?php $resultado = mysql_query("SELECT*FROM paginas order BY pagina ASC");
$linhas = mysql_num_rows($resultado);
while ($edition = mysql_fetch_array($resultado)){
$pagina = $edition["pagina"];
$id = $edition["id"];
$n = $i+1;
$i++;
?><li><a href="index.php?abrir=pagAlterarPag&id=<? echo $id; ?>"><?php echo $pagina;?></a></li><? } ?>
			<li><a href="index.php?abrir=pagEditarProgramacao&id=1">Programação</a></li>
</ul>
		<li><a href="#">Noticia</a><ul>
			<li><a href="index.php?abrir=pagNovaNoticia">Adicionar Noticia</a></li>
			<li><a href="index.php?abrir=pagTodasNoticias">Todas Noticias</a></li>
			</ul>
<li><a href="#">Sorteio</a><ul>
<li><a href="index.php?abrir=pagSorteio">Fazer Sorteio</a></li>
<li><a href="index.php?abrir=pagExibeGanha">Ganhadores</a></li>
</ul>
<li><a href="#">Top Musica</a><ul>
<li><a href="index.php?abrir=pagNovaMusica">Adicionar Musica</a></li>
<li><a href="index.php?abrir=pagTodasMusicas">Todas Musicas</a></li>
</ul>
<li><a href="#">Gatos</a><ul>
<li><a href="index.php?abrir=pagAltGato">Alterar Gato</a></li>
<li><a href="index.php?abrir=pagAltGata">Alterar Gata</a></li>
</ul>
<li><a href="#">Parceiros</a><ul>
<li><a href="index.php?abrir=pagNovoParceiro">Adicionar Parceiro</a></li>
<li><a href="index.php?abrir=pagTodosParceiros">Todos Parceiros</a></li>
</ul>
<li><a href="#">Publicidade</a><ul>
<li><a href="index.php?abrir=pagNovaPublicidade">Adicionar Publicidade</a></li>
<li><a href="index.php?abrir=pagTodasPublicidades">Todas Publicidades</a></li>
</ul><? } ?>
  </div></td>
  </tr>
  <tr>
    <td height="16"><?
$Conteudo = $_REQUEST['abrir'];
if($Conteudo == '')
	{
	$Conteudo = 'pagInicio';
	}

?><?
	if(file_exists('Modulos/' . $Conteudo . '.php'))
		{
		require('Modulos/' . $Conteudo . '.php');
               }else{
		require('Modulos/404.php');
		}
?><div id="conteudo">
            <br>
          </div></td>
<tr>
  <tr>
    <td height="20" class="style1"><div id="footer">
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" class="style1"><div align="center">&copy; Copryght <?=date('Y')?> - <?=$nomeradio;?> - Todos Os Direitos Reservados </td>
        </tr>
        <tr>
          <td height="20" class="style1"><div align="center">Sistema Totalmente Desenvolvido Por <a href="javascript: alert(&quot;Msn: angelusinferni@live.com&quot;);">Angelus Inferni (Killer Dark)</a> </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</div>
</body>
</html>