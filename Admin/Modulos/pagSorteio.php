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
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Fazer Sorteio</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<form name="formu" action="" method="post">
 <input value="Clique Em Sortear e pronto !" type="text" disabled="disabled" class="text-input small-input"/>
<input type="submit" class="button" value="Sortear" name="envia"/>
</form>
<?php
include('Config.php');
if($_POST['envia']) {
$sql1 = mysql_query("SELECT * FROM usuarios_clube ORDER BY RAND() LIMIT 1");
  if (!$sql1){
  echo "Nao foi possivel fazer a consulta";
  }
  while($reg = mysql_fetch_array($sql1)) {
  $id= $reg['id'];
  $data_ganhou = date("d/m/Y",time());
  $hora_ganhou = strftime("%H:%M:%S");
  echo "<div align=center><H3>GANHADOR FOI</H3></div><BR><BR><div align=center><b>ID:</b> $id | <b>Quando ganhou:</b> $data_ganhou $hora_ganhou | <a href=\"index.php?abrir=pagExibeUser&id=$id\">Exibir Perfil Do Ganhador</a><BR><BR></div>";
  include "Config.php";
  $sql2 = mysql_query("INSERT INTO ganhadores (id_ganhador, data_ganhou, hora_ganhou) VALUES ('$id','$data_ganhou','$hora_ganhou')");
  echo '<center>Inserido Também no banco de dados dos Ganhadores !</center>';
  }
}
?>
<? } ?>