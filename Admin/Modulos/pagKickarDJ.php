<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Kickar DJ</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<form method="post" action="index.php?abrir=pagKickarDJ&kick=1">
 <input value="<?=$ipp;?>:<?=$portt;?>" type="text" disabled="disabled" class="text-input small-input"/>
<input type="submit" class="button" value="Kickar DJ" name="envia" />
</form>
					  </form>
<center><?php
$resultado = mysql_query("SELECT*FROM configs");
$linhas = mysql_num_rows($resultado);
while ($edition = mysql_fetch_array($resultado)){
$ip = $edition["ip"];
$port = $edition["port"];
$senha = $edition["senha"];}

$kickar = $_REQUEST["kick"];
if ($kickar == "1")
{
$fp = fsockopen($ip, $port, $errnum, $errstr, 2);
if($fp){
   fwrite($fp, "GET /admin.cgi?pass=$senha&mode=kicksrc HTTP/1.0\r\nUser-Agent:Mozilla/3.6.3\r\n\r\n");
   echo "<br><div class='sucess'>AutoDJ kickado! Voc&ecirc; tem 8 segundos para conectar!</div>";
}
else{}
}
?>
</center>