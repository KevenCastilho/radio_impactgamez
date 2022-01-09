<html><head><title>Tocando Agora | Script Criado por <? echo ".:. Angelus Inferni .:."; ?></title><meta http-equiv="refresh" content="30;URL=musica.php"> </head><body style="color:#FFFFFF;">
<div style="Visibility: Hidden; Position: Absolute;"> 
<? 
$open = fsockopen("5.133.182.164","21674 "); 
if ($open) { 
fputs($open,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 
$read = fread($open,1000); 
$text = explode("content-type:text/html",$read); 
$text = explode(",",$text[1]); 
} else { $er="Connection Refused!"; } 
?> 
</div> 
<? 
if ($text[1]==1) { $state = "Up"; } else { $state = "Down"; } 
if ($er) { echo $er; exit; } 
echo "<span style='position:absolute;top:3px;left:-1px;'>Musica Tocando : <font color='#00F5FF'>$text[6]</font> <font color='#FFFF00'> │ </font> Ouvintes Online : <font color='#00FF00'> $text[0] </font> <font color='#FFFFFF'> de </font> <font color='#FF0000'> $text[3] </font> Ouvintes</span>";?>
</body></html>