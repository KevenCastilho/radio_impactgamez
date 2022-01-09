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
</style>

<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Usu&aacute;rio Ganhador do Sorteio </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<?php
require_once("Config.php");
$id = $_GET["id"];
$select = "SELECT*FROM usuarios_clube WHERE id='$id'";
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
    <table width="537" border="0" align="left" cellspacing="4">
    <tr>
      <td width="215" rowspan="13" ><img src="../Central/Fotos/<?php echo"$foto" ?>" width="215" height="302" border="0" title="<? echo"$login" ?>" /></td>
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
      <td height="21" ><span class="text3">Cidade: <strong>
        <?=$cidade;?>
      </strong></span></td>
    </tr>
    <tr>
      <td height="21" ><span class="text3">Estado: <strong>
        <?=$estado;?>
      </strong></span></td>
    </tr>
    <tr>
      <td height="21" ><span class="text3">Bairro: <strong>
        <?=$bairro;?>
      </strong></span></td>
    </tr>
    <tr>
      <td height="21" ><span class="text3">Msn: <strong>
        <?=$msn;?>
      </strong></span></td>
    </tr>
    <tr>
      <td height="21" ><span class="text3">Orkut: <strong><a target="_blank" href="<?=$orkut;?>">Clique Aqui !</a></strong></span></td>
    </tr>
    <tr>
      <td height="21" ><span class="text3">Skype: <strong>
        <?=$skype;?>
      </strong></span></td>
    </tr>
    <tr>
      <td height="21" ><span class="text3">Twitter: <strong>
        <?=$twitter;?>
      </strong></span></td>
    </tr>    <tr>
      <td height="21" ><span class="text3">Como Conheceu a Radio: <strong>
        <?=$conheceu;?>
      </strong></span></td>
    </tr>
    <tr>
      <td height="21" ><span class="text3">O que acha da Radio:<strong>
        <?=$acha;?>
      </strong></span></td>
    </tr>
    <tr>
      <td height="21" >&nbsp;</td>
    </tr>
  </table><br>
<? }} ?>