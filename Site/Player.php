<style>
body {font-family:Tahoma; font-size: 12px; color: #000;}
</style>
<?php
include('Fail/Settings.php');
$resultado = mysql_query("SELECT*FROM configs");
$linhas = mysql_num_rows($resultado);
while ($play = mysql_fetch_array($resultado)){
$url = $play["url"];}
//Pega a flag atual...
$flag = $_POST ["flag"];

if ($flag == "1") {

// recupera os dados do formulario anterior 
$Nome = $_POST ["Nome"];
$Site = $_POST ["Site"];
 
// faz validacao para nao passar nenhum campo em branco
if (($Nome == '')||($Site == '')) {
   echo "<script language='javascript'>alert('Preencha oa campos!');</script><meta content='0;URL=Nada.php' http-equiv='refresh' />";
}

// mostra na tela os dados digitados pelo usuario
echo"Clique e Copie o C&oacute;digo e Siga as instruções acima.<br><textarea id='Codigo' onclick='this.select();' cols='70' rows='3'><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>" . $Nome . "</title>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<meta name='robots' content='index, follow' />
<meta name='keywords' content='Rádio Administrável Desenvolvida Por Design Edition' />
<meta name='description' content='Rádio Administrável v1.0' />
<meta name='author' content='Angelus Inferni'>
<meta name='verify-v1' content='dMbQEGmZOzfcCCTUT5a079pVqCxkqTCnzW8oOUMJCEk=' />
<mera name='robots' content='index,follow'>
<meta name='classification' content='Internet' />
<meta name='distribution' content='Global' />
<meta name='rating' content='General' />
<meta name='resource-type' content='document' />
<meta name='revisit-after' content='3 days' />
<meta name='language' content='pt-br' />
<meta name='doc-class' content='Completed' />
<meta name='doc-rights' content='Public' />
</head>
<frameset rows='40,*' frameborder='0' framespacing='0'>
	<frame src='" . $url ."/Player/' name='Player' scrolling='no'>
	<frame src='" . $Site . "' name='Site'>
</frameset>
	<noframes>
		<body>
			<script>
				location.href=" . $Site . ";
			</script>
		</body>
	</noframes>
</html>
<script type='text/javascript'>
var gaJsHost = (('https:' == document.location.protocol) ? 'https://ssl.' : 'http://www.');
document.write(unescape('%3Cscript src='' + gaJsHost + 'google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E'));
</script>
<script type='text/javascript'>
try {
var pageTracker = _gat._getTracker('UA-7077809-3');
pageTracker._trackPageview();
} catch(err) {}</script></textarea>";
}
?>
</body>
</html>