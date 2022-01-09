<? require ('Config.php'); ?>
<?php
$resultado = mysql_query("SELECT*FROM configs");
$linhas = mysql_num_rows($resultado);
while ($since = mysql_fetch_array($resultado)){
$ip = $since["ip"];
$port = $since["port"];
$orkut = $since["orkut"];}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>box.png</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">td img {display: block;}</style>
</head>
<body bgcolor="#ffffff" topmargin="0" rightmargin="0" leftmargin="0" bottommargin="0">
<table border="0" cellpadding="0" cellspacing="0" width="170">
  <tr>
   <td><img src="spacer.gif" width="170" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="box_r1_c1" src="box_r1_c1.png" width="170" height="80" border="0" id="box_r1_c1" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="80" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="box_r2_c1.png" alt="" name="box_r2_c1" width="170" height="70" border="0" usemap="#box_r2_c1Map" id="box_r2_c1" /></td>
   <td><img src="spacer.gif" width="1" height="70" border="0" alt="" /></td>
  </tr>
</table>
<div id="apDiv2"> 
  <embed src="http://flashplayer.estadovirtual.com.br/shoutcast/player.swf"  width="400" height="30" align="" quality="high"  bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_br" 
flashvars="radiourl=http://<?=$ip;?>:<?=$port;?>&radio=ProSound"> </embed> 
</div> 
<map name="box_r2_c1Map" id="box_r2_c1Map">
  <area shape="circle" coords="151,50,10" href="<?=$orkut;?>" target="_blank" />
<area shape="circle" coords="23,37,19" href="index.php?vai=play" />
<area shape="circle" coords="55,39,14" href="index.php?vai=stop" />
<area shape="rect" coords="1,60,168,70" href="http://www.radioprosound.com.br" target="_blank" />
</map>
</body>
</html>
