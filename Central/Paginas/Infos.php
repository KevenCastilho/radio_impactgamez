<?php include ('AutorizaUser.php');?>
<?php
session_start("login_usuario");
if(!($login_usuario AND senha_usuario)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<?php
$resultado = mysql_query("SELECT*FROM configs");
$linhas = mysql_num_rows($resultado);
while ($since = mysql_fetch_array($resultado)){
$ip = $since["ip"];
$port = $since["port"];
?>
<div class="text2">Informa&ccedil;&otilde;es</div>
<div align="left"><br />
<?
						$select = file_get_contents('../Admin/Funcoes/Alt.txt');
						$resultado = mysql_query('SELECT * FROM usuarios WHERE ID=' . $select);
						while($since = mysql_fetch_array($resultado))
							{
							$nick = $since['nick'];
						?>
&nbsp;&nbsp;&raquo;&nbsp;Locutor / DJ online: <strong><? echo $since['nick']; ?></strong><br />
  &nbsp;&nbsp;&raquo;&nbsp;M&uacute;sica Tocando: <strong>
<?php
$ip = "208.115.213.18";
$port = "8435";
$fp = @fsockopen($ip,$port,$errno,$errstr,1);
if (!$fp) 
	{ 
	$title = "Indisponivel!";
	} 
	else
	{ 
	fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");
	while (!feof($fp)) 
		{
		$info = fgets($fp);
		}
	$info = str_replace('</body></html>', "", $info);
	$split = explode(',', $info);
	if (empty($split[6]) )
		{
		$title = "Indisponivel!";
		}
	else
		{
		$count = count($split);
		$i = "6";
		while($i<=$count)
			{
			if ($i > 6)
				{
				$title .= ", " . $split[$i];
				}
			else
				{
				$title .= $split[$i];
				}
			$i++;
			}
		}
	}
$title = substr($title, 0, -2);
echo $title;
?> 
</strong></div>
<br />
<? }} ?>