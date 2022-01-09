<?php include ('AutorizaUser.php');?>
<?php
session_start("login_usuario");
if(!($login_usuario AND senha_usuario)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
input, textarea, select {margin: 0; padding: 3px; color: #333; background: #F4F4F4; vertical-align: bottom;border: 1px solid #CCCCCC; margin: 3px 0;font-family:Tahoma;}   
input:focus, textarea:focus, select:focus {background-color: #fff; color:#666; }
</style>
  <script>
<!--
        function stripHTML() {
                var re= /<\S[^><]*>/g;
                for (i=0; i < arguments.length; i++) {
                        arguments[i].value=arguments[i].value.replace(re, "");
                }
        }
-->
</script><div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Alterar Meu Perfil </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<?php
$id = $_GET['id'];
$resultado = mysql_query("SELECT*FROM usuarios_clube WHERE id='$id'");
while($play = mysql_fetch_assoc($resultado)){
$login   = $play['login'];
$nome   = $play['nome'];
$senha   = $play['senha'];
$sexo   = $play['sexo'];
$nick   = $play['nick'];
$foto   = $play['foto'];
$dia   = $play['dia'];
$mes   = $play['mes'];
$ano   = $play['ano'];
$estado   = $play['estado'];
$cidade   = $play['cidade'];
$bairro   = $play['bairro'];
$msn   = $play['msn'];
$skype   = $play['skype'];
$orkut   = $play['orkut'];
$twitter   = $play['twitter'];
$relacionamento   = $play['relacionamento'];
$estilo   = $play['estilo'];
$conheceu = $play['conheceu'];
$acha = $play['acha'];
}
?>
<form name="envia" action="index.php?pagina=AlterarPerfil&id=<? echo $id ?>" method="post" name="envia">
<table width="800" border="0">
  <tr>
    <td width="99"><div align="right">Login:</div></td>
    <td width="1074"><input name='login' type='text'  value='<? echo $login ?>' /></td>
  </tr>
  <tr>
    <td width="99"><div align="right">Senha:</div></td>
    <td width="1074"><input name='senha' type='password'  value='<? echo $senha ?>' /></td>
  </tr>
  <tr>
    <td><div align="right">Nome:</div></td>
    <td><input name='nome' type='text'  value='<? echo $nome ?>' /></td>
  </tr>
  <tr>
    <td><div align="right">Nick:</div></td>
    <td><input name='nick' type='text'  value='<? echo $nick ?>' /></td>
  </tr>
    <tr>
    <td><div align="right">Foto:</div></td>
    <td><input name='foto' type='text'  value='<? echo $foto ?>' /></td>
  </tr>
  <tr>
    <td><div align="right">Sexo:</div></td>
    <td><select name="sexo">
      <option value="<? echo $sexo?>" selected="selected" >
        <? echo $sexo?>
        </option>
      <option value="Masculino">Masculino</option>
      <option value="Feminino">Feminino</option>
      <option value="Indeciso(a)">Indeciso(a)</option>
    </select></td>
  </tr>
      <tr>
      <td><div align="right">Relacionamento:</div></td>
      <td><select name="relacionamento">
	      <option value="<? echo $relacionamento?>" selected="selected"><? echo $relacionamento?></option>
          <option value="Solteiro(a)">Solteiro(a)</option>
          <option value="Namorando">Namorando</option>
          <option value="Casado(a)">Casado(a)</option>
      </select></td>
    </tr>
    <tr>
      <td><div align="right">Estilo Musical:</div></td>
      <td><select name="estilo">
	  <option value='<? echo $estilo?>'selected="selected" ><? echo $estilo?></option>
	      <option value="Dance">Dance</option>
		  <option value="Eletronica">Eletronica</option>
		  <option value="Funk">Funk</option>
          <option value="Pagode">Pagode</option>
          <option value="Pop/Rock">Pop/Rock</option>
          <option value="Reggae">Reggae</option>
          <option value="Romantica">Romantica</option>
          <option value="Sertanejo">Sertanejo</option>
		  <option value="Swingueira">Swingueira</option>
		  <option value="Outro">Outro</option>
      </select></td>
    </tr>
  <tr>
    <td><div align="right">Nascimento:</div></td>
    <td><select name='dia'  onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
        <option value='<? echo $dia?>'  selected='selected'>
          <? echo $dia?>
        </option>
        <option value='01'>01</option>
        <option value='02'>02</option>
        <option value='03'>03</option>
        <option value='04'>04</option>
        <option value='05'>05</option>
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
        <select name='mes'  onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
        <option value='<? echo $mes?>'  selected='selected'>
          <? echo $mes?>
        </option>
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
        <select name='ano'  onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
        <option value='<? echo $ano?>' selected='selected'>
          <? echo $ano?>
        </option>
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
        </select></td>
  </tr>
  <tr>
    <td><div align="right">Cidade:</div></td>
    <td><input name='cidade' value='<? echo $cidade?>' type='text' id='cidade'/>
      Estado:
      <select name='estado'  onFocus='if (this.value == 'BA') {this.value = ''}' onBlur='if (this.value == '') {this.value = 'BA'}'>
        <option value='<? echo $estado?>' >
          <? echo $estado?>
        </option>
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
        </select></td>
  </tr>
  <tr>
    <td><div align='right'>Bairro:</div></td>
    <td><input name='bairro' value='<? echo $bairro?>' type='text' /></td>
  </tr>
  <tr>
    <td><div align='right'>Orkut:</div></td>
    <td><input name='orkut' type='text' id='orkut' value='<? echo $orkut?>' /></td>
  </tr>
  <tr>
    <td><div align='right'>Msn:</div></td>
    <td><input name='msn' type='text' id='msn' value='<? echo $msn?>'  /></td>
  </tr>
  <tr>
    <td><div align='right'>Skype:</div></td>
    <td><input name='skype' type='text' id='skype' value='<? echo $skype?>'  /></td>
  </tr>
  <tr>
    <td><div align='right'>Twitter:</div></td>
    <td><input name='twitter' type='text' id='twitter' value='<? echo $twitter?>'  /></td>
  </tr>
      <tr>
      <td><div align='right'>Como Conheceu a Rádio:</div></td>
      <td><select name='conheceu'>
	      <option value='<? echo $conheceu?>' ><? echo $conheceu?></option>
          <option value='Amigos'>Amigos</option>
          <option value='Escola'>Escola</option>
		  <option value='Portais'>Portais</option>
		  <option value='Redes Sociais'>Redes Sociais</option>
          <option value='TV'>TV</option>
		  <option value='Outro'>Outro</option>
      </select></td>
    </tr>
      <tr>
      <td><div align='right'>O Que achou da rádio:</div></td>
      <td><input name='acha' type='text' id='acha' value='<? echo $acha?>'  /></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name='envia' class='button' type='submit' value='Editar' onClick='stripHTML(this.form.login,senha,sexo,nome,nick,foto,cidade,bairro,orkut,msn,relacionamento,estilo,dia,mes,ano,skype,twitter,acha)'/></td>
  </tr>
</table>
</form>
<? 
$id = $_GET['id'];
$login = mysql_real_escape_string($_POST['login']);
$senha = mysql_real_escape_string($_POST['senha']);
$sexo = mysql_real_escape_string($_POST['sexo']);
$nome = mysql_real_escape_string($_POST['nome']);
$nick = mysql_real_escape_string($_POST['nick']);
$foto = mysql_real_escape_string($_POST['foto']);
$dia = mysql_real_escape_string($_POST['dia']);
$mes = mysql_real_escape_string($_POST['mes']);
$ano = mysql_real_escape_string($_POST['ano']);
$estado = mysql_real_escape_string($_POST['estado']);
$cidade = mysql_real_escape_string($_POST['cidade']);
$bairro = mysql_real_escape_string($_POST['bairro']);
$msn = mysql_real_escape_string($_POST['msn']);
$skype = mysql_real_escape_string($_POST['skype']);
$orkut = mysql_real_escape_string($_POST['orkut']);
$twitter = mysql_real_escape_string($_POST['twitter']);
$relacionamento = mysql_real_escape_string($_POST['relacionamento']);
$estilo = mysql_real_escape_string($_POST['estilo']);
$conheceu = mysql_real_escape_string($_POST['conheceu']);
$acha = mysql_real_escape_string($_POST['acha']);

if($_POST['envia']) {
$query = "UPDATE usuarios_clube SET login='$login',nome='$nome',senha='$senha',sexo='$sexo',nick='$nick',foto='$foto',dia='$dia',mes='$mes',ano='$ano',estado='$estado',cidade='$cidade',bairro='$bairro',msn='$msn',skype='$skype',orkut='$orkut',twitter='$twitter',relacionamento='$relacionamento',estilo='$estilo',conheceu='$conheceu',acha='$acha' WHERE id='$id'";
mysql_query($query) or die(mysql_error());
echo "<script>location.href='index.php?pagina=AlterarPerfil&id=$id&msg=sucesso';</script>
";}
?>
<?php
$msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
?>              <?php
$msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Usu&aacute;rio editado com sucesso!</div>";}
?> 