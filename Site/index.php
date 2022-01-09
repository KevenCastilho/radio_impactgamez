<?php
include('Fail/Settings.php');
include('pl.class.php');
$pag = new pag();
$pag->pag();
?>
<?php
$resultado = mysql_query("SELECT*FROM configs");
$linhas = mysql_num_rows($resultado);
while ($play = mysql_fetch_array($resultado)){
$nomeradio = $play["nomeradio"];
$ipp = $play["ip"];
$portt = $play["port"];}
?>
<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>R&aacute;dio Administravel - Version v1.0</title>
<script type="text/javascript" src="Ajax.js"></script>
<script type="text/javascript" src="Fail/Widget.js"></script>
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
</head>
<style type="text/css">
a:link {color: #000;text-decoration: none;}
a:visited {text-decoration: none;color: #000;}
a:hover {text-decoration: none;color: #000;text-shadow:0 0 .3em background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );;}
a:active {text-decoration: none;color: #000;}
</style>
<style>
@import url('./Css/Play.css');
</style>
<style type="text/css">
.style3 {font-size: 14;text-shadow:0 0 .3em #000;}
.style4 {
	color: #FFFFFF;
	text-shadow: 0 0 .3em #FFF;
	margin: 3px;
}
.style6{
	color: #FFFFFF;
</style>
<style>
.button{background:#f4f4f4;height:23px;width:100px;color:background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );;font-family:Tahoma; font-size:11px;border:none;cursor:pointer;border:1px solid #CCC;-webkit-border-radius:5px;-moz-border-radius:5px;text-shadow:0 0 .3em #F4F4F4}
.button:hover{color:#000;font-family:Tahoma;font-size:11px;text-shadow:0 0 .1em background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );;background:#fff;}
</style>
<div id="Centralizador">
  <table width="900" height="701" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
    <tr>
      <td height="210"><div align="center" id="header"><img src="<? echo $tema['header']; ?>" name="foto" border="0" id="foto" />
      </div></td>
    </tr>
    <tr>
      <td height="40" valign="top" style="background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );"><div id="menu" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <ul>
          <li><a href="javascript:;" onclick ="Load ('?sexy=plInicio','conteudo','GET');">Inicio</a></li>
          <li><a href="javascript:;" onclick="window.open('Cadastro.php', 'Cadastro', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=0, LEFT=0, WIDTH=655, HEIGHT=700');">Cadastro</a></li>
          <li><a href="javascript:;" onclick ="Load ('?sexy=plChat','conteudo','GET');">Bate Papo</a></li>
		  <li><a href="javascript:;" onclick ="Load ('?sexy=plRadio','conteudo','GET');">Historico</a></li>
          <li><a href="javascript:;" onclick ="Load ('?sexy=plNoticias','conteudo','GET');">Noticias</a></li>
          <li><a href="javascript:;" onclick ="Load ('?sexy=plMembros','conteudo','GET');">Equipe</a></li>
          <li><a href="javascript:;" onclick ="Load ('?sexy=plHorarios','conteudo','GET');">Hor&aacute;rios </a></li>
          <li><a href="javascript:;" onclick ="Load ('?sexy=plPlayer','conteudo','GET');">Seu Player</a></li>
		  <li><a href="javascript:;" onclick ="Load ('?sexy=plParceiro','conteudo','GET');">Seja Parceiro</a></li>
          <li><a href="javascript:;" onclick ="Load ('?sexy=plContato','conteudo','GET');">Contato</a></li>
		  <li><a href="javascript:;" onclick="window.open('../Orkut.php', 'Orkut', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=0, LEFT=0, WIDTH=1024, HEIGHT=1024');">Comunidade</a></li>
		  		  <li><a href="javascript:;" onclick="window.open('../Central.php', 'Clube', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=0, LEFT=0, WIDTH=1024, HEIGHT=1024');">Clube</a></li>
        </ul>
      </div></td>
    </tr>
    <tr>
      <td height="35" valign="top"><div height="35" class="Musica" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p><iframe src="http://streampainel.in/elementos/players/playerhtml5.php?url=http://sv01.streampainel.in:8106&url_rtmp=rtmp://wowza.streampainel.in:8086/shoutcast" frameborder="0" height="35" scrolling="no" width="481"></iframe></p>
      </div></td>
    </tr>
    <tr>
      <td height="14" valign="top"><table width="900" height="375" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="600" height="375" valign="top"><body onload="Load ('?sexy=plInicio','conteudo','GET');"><div id="conteudo">
            <br>
          </div>      	<div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Publicidade VIP</p>
      </div> <div style="padding:5px;"><?php
$query = "SELECT * FROM publicidade";
$result = mysql_query($query);
$play = mysql_num_rows($result);
if($play <= "0"){
echo "<br><div class='warning'>Nenhuma Publicidade cadastrada</div>";}
?>
      <?php
	  include('Fail/Settings.php');
	$query = "SELECT * FROM publicidade order BY id DESC LIMIT 2";
	$result = mysql_query($query,$conecta);
	while ($play = mysql_fetch_array($result)){
	$id = $play["id"];
	$nome = $play['nome'];
	$url = $play['url'];
	$banner = $play['banner'];
	$n = $i+1;
	$i++;
	?>
	<center><a href="<?php echo $url;?>" target="_blank"><img src="<?php echo $banner;?>" width="483" height="70" border="0" title="<?php echo $nome;?>" /></a></center><br />
 <?php } ?>
      </div>
</div>
          <p>&nbsp;</p>
          
          <td width="300" valign="top"><div id="conteudo_direito">
              <div class="conteudo_tdireito" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
                <p style="padding:5px;">Locutor Online </p>
              </div>
            <p><div style="padding: 10px;"><?php include ('Fail/Includes/LocutorOn.php'); ?></div></p>
            </div>
          <div id="conteudo_direito">
              <div class="conteudo_tdireito" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
                <p style="padding:5px;">Pedidos/Recados</p>
              </div>
            <p><div style="padding: 10px;"><?php include ('Pedidos.php'); ?></div></p>
          </div>
          <div id="conteudo_direito">
              <div class="conteudo_tdireito" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
                <p style="padding:5px;">Top Musica </p>
              </div>
            <p><div style="padding:5px;"><?php include ('Fail/Includes/TopMusica.php'); ?></div></p>
          </div>
        </div>
            <p>&nbsp;</p></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="14" valign="top"><div id="footer">
        <div align="center"><br>&copy; Copryght <?=date('Y')?> - <?=$nomeradio;?> - Todos Os Direitos Reservados<br />
Sistema Totalmente Desenvolvido Por <a href="javascript: alert(&quot;Msn: angelusinferni@live.com&quot;);">Angelus Inferni</a> <br>
        </div>
      </div></td>
    </tr>
</table>
</div>
</div></body>
</html></style></html>
<? } ?>