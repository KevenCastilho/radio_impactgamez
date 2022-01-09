<?php
include('Fail/Settings.php');
$resultado = mysql_query("SELECT*FROM configs");
$linhas = mysql_num_rows($resultado);
while ($play = mysql_fetch_array($resultado)){
$orkut = $play["orkut"];}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="0;URL=<?=$orkut;?>">
</head>
<body>
</body>
</html>