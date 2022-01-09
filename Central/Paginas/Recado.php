<?php include("AutorizaUser.php"); ?>
<div class="text2">Enviar Recado</div>
<br />
<center>
<?
include ('Config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro de Pedidos</title>
  <script>
        function stripHTML() {
                var re= /<\S[^><]*>/g;
                for (i=0; i < arguments.length; i++) {
                        arguments[i].value=arguments[i].value.replace(re, "");
                }
        }
</script>
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
<body><form id="form1" name="" method="post" action="">
  <table width="14%" border="0" align="center" cellpadding="0" cellspacing="1" class="Tabelas">
    <tr>
      <td class="Titulo">Nome</td>
    </tr>
    <tr>
      <td>
      <input name="nome" type="text" class="IPText" id="nome" style="width:200px;" value="<?php echo $nome ?>" /></td>
    </tr>
       <tr>
      <td class="Titulo">Tipo</td>
    </tr>
    <tr>
      <td><label>
        <select name="tipo">
          <option value="Anuncia">Anuncia</option>
          <option value="Fala">Fala</option>
          <option value="Grita">Grita</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td class="Titulo">Cor</td>
    </tr>
    <tr>
      <td><label>
        <select name="cor">
          <option value="#FFFF00">Amarelo</option>
          <option value="#0066FF">Azul</option>
          <option value="#666666">Cinza</option>
          <option value="#000000">Preto</option>
          <option value="#9933CC">Roxo</option>
          <option value="#006600">Verde</option>
          <option value="#FF0000">Vermelho</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td class="Titulo">Texto</td>
    </tr>
    <tr>
      <td><textarea name="texto" cols="0" rows="1" class="IPTextarea" id="pedido" style="width:200px;" maxlength="60"></textarea></td>
    </tr>
    <tr>
      <td class="Titulo" align="center"><input type="hidden" name="Acao" value="Enviar" />
          <input name="enviar" type="submit" class="botao" id="button" value="Enviar" onClick="stripHTML(this.form.texto)"/>      </td>
    </tr>
  </table>
</form>
<?php
if($_POST['enviar']){
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$texto = $_POST['texto'];
$cor = $_POST['cor'];
$data = date("d/m");

		
		$sql = "INSERT INTO recados (nome, tipo, texto, cor, data) VALUES('$nome', '$tipo', '$texto', '$cor', '$data')";		
	if($query = @mysql_query($sql) or die ("erro ao cadastrar no banco de dados ".mysql_error())){
		
		echo("<table width='400' border='0' cellpadding='0' cellspacing='0'>
    <tr>
      <td width='46' height='25'><div class='ok' align='center'>Recado Enviado Com Sucesso</div></td>
    </tr>
  </table>");
		
		}else{
		
		echo "<table width='400' border='0' cellpadding='0' cellspacing='0'>
    <tr>
      <td width='46' height='25'><div class='no' align='center'>Torpedo Não Enviado</div></td>
    </tr>
  </table>";
				
}}

?>
</body>
</html>
</center>