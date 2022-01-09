<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Novo Usu&aacute;rio</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />                
<?php
if($_POST['novo']){
$nome = $_POST["nome"];
$cargo = $_POST["cargo"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$nick = $_POST["nick"];
$programa = $_POST["programa"];
$sexo = $_POST["sexo"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$estado = $_POST["estado"];
$orkut = $_POST["orkut"];
$msn = $_POST["msn"];
$skype = $_POST["skype"];
$twitter = $_POST["twitter"];
$login = $_POST["login"];
$sobre = $_POST["sobre"];
$relacionamento = $_POST["relacionamento"];
$estilo = $_POST["estilo"];
if ($login==NULL|$nome==NULL|$nick==NULL|$senha==NULL|$dia==NULL|$mes==NULL|$ano==NULL|$estado==NULL|$cidade==NULL|$bairro==NULL|$msn==NULL|$skype==NULL|$orkut==NULL|$sexo==NULL|$cargo==NULL|$programa==NULL|$twitter==NULL|$sobre==NULL|$relacionamento==NULL|$estilo==NULL){
echo "<script>location.href='?abrir=pagNovoUser&msg=erro'</script>";
}else{
$query = "INSERT INTO usuarios (login, nome, nick, senha, dia, mes, ano, estado, cidade, bairro, msn, skype, orkut, sexo, cargo, programa, twitter, sobre, relacionamento, estilo) VALUES ('$login','$nome','$nick','$senha','$dia','$mes','$ano','$estado','$cidade','$bairro','$msn','$skype','$orkut','$sexo','$cargo','$programa','$twitter','$sobre','$relacionamento','$estilo')";
$result  = mysql_query($query) or die ("Erro ao Inserir");
echo "<script>location.href='?abrir=pagNovoUser&msg=sucesso'</script>";}}
?>
<form id="form1" name="novo" method="post" action="">
  <table width="800" border="0">
    <tr>
      <td width="99"><div align="right">Login:</div></td>
      <td width="1074"><input name="login" type="text" class="text-input small-input" /></td>
    </tr>
    <tr>
      <td width="99"><div align="right">Senha:</div></td>
      <td width="1074"><input name="senha" type="password" class="text-input small-input" /></td>
    </tr>
    <tr>
      <td><div align="right">Nome:</div></td>
      <td><input name="nome" type="text" class="text-input small-input" /></td>
    </tr>
    <tr>
      <td><div align="right">Nick:</div></td>
      <td><input name="nick" type="text" class="text-input small-input" /></td>
    </tr>
    <tr>
      <td><div align="right">Programa:</div></td>
      <td><input name="programa" type="text" class="text-input small-input" /></td>
    </tr>
    <tr>
      <td><div align="right">Sexo:</div></td>
      <td><select name="sexo">
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
          <option value="Indeciso(a)">Indeciso(a)</option>
      </select></td>
    </tr>
    <tr>
      <td><div align="right">Cargo:</div></td>
      <td><select name="cargo">
          <option value="Administrador">Administrador</option>
          <option value="Locutor">Locutor</option>
      </select></td>
    </tr>
    <tr>
      <td><div align="right">Relacionamento:</div></td>
      <td><select name="relacionamento">
          <option value="Solteiro(a)" selected="selected">Solteiro(a)</option>
          <option value="Namorando">Namorando</option>
          <option value="Casado(a)">Casado(a)</option>
      </select></td>
    </tr>
    <tr>
      <td><div align="right">Estilo Musical:</div></td>
      <td><select name="estilo">
          <option value="Pop/Rock" selected="selected">Pop/Rock</option>
          <option value="Eletronica">Eletronica</option>
          <option value="Dance">Dance</option>
          <option value="Pagode">Pagode</option>
          <option value="Funk">Funk</option>
          <option value="Reggae">Reggae</option>
          <option value="Romantica">Romantica</option>
          <option value="Sertanejo">Sertanejo</option>
		  <option value="Outro">Outro</option>
      </select></td>
    </tr>
    <tr>
      <td><div align="right">Nascimento:</div></td>
      <td><select name='dia' class='select' onFocus='if (this.value == '') {this.value = ''}' onBlur='if (this.value == '') {this.value = ''}'>
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
      <td><input name="cidade" type="text" class="text-input small-input"/>
        Estado:
        <select name='estado' class='select' onFocus='if (this.value == 'BA') {this.value = ''}' onBlur='if (this.value == '') {this.value = 'BA'}'>
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
      <td><input name="bairro" type="text" id="cidade" class="text-input small-input"/></td>
    </tr>
    <tr>
      <td><div align="right">Orkut:</div></td>
      <td><input name="orkut" type="text" id="orkut" class="text-input medium-input datepicker" /></td>
    </tr>
    <tr>
      <td><div align="right">Msn:</div></td>
      <td><input name="msn" type="text" id="msn" class="text-input small-input" /></td>
    </tr>
    <tr>
      <td><div align="right">Skype:</div></td>
      <td><input name="skype" type="text" id="skype" class="text-input small-input" /></td>
    </tr>
    <tr>
      <td><div align="right">Twitter:</div></td>
      <td><input name="twitter" type="text" id="twitter" class="text-input small-input" /></td>
    </tr>
    <tr>
      <td><div align="right">Sobre Mim:</div></td>
      <td><textarea class="text-input textarea wysiwyg" id="textarea" name="sobre" cols="79" rows="15">
    </textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="novo" type="submit" class="button" value="Alterar" /></td>
    </tr>
  </table>
</form>
 </div>
				</div>      <br />
				<?php
				   $msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
				   ?>
                   <?php
				   $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Usu&aacute;rio adicionado com sucesso!</div>";}
				   ?>   
				   <? } ?>