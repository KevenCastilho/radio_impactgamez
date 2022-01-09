<?php
	$ip = "$ipp";
	$port = "$portt";
	$fp = @fsockopen($ip,$port,$errno,$errstr,1);
	if (!$fp) 
	{$title = "<font color=red>Streaming Offline  </font>";} 
	else{ fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n"); while (!feof($fp)) {$info = fgets($fp);}
	$info = str_replace('</body></html>', "", $info);
	$split = explode(',', $info);
	if (empty($split[6]) ){$title = "A música atual não está disponível";}
	else {$count = count($split);$i = "6";while($i<=$count){if ($i > 6){$title .= ", " . $split[$i];} else {$title .= $split[$i];}$i++;} } }
	$title = substr($title, 0, -2);
	echo $title;
   ?>