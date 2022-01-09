<?
include('Fail/Settings.php');
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
.style1 {color: #000000}
</style>
</head>
<body><form id="form1" name="envia" method="post" action="">
  <table width="14%" border="0" align="center" cellpadding="0" cellspacing="1" class="Tabelas">
    <tr>
      <td class="style1">Nome</td>
    </tr>
    <tr>
      <td>
        <textarea name="nome" class="IPText" id="nome" id="name" style="width:160px;"></textarea></td>
    </tr>
    <tr>
      <td class="style1">Email</td>
    </tr>
    <tr>
      <td><textarea name="email" class="IPText" id="email" style="width:160px;"></textarea></td>
    </tr>
    <tr>
      <td class="Titulo style1">Cidade / Estado</td>
    </tr>
    <tr>
      <td><textarea name="cidade" class="IPText" id="para" style="width:160px;"></textarea></td>
    </tr>
    <tr>
      <td class="style1">Musica / Recado</td>
    </tr>
    <tr>
      <td><textarea name="pedido" class="IPTextarea" id="pedido" style="width:160px;"></textarea></td>
    </tr>
    <tr>
      <td class="Titulo" align="center"><input type="hidden" name="Acao" value="Enviar" />
          <input name="enviar" type="submit" class="button" id="button" value="Enviar pedido!" />      </td>
    </tr>
  </table>
</form><? 
}else{
?><div class="style1" style="text-align:center; padding-left: 5px; padding-right:5px;"> Infelizmente n&atilde;o temos nenhum locutor presente no momento. <br />
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
		
		echo("<div class='sucess' align='center'>Pedido Enviado Com Sucesso</div>");
		
		}else{
		
		echo "<div class='warning'>Pedido Não Enviado</div>";
				
}}

?>

</body>
</html>
