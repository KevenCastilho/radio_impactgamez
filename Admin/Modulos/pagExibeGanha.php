<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>

<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Ganhadores Do Sorteio</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<?php
include('Config.php');
$sql3 = mysql_query("SELECT * FROM ganhadores ORDER BY data_ganhou ASC");
$cadastrados = mysql_num_rows($sql3);
echo "<div align=right>Temos <b>$cadastrados</b> Ganhador(es)<br><br></div>";
if (!$sql3){
echo "Nao foi possivel fazer a consulta";
}
while ($play = mysql_fetch_array($sql3)){
$id_ganhador= $play['id_ganhador'];
$data_ganhou= $play['data_ganhou'];
$hora_ganhou= $play['hora_ganhou'];
 echo "
<div align=left>&nbsp;&raquo;&nbsp;<b>ID:</b> $id_ganhador | <b>Ganhou:</b> $data_ganhou $hora_ganhou | <a href=\"index.php?abrir=pagExibeUser&id=$id_ganhador\">Exibir Perfil Do Ganhador</a></div>";
}
?>
<? } ?>