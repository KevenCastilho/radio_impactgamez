<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
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
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>P&aacute;gina n&atilde;o encontrada </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
&nbsp;&nbsp;&raquo;&nbsp;Página não encontrada,clique no menu logo acima para acessar outra página,se o erro persistir contate a administração,obrigado.