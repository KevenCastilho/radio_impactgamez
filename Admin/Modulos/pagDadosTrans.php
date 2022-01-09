<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(!($login_user AND $senha_user)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<?php
$select = "SELECT * FROM configs";
$result = mysql_query($select);
while ($since = mysql_fetch_array($result)){
$ipp = $since["ip"];
$portt = $since["port"];
$senhaa = $since["senha"];
}
?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>

<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Dados de Transmiss&atilde;o </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
&nbsp;&nbsp;&raquo;&nbsp;Ip Streaming - <? echo $ipp ?> <br />
&nbsp;&nbsp;&raquo;&nbsp;Porta Streaming - <? echo $portt ?> <br />
&nbsp;&nbsp;&raquo;&nbsp;Senha Streaming - <? echo $senhaa ?> 