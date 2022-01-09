<?php include("AutorizaUser.php"); ?>
<?php
if($_POST['altera']){ // Se o POST for acionado , executara as seguintes coisas ->
$id = $_POST["id"]; // ID do Usuario
$nome = $_POST["nome"]; // Nome do Usuario
$dia = $_POST["dia"]; // Dia de Nascimento
$mes = $_POST["mes"]; // Mes de Nascimento
$ano = $_POST["ano"]; // Ano de Nascimento
$senha = $_POST["senha"]; // Senha do Usuario
$nome = $_POST["nome"]; // Nome do Usuario
$nick = $_POST["nick"]; // Nick do Usuario
$sexo = $_POST["sexo"]; // Sexo do Usuario
$cidade = $_POST["cidade"]; // Cidade do Usuario
$bairro = $_POST["bairro"]; // Bairro do Usuario
$estado = $_POST["estado"]; // Estado do Usuario
$orkut = $_POST["orkut"]; // Orkut do Usuario
$msn = $_POST["msn"]; // Msn do Usuario
$skype = $_POST["skype"]; // Skype do Usuario
$login = $_POST["login"]; // Login do Usuario
$twitter = $_POST["twitter"]; // Twiiter
$codigo = $_POST["senha"];// Senha do Usuario
echo "<script>window.alert('$nick Seu Perfil Foi Alterado Com Sucesso');location.href='index.php?pagina=AlterarPerfil&nome=$nome';</script>"; 
include('Config.php');

mysql_query("update usuarios_clube set nome='$nome' where (id = '$id')");
mysql_query("update usuarios_clube set login='$login' where (id = '$id')");
mysql_query("update usuarios_clube set sexo='$sexo' where (id = '$id')");
mysql_query("update usuarios_clube set nick='$nick' where (id = '$id')");
mysql_query("update usuarios_clube set estado='$estado' where (id = '$id')");
mysql_query("update usuarios_clube set dia='$dia' where (id = '$id')");
mysql_query("update usuarios_clube set mes='$mes' where (id = '$id')");
mysql_query("update usuarios_clube set ano='$ano' where (id = '$id')");
mysql_query("update usuarios_clube set idade='$idade' where (id = '$id')");
mysql_query("update usuarios_clube set orkut='$orkut' where (id = '$id')");
mysql_query("update usuarios_clube set msn='$msn' where (id = '$id')");
mysql_query("update usuarios_clube set skype='$skype' where (id = '$id')");
mysql_query("update usuarios_clube set bairro='$bairro' where (id = '$id')");
mysql_query("update usuarios_clube set cidade='$cidade' where (id = '$id')");
mysql_query("update usuarios_clube set senha='$codigo' where (id = '$id')");

}else{
include('Config.php');

mysql_query("update usuarios_clube set nome='$nome' where (id = '$id')");
mysql_query("update usuarios_clube set sexo='$sexo' where (id = '$id')");
mysql_query("update usuarios_clube set login='$login' where (id = '$id')");
mysql_query("update usuarios_clube set estado='$estado' where (id = '$id')");
mysql_query("update usuarios_clube set nick='$nick' where (id = '$id')");
mysql_query("update usuarios_clube set dia='$dia' where (id = '$id')");
mysql_query("update usuarios_clube set mes='$mes' where (id = '$id')");
mysql_query("update usuarios_clube set ano='$ano' where (id = '$id')");
mysql_query("update usuarios_clube set idade='$idade' where (id = '$id')");
mysql_query("update usuarios_clube set orkut='$orkut' where (id = '$id')");
mysql_query("update usuarios_clube set msn='$msn' where (id = '$id')");
mysql_query("update usuarios_clube set skype='$skype' where (id = '$id')");
mysql_query("update usuarios_clube set bairro='$bairro' where (id = '$id')");
mysql_query("update usuarios_clube set twitter='$twitter' where (id = '$id')");
mysql_query("update usuarios_clube set cidade='$cidade' where (id = '$id')");
mysql_query("update usuarios_clube set senha='$codigo' where (id = '$id')");}
?>

<?
$acao = $_GET["acao"]; // Define o Get
$get_id = $_GET["nome"]; // Define o ID
if($acao=="alterado"){ // Se foi alterado
echo "<strong>Alterado com Sucesso</strong>";}else{} // Retorna mensagem de sucesso
include "Config.php"; // Inclui Configuracao
$select = "SELECT*FROM usuarios_clube WHERE nome='$get_id'"; // Seleciona as tabelas
$result = mysql_query($select); // Pucha os dados
while ($play = mysql_fetch_array($result)){ // Pega os Dados
$nome = $play['nome'];
$id = $play['id'];
$login = $play['login'];
$skype = $play['skype'];
$msn = $play['msn'];
$nick = $play['nick'];
$orkut = $play['orkut'];
$twitter = $play['twitter'];
$estado = $play['estado'];
$cidade = $play['cidade'];
$bairro = $play['bairro'];
$sexo = $play['sexo'];
$dia = $play['dia'];
$mes = $play['mes'];
$ano = $play['ano'];
$relacionamento = $play['relacionamento'];
$estilo = $play['estilo'];
$conheceu = $play['conheceu'];
$acha = $play['acha'];
echo "
<div class='text2'>
Alterar Informa&ccedil;&otilde;es Pessoais
</div>
<center>
<form action='' method='POST' enctype='multipart/form-data' name='altera'>
<table width='900' border='0' align='center' cellspacing='4'>
<tr>
    <td width='116' rowspan='5' class='tt'><center><img src='Fotos/$foto' width='113' height='110' ></center></td>
    <td width='1'>&nbsp;</td>
    <td width='140' class='tt'><span class='text3'>Login: </span></td>
    <td width='315' class='tt'><input name='login' value='$login' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width='140' class='tt'><span class='text3'>Senha: </span></td>
    <td width='315' class='tt'><input name='senha' value='$senha' type='password' class='input' size='40' maxlength='40' /></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td width='140' class='tt'><span class='text3'>Nome: </span></td>
    <td width='315' class='tt'><input name='nome' value='$nome' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width='140' class='tt'><span class='text3'>Nick: </span></td>
    <td width='315' class='tt'><input name='nick' value='$nick' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
  <tr>
     <td colspan='3' style='text-align:center;'></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Sexo: </span></td>
    <td class='tt'>
    <select name='sexo' class='select' onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
    <option value='$sexo'>$sexo</option>
	<option value='Masculino'>Masculino</option>
	<option value='Feminino'>Feminino</option>
	</select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Nascimento: </span></td>
    <td class='tt'>
	    <select name='dia' class='select' onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
	<option value='$dia'>$dia</option>
	<option value='01'>01</option>
	<option value='02'>02</option>
	<option value='03'>03</option>
	<option value='04'>04</option>
 	<option value='05>05</option>
	<option value='06'>06</option>
	<option value='07'>07</option>
  	<option value='08'>08</option>
	<option value='09'>09</option>
	<option value='10'>10</option>
	<option value='11'>11</option>
	<option value='12'>12</option>
	<option value='13'>13</option>
	<option value='14'>14</option>
	<option value='15'>15</option>
	<option value='16'>16</option>
	<option value='17'>17</option>
	<option value='18'>18</option>
	<option value='19'>19</option>
	<option value='20'>20</option>
	<option value='21'>21</option>
	<option value='22'>22</option>
	<option value='23'>23</option>
	<option value='24'>24</option>
	<option value='25'>25</option>
	<option value='26'>26</option>
	<option value='27'>27</option>
	<option value='28'>28</option>
	<option value='29'>29</option>
	<option value='30'>30</option>
	<option value='31'>31</option>
	</select>
    <select name='mes' class='select' onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
	<option value='$mes'>$mes</option>
	<option value='01'>Janeiro</option>
	<option value='02'>Fevereiro</option>
	<option value='03'>Mar&ccedil;o</option>
	<option value='04'>Abril</option>
	<option value='05'>Maio</option>
	<option value='06'>Junho</option>
	<option value='07'>Julho</option>
	<option value='08'>Agosto</option>
	<option value='09'>Setembro</option>
	<option value='10'>Outubro</option>
	<option value='11'>Novembro</option>
	<option value='12'>Dezembro</option>
	</select>
    <select name='ano' class='select' onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
	<option value='$ano'>$ano</option>
	<option value='1998'>1998</option>
	<option value='1997'>1997</option>
	<option value='1996'>1996</option>
	<option value='1995'>1995</option>
	<option value='1994'>1994</option>
	<option value='1993'>1993</option>
	<option value='1992'>1992</option>
	<option value='1991'>1991</option>
	<option value='1990'>1990</option>
	<option value='1989'>1989</option>
	<option value='1988'>1988</option>
	<option value='1987'>1987</option>
	<option value='1986'>1986</option>
	<option value='1985'>1985</option>
	<option value='1984'>1984</option>
	<option value='1983'>1983</option>
	<option value='1982'>1982</option>
	<option value='1981'>1981</option>
	<option value='1980'>1980</option>
	<option value='1979'>1979</option>
	<option value='1978'>1978</option>
	<option value='1977'>1977</option>
	<option value='1976'>1976</option>
	<option value='1975'>1975</option>
	<option value='1974'>1974</option>
	<option value='1973'>1973</option>
	<option value='1972'>1972</option>
	<option value='1971'>1971</option>
	<option value='1970'>1970</option>
	</select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Cidade: </span></td>
    <td class='tt'><input name='cidade' value='$cidade' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Estado: </span></td>
    <td class='tt'>
    <select name='estado' class='select' onFocus='if (this.value == 'BA') {this.value = ''}' onBlur='if (this.value == '') {this.value = 'BA'}'>
    <option value='$estado' >$estado</option>
	<option value='AP' >AP</option>
	<option value='AM' >AM</option>
	<option value='BA' >BA</option>
	<option value='CE' >CE</option>
	<option value='DF' >DF</option>
	<option value='ES' >ES</option>
	<option value='GO' >GO</option>
	<option value='MA' >MA</option>
	<option value='MG' >MG</option>
	<option value='MT' >MT</option>
	<option value='MS' >MS</option>
	<option value='PA' >PA</option>
	<option value='PB' >PB</option>
	<option value='PR' >PR</option>
	<option value='PE'>PE</option>
	<option value='RJ' >RJ</option>
	<option value='RN' >RN</option>
	<option value='RS' >RS</option>
	<option value='RO' >RO</option>
	<option value='RR' >RR</option>
	<option value='SC' >SC</option>
	<option value='SP' >SP</option>
	<option value='SE' >SE</option>
	<option value='TO' >TO</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Bairro: </span></td>
    <td class='tt'><input name='bairro' value='$bairro' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Orkut: </span></td>
    <td class='tt'><input name='orkut' value='$orkut' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Msn: </span></td>
    <td class='tt'><input name='msn' value='$msn' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Skype: </span></td>
    <td class='tt'><input name='skype' value='$skype' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='tt'><span class='text3'>Twitter: </span></td>
    <td class='tt'><input name='twitter' value='$twitter' type='text' class='input' size='40' maxlength='40' /></td>
  </tr>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type='hidden' name='id' value='$id'><input type='submit' value='Alterar' name='altera' class='botao'></td>
  </tr>
</table>
</form>
</center>
";}?>