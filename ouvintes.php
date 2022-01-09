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
echo "<font face=verdana size=1> 
<center>$text[0] de $text[3] ($text[4] Unico)<br> </center>
</font>";?> 

