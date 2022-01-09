<?php
require_once("Fail/Settings.php");
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
<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?><div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Perfil De <strong>
          <?=$nome;?>
        </strong></p>
  </div>
<div style="padding: 10px;">
  <table width="537" border="0" align="left" cellspacing="0">
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
    </tr>    
  </table>
  <table width='485' border='0' cellspacing='0'>
    <tr>
      <td colspan='2' class='tt'><span class="text3">Como Conheceu a Radio: <strong>
      <?=$conheceu;?>
      </strong></span></td>
    </tr>
    <tr>
      <td colspan='2' class='tt'><span class="text3">O que acha da Radio:<strong>
      <?=$acha;?>
      </strong></span></td>
    </tr>
  </table>
</div></div>
    </div>
    </div>
    </div></body>
      </html>
      <? } ?>
<? } ?>