<style>
.text1{
	margin:0 auto;
	margin-bottom:5px;
}
.text1 span{
	font:10px Tahoma, Geneva, sans-serif;
	color:#FFFFFF;
	text-shadow:0px 1px 1px #000000;
	margin:1px 0 0 3px;
}
</style>
<meta http-equiv="Refresh" content="8" "charset=iso-8859-1">
<?php

$scdef  =       "Radio IMPACT"; 
                                           
$scip   =       "5.133.182.164";           
$scport =       "21674";                    
$scpass =       "1q2w3e4r5t6y";            


$scfp = fsockopen("$scip", $scport, &$errno, &$errstr, 30);
 if(!$scfp) {
  $scsuccs=1;
echo''.$scdef.' is Offline';
 }
if($scsuccs!=1){
 fputs($scfp,"GET /admin.cgi?pass=$scpass&mode=viewxml HTTP/1.0\r\nUser-Agent: SHOUTcast Song Status (Mozilla Compatible)\r\n\r\n");
 while(!feof($scfp)) {
  $page .= fgets($scfp, 1000);
 }
 

 $loop = array("STREAMSTATUS", "BITRATE", "SERVERTITLE", "CURRENTLISTENERS");
 $y=0;
 while($loop[$y]!=''){
  $pageed = ereg_replace(".*<$loop[$y]>", "", $page);
  $scphp = strtolower($loop[$y]);
  $$scphp = ereg_replace("</$loop[$y]>.*", "", $pageed);
  if($loop[$y]==SERVERGENRE || $loop[$y]==SERVERTITLE || $loop[$y]==SONGTITLE || $loop[$y]==SERVERTITLE)
   $$scphp = urldecode($$scphp);


  $y++;
 }

 $pageed = ereg_replace(".*<SONGHISTORY>", "", $page);
 $pageed = ereg_replace("<SONGHISTORY>.*", "", $pageed);
 $songatime = explode("<SONG>", $pageed);
 $r=1;
 while($songatime[$r]!=""){
  $t=$r-1;
  $playedat[$t] = ereg_replace(".*<PLAYEDAT>", "", $songatime[$r]);
  $playedat[$t] = ereg_replace("</PLAYEDAT>.*", "", $playedat[$t]);
  $song[$t] = ereg_replace(".*<TITLE>", "", $songatime[$r]);
  $song[$t] = ereg_replace("</TITLE>.*", "", $song[$t]);
  $song[$t] = urldecode($song[$t]);
  $dj[$t] = ereg_replace(".*<SERVERTITLE>", "", $page);
  $dj[$t] = ereg_replace("</SERVERTITLE>.*", "", $pageed);
$r++;
 }


fclose($scfp);
}


if($streamstatus == "1"){

echo'
<html>
<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<div id="text">
<div class="text1"><span>'.$song[1].'</span></div>
<div class="text1"><span>'.$song[2].'</span></div>
</div>
</body>
</html>';
}
if($streamstatus == "0")
{

echo'
<html>
<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body text="" style="background-color:transparent">
<span class="playdisplay">Server Offline! :(</span>
</body>
</html>';
}
?>
