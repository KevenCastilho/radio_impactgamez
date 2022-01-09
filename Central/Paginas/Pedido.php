<?php include ('AutorizaUser.php');?>
<?php
session_start("login_usuario");
if(!($login_usuario AND senha_usuario)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<div class="text2"> Fazer Pedido </div>
<br />
<center>
<?
include ('Config.php');
?>
<?
$resultado = mysql_query("SELECT*FROM formulario");
$linhas = mysql_num_rows($resultado);
while ($since = mysql_fetch_array($resultado)){
if($since['online'] == 1){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro de Pedidos</title>
<style type="text/css">
.IPText{
color:#000000;
font-family:Tahoma, Arial, Verdana, sans-serif;
font-size:12px;
margin: 0;
padding: 2px;
height:14px;
border: 1px solid #ABADB3;
font-weight:normal;
}
.IPTextarea{
color:#000000;
font-family:Tahoma, Arial, Verdana, sans-serif;
font-size:12px;
margin: 0;
padding: 1px;
height:100px;
width:96%;
border: 1px solid #ABADB3;
font-weight:normal;
}
body,td,th {
	font-family: Tahoma;
	font-size: 11px;
	color: #000000;
}
</style>
</head>

<body><form id="form1" name="envia" method="post" action="">
  <table width="14%" border="0" align="center" cellpadding="0" cellspacing="1" class="Tabelas">
    <tr>
      <td class="Titulo">Nome</td>
    </tr>
    <tr>
      <td>
      <input name="nome" type="text" class="IPText" id="nome" style="width:160px;" value="<?php echo $nome ?>" /></td>
    </tr>
    <tr>
      <td class="Titulo">Email</td>
    </tr>
    <tr>
      <td><input name="email" type="text" class="IPText" id="email" style="width:160px;" value="<?php echo $msn ?>" /></td>
    </tr>
    <tr>
      <td class="Titulo">Cidade / Estado</td>
    </tr>
    <tr>
      <td><input name="cidade" type="text" class="IPText" id="cidade" style="width:160px;" value="<?php echo $cidade ?>/<?php echo $estado ?>" /></td>
    </tr>
    <tr>
      <td class="Titulo">Musica / Recado</td>
    </tr>
    <tr>
      <td><textarea name="pedido" class="IPTextarea" id="pedido" style="width:160px;"></textarea></td>
    </tr>
    <tr>
      <td class="Titulo" align="center"><input type="hidden" name="Acao" value="Enviar" />
          <input name="enviar" type="submit" class="botao" id="button" value="Enviar" />      </td>
    </tr>
  </table>
</form><? 
}else{
?><div text-align:center;> Infelizmente n&atilde;o temos nenhum locutor presente no momento. <br />
                      <br />
                  Tente novamente mais tarde. </div>
<? }} ?> 
<br />
<?php
   $data = date("d/m");
    $hora = date("H:i");
	
if($_POST['enviar']){
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$pedido = $_POST['pedido'];

		
		$sql = "INSERT INTO pedidos(nome, email, cidade, pedido, hora, data) VALUES('$nome', '$email', '$cidade', '$pedido', '$hora', '$data')";		
	if($query = @mysql_query($sql) or die ("erro ao cadastrar no banco de dados ".mysql_error())){
		
		echo("<table width='400' border='0' cellpadding='0' cellspacing='0'>
    <tr>
      <td width='46' height='25'><div class='ok' align='center'>Pedido Enviado Com Sucesso</div></td>
    </tr>
  </table>");
		
		}else{
		
		echo "<table width='400' border='0' cellpadding='0' cellspacing='0'>
    <tr>
      <td width='46' height='25'><div class='no' align='center'>Pedido Não Enviado</div></td>
    </tr>
  </table>";
				
}}

?>
</body>
</html>
</center>