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
</style><div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Editar Usuário </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<?php
$id = $_GET['id'];
$resultado = mysql_query("SELECT*FROM usuarios WHERE id='$id'");
while($play = mysql_fetch_assoc($resultado)){
$login   = $play['login'];
$nome   = $play['nome'];
$senha   = $play['senha'];
$sexo   = $play['sexo'];
$nick   = $play['nick'];
$dia   = $play['dia'];
$mes   = $play['mes'];
$ano   = $play['ano'];
$estado   = $play['estado'];
$cidade   = $play['cidade'];
$bairro   = $play['bairro'];
$msn   = $play['msn'];
$skype   = $play['skype'];
$orkut   = $play['orkut'];
$cargo   = $play['cargo'];
$programa   = $play['programa'];
$twitter   = $play['twitter'];
$sobre   = $play['sobre'];
$relacionamento   = $play['relacionamento'];
$estilo   = $play['estilo'];
}
?>
<form name="envia" action="index.php?abrir=pagEditarUser&id=<? echo $id ?>" method="post" name="envia">
<table width="800" border="0">
  <tr>
    <td width="99"><div align="right">Login:</div></td>
    <td width="1074"><input name='login' type='text' class="text-input small-input" value='<? echo $login ?>' /></td>
  </tr>
  <tr>
    <td width="99"><div align="right">Senha:</div></td>
    <td width="1074"><input name='senha' type='password' class="text-input small-input" value='<? echo $senha ?>' /></td>
  </tr>
  <tr>
    <td><div align="right">Nome:</div></td>
    <td><input name='nome' type='text' class="text-input small-input" value='<? echo $nome ?>' /></td>
  </tr>
  <tr>
    <td><div align="right">Nick:</div></td>
    <td><input name='nick' type='text' class="text-input small-input" value='<? echo $nick ?>' /></td>
  </tr>
  <tr>
    <td><div align="right">Programa:</div></td>
    <td><input name="programa" type="text" value="<? echo $programa ?>" class="text-input small-input" /></td>
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
    <td><div align="right">Cargo:</div></td>
    <td><select name="cargo">
      <option value="<? echo $cargo?>" selected="selected">
        <? echo $cargo?>
        </option>
      <option value="Administrador">Administrador</option>
      <option value="Locutor">Locutor</option>
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
    <td><select name='dia' class='select' onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
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
        <select name='mes' class='select' onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
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
        <select name='ano' class='select' onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
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
    <td><input name="cidade" value="<? echo $cidade?>" type="text" class="text-input small-input"/>
      Estado:
      <select name='estado' class='select' onFocus='if (this.value == 'BA') {this.value = ''}' onBlur='if (this.value == '') {this.value = 'BA'}'>
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
    <td><div align="right">Bairro:</div></td>
    <td><input name="bairro" value="<? echo $bairro?>" type="text" id="cidade" class="text-input small-input"/></td>
  </tr>
  <tr>
    <td><div align="right">Orkut:</div></td>
    <td><input name="orkut" type="text" id="orkut" value="<? echo $orkut?>" class="text-input medium-input datepicker" /></td>
  </tr>
  <tr>
    <td><div align="right">Msn:</div></td>
    <td><input name="msn" type="text" id="msn" value="<? echo $msn?>" class="text-input small-input" /></td>
  </tr>
  <tr>
    <td><div align="right">Skype:</div></td>
    <td><input name="skype" type="text" id="skype" value="<? echo $skype?>" class="text-input small-input" /></td>
  </tr>
  <tr>
    <td><div align="right">Twitter:</div></td>
    <td><input name="twitter" type="text" id="twitter" value="<? echo $twitter?>" class="text-input small-input" /></td>
  </tr>
  <tr>
    <td><div align="right">Sobre Mim:</div></td>
    <td><textarea class="text-input textarea wysiwyg" id="textarea" name="sobre" cols="79" rows="15"><? echo $sobre?>
    </textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="envia" class="button" type="submit" value="Editar" /></td>
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
$dia = mysql_real_escape_string($_POST['dia']);
$mes = mysql_real_escape_string($_POST['mes']);
$ano = mysql_real_escape_string($_POST['ano']);
$estado = mysql_real_escape_string($_POST['estado']);
$cidade = mysql_real_escape_string($_POST['cidade']);
$bairro = mysql_real_escape_string($_POST['bairro']);
$msn = mysql_real_escape_string($_POST['msn']);
$skype = mysql_real_escape_string($_POST['skype']);
$orkut = mysql_real_escape_string($_POST['orkut']);
$cargo = mysql_real_escape_string($_POST['cargo']);
$programa = mysql_real_escape_string($_POST['programa']);
$twitter = mysql_real_escape_string($_POST['twitter']);
$sobre = mysql_real_escape_string($_POST['sobre']);
$relacionamento = mysql_real_escape_string($_POST['relacionamento']);
$estilo = mysql_real_escape_string($_POST['estilo']);

if($_POST['envia']) {
$query = "UPDATE usuarios SET login='$login',nome='$nome',senha='$senha',sexo='$sexo',nick='$nick',dia='$dia',mes='$mes',ano='$ano',estado='$estado',cidade='$cidade',bairro='$bairro',msn='$msn',skype='$skype',orkut='$orkut',cargo='$cargo',programa='$programa',twitter='$twitter',sobre='$sobre',relacionamento='$relacionamento',estilo='$estilo' WHERE id='$id'";
mysql_query($query) or die(mysql_error());
echo "<script>location.href='index.php?abrir=pagEditarUser&id=$id&msg=sucesso';</script>
";}
?>
<?php
$msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
?>              <?php
$msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Usu&aacute;rio editado com sucesso!</div>";}
?> 
<? } ?>