<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<?php
session_start();
$online = $_POST['online'];
include "Config.php"; 
//Aqui constroi a instrução sql 
$sql = "UPDATE formulario SET online='$online' WHERE id='1'"; 
$result = mysql_query($sql) or die(mysql_error()); 
$alteracao = mysql_affected_rows(); 
if ($alteracao == 1) {echo "<script></script>";} 
else {echo "<script></script>";} 
?><meta content="0;URL=?abrir=pagPedidos" http-equiv="refresh" />
				<div class="content-box-content">
                    <div class="tab-content default-tab" id="tab1">
                      <p></p>
                      <p align="center">Carregando Aguarde </p>
                    </div>
			    </div>
