<?php
include('Fail/Settings.php');
?>
<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?>
<style>
@import url('./Css/Play.css');
.style1 {font-size: 13px}
.button{background:#f4f4f4;height:23px;width:100px;color:background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );;font-family:Tahoma; font-size:11px;border:none;cursor:pointer;border:1px solid #CCC;-webkit-border-radius:5px;-moz-border-radius:5px;text-shadow:0 0 .3em #F4F4F4}
.button:hover{color:#000;font-family:Tahoma;font-size:11px;text-shadow:0 0 .1em background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );;background:#fff;}
input, textarea, select {margin: 0; padding: 3px; color: #333; background: #F4F4F4; vertical-align: bottom;border: 1px solid #CCCCCC; margin: 3px 0;font-family:Tahoma;}   
input:focus, textarea:focus, select:focus {background-color: #fff; color:#666; }
a:link {
	color: #000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: none;
	color: #333333;
}
a:active {
	text-decoration: none;
	color: #000;
}
</style><div id="conteudo_esquerdo">
  <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
    <p style="padding:5px;">Cadastro</p>
  </div>
  <div style="padding: 10px;">
  <script>
<!--
        function stripHTML() {
                var re= /<\S[^><]*>/g;
                for (i=0; i < arguments.length; i++) {
                        arguments[i].value=arguments[i].value.replace(re, "");
                }
        }
-->
</script>
<form id="form1" name="novo" method="post" action="">
  <table width="800" border="0">
    <tr>
      <td width="99" class="style1"><div align="right">Login:</div></td>
      <td width="1074"><input name="login" type="text"  /></td>
    </tr>
    <tr>
      <td width="99" class="style1"><div align="right">Senha:</div></td>
      <td width="1074"><input name="senha" type="password"  /></td>
    </tr>
    <tr>
      <td class="style1"><div align="right">Nome:</div></td>
      <td><input name="nome" type="text"  /></td>
    </tr>
    <tr>
      <td class="style1"><div align="right">Nick:</div></td>
      <td><input name="nick" type="text"  /></td>
    </tr>
           <tr>
      <td class="style1"><div align="right">Link da sua Foto:</div></td>
      <td><input name="foto" type="text" value="SemFoto.gif" /></td>
    </tr>
    <tr>
      <td class="style1"><div align="right">Sexo:</div></td>
      <td><select name="sexo">
          <option value="Masculino" selected="selected" >Masculino</option>
          <option value="Feminino">Feminino</option>
          <option value="Indeciso(a)">Indeciso(a)</option>
      </select></td>
    </tr>
      <tr>
      <td class="style1"><div align="right">Relacionamento:</div></td>
      <td><select name="relacionamento">
          <option value="Solteiro(a)" selected="selected" >Solteiro(a)</option>
          <option value="Namorando">Namorando</option>
          <option value="Casado(a)">Casado(a)</option>
      </select></td>
    </tr>
    <tr>
      <td class="style1"><div align="right">Estilo Musical:</div></td>
      <td><select name="estilo">
	      <option value="Dance" selected="selected">Dance</option>
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
      <td class="style1"><div align="right">Nascimento:</div></td>
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
      <td class="style1"><div align="right">Cidade:</div></td>
      <td><input name="cidade" type="text" id="cidade" />
        <span class="style1">Estado:        </span>
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
      <td class="style1"><div align="right">Bairro:</div></td>
      <td><input name="bairro" type="text" id="bairro" /></td>
    </tr>
    <tr>
      <td class="style1"><div align="right">Orkut:</div></td>
      <td><input name="orkut" type="text" id="orkut"  /></td>
    </tr>
    <tr>
      <td class="style1"><div align="right">Msn:</div></td>
      <td><input name="msn" type="text" id="msn"  /></td>
    </tr>
    <tr>
      <td class="style1"><div align="right">Skype:</div></td>
      <td><input name="skype" type="text" id="skype"  /></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Twitter:</div></td>
      <td><input name="twitter" type="text" id="twitter"  /></td>
    </tr>
      <tr>
      <td class="style1"><div align="right">Como Conheceu a Rádio:</div></td>
      <td><select name="conheceu" onFocus="if (this.value == 'BA') {this.value = ''}" onBlur="if (this.value == '') {this.value = 'BA'}">
          <option value="Amigos">Amigos</option>
          <option value="Escola">Escola</option>
		  <option value="Portais">Portais</option>
		  <option value="Redes Sociais">Redes Sociais</option>
          <option value="TV">TV</option>
		  <option value="Outro">Outro</option>
      </select></td>
    </tr>
      <tr>
      <td class="style1"><div align="right">O Que achou da rádio:</div></td>
      <td><input name="acha" type="text" id="acha"  /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="novo" type="submit" class="button" value="Cadastrar" onClick="stripHTML(this.form.login,senha,nome,nick,foto,sexo,relacionamento,estilo,dia,mes,ano,cidade,bairro,orkut,msn,skype,twitter,acha)"></td>
    </tr>
  </table>
</form>
<?php
if($_POST['novo']){
$login = ($_POST['login']);
$senha = ($_POST['senha']);
$nome = ($_POST['nome']);
$nick = ($_POST['nick']);
$foto = ($_POST['foto']);
$sexo = ($_POST['sexo']);
$dia = ($_POST['dia']);
$mes = ($_POST['mes']);
$ano = ($_POST['ano']);
$cidade = ($_POST['cidade']);
$estado = ($_POST['estado']);
$bairro = ($_POST['bairro']);
$orkut = ($_POST['orkut']);
$msn = ($_POST['msn']);
$skype = ($_POST['skype']);
$twitter = ($_POST['twitter']);
$relacionamento = ($_POST['relacionamento']);
$estilo = ($_POST['estilo']);
$conheceu = ($_POST['conheceu']);
$acha = ($_POST['acha']);
if ($login==NULL|$senha==NULL|$nome==NULL|$nick==NULL|$foto==NULL|$sexo==NULL|$dia==NULL|$mes==NULL|$ano==NULL|$estado==NULL|$cidade==NULL|$bairro==NULL|$msn==NULL|$skype==NULL|$orkut==NULL|$twitter==NULL|$relacionamento==NULL|$estilo==NULL|$conheceu==NULL|$acha==NULL){
echo "<div class='warning'>Preencha todos os campos!</div>";
}else{
$msquery3 = "INSERT INTO usuarios_clube (login, senha, nome, nick, foto, sexo, dia, mes, ano, estado, cidade, bairro, msn, skype, orkut, twitter, relacionamento, estilo, conheceu, acha) VALUES 
('$login','$senha','$nome','$nick','$foto','$sexo','$dia','$mes','$ano','$estado','$cidade','$bairro','$msn','$skype','$orkut','$twitter','$relacionamento','$estilo','$conheceu','$acha')";
$msresults= mysql_query($msquery3);
echo "<div class='sucess'>Usu&aacute;rio cadastrado com sucesso!</div>";
}
}}
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="400" height="25"><div align="center" class="style1">J&aacute; &eacute; Cadastrado ? <a href="../Central.php">Clique Aqui</a> para logar ! </div></td>
    </tr>
  </table></div>
</div>
</body>
</html>