<?php include ('AutorizaUser.php');?>
<?php
session_start("login_usuario");
if(!($login_usuario AND senha_usuario)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<?php
require_once("Config.php");
$nome = $_GET["nome"];
$select = "SELECT*FROM usuarios_clube WHERE nome='$nome'";
$result = mysql_query($select);
while($play = mysql_fetch_array($result)){
$nome = $play['nome'];
$id = $play['id'];
$login = $play['login'];
$foto = $play['foto'];
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
?>
<style type="text/css">
<!--
.IPText {color:#000000;
font-family:Tahoma, Arial, Verdana, sans-serif;
font-size:12px;
margin: 0;
padding: 2px;
height:14px;
border: 1px solid #ABADB3;
font-weight:normal;
}
.IPTextarea {color:#000000;
font-family:Tahoma, Arial, Verdana, sans-serif;
font-size:12px;
margin: 0;
padding: 1px;
height:100px;
border: 1px solid #ABADB3;
font-weight:normal;
}
-->
</style>

<div class="text2">
Informa&ccedil;&otilde;es  de 
<strong>
<?=$nome;?>
</strong></div>
<br />
<center>
  <table width="537" border="0" align="center" cellspacing="0">
    <tr>
      <td width="215" rowspan="13" ><img src="<?php echo"$foto" ?>" width="215" height="302" border="0" title="<? echo"$login" ?>" /></td>
      <td width="306" >Nome: <strong>
        <?=$nome;?>
      </strong></td>
    </tr>
    <tr>
      <td >Nick: <strong>
        <?=$nick;?>
      </strong></td>
    </tr>
    <tr>
      <td >Sexo: <strong>
        <?=$sexo;?>
      </strong></td>
    </tr>
	    <tr>
      <td >Relacionamento: <strong>
        <?=$relacionamento;?>
      </strong></td>
    </tr>
	    <tr>
      <td >Estilo Musical: <strong>
        <?=$estilo;?>
      </strong></td>
    </tr>
    <tr>
      <td height="21" >Data de Nascimento: <strong>
        <?=$dia;?>/<?=$mes;?>/<?=$ano;?>
      </strong></td>
    </tr>
    <tr>
      <td height="21" >Cidade: <strong>
        <?=$cidade;?>
      </strong></td>
    </tr>
    <tr>
      <td height="21" >Estado: <strong>
        <?=$estado;?>
      </strong></td>
    </tr>
    <tr>
      <td height="21" >Bairro: <strong>
        <?=$bairro;?>
      </strong></td>
    </tr>
    <tr>
      <td height="21" >Msn: <strong>
        <?=$msn;?>
      </strong></td>
    </tr>
    <tr>
      <td height="21" >Orkut: <strong><a target="_blank" href="<?=$orkut;?>">Clique Aqui !</a></strong></td>
    </tr>
    <tr>
      <td height="21" >Skype: <strong>
        <?=$skype;?>
      </strong></td>
    </tr>
    <tr>
      <td height="21" >Twitter: <strong>
        <?=$twitter;?>
      </strong></td>
    </tr>    
  </table>
  <table width='537' border='0' cellspacing='0'>
    <tr>
      <td colspan='2'>Como Conheceu a Radio: <strong>
      <?=$conheceu;?>
      </strong></td>
    </tr>
    <tr>
      <td colspan='2'>O que acha da Radio:<strong>
      <?=$acha;?>
      </strong></td>
    </tr>
</table>
<? } ?><br />