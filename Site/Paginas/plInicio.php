<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?>
	<div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">&Uacute;ltimas Not&iacute;cias</p>
      </div> <div style="padding:5px;"><?php
$query = "SELECT * FROM noticias";
$result = mysql_query($query);
$play = mysql_num_rows($result);
if($play <= "0"){
echo "<br><div class='warning'>Nenhuma Not&iacute;cia cadastrada</div>";}
?>
      <?php
	  include('Fail/Settings.php');
	$query = "SELECT * FROM noticias order BY id DESC LIMIT 2";
	$result = mysql_query($query,$conecta);
	while ($play = mysql_fetch_array($result)){
	$id = $play["id"];
	$titulo = $play['titulo'];
	$data = $play['data'];
	$foto = $play['foto'];
	$n = $i+1;
	$i++;
	?>
      <table width="612" height="79" border="0" align="center" cellspacing="4">
        <tr>
          <td width="75" rowspan="3" class="tt"><div align="center" id="noticia"><img src="<?php echo $foto;?>" width="75" height="75" border="0" title="<? echo"$login" ?>" /></div></div></td>
          <td width="521"><b><?php echo $titulo;?></b></td>
        </tr>
        <tr>
          <td>Data: [<?php echo $data;?>]</td>
        </tr>
        <tr>
          <td><div align="right"><a href="javascript:;" onclick ="Load('?sexy=plVerNoticia&amp;id=<? echo $play['id']; ?>','conteudo','GET');"># Leia Mais</a></div></td>
        </tr>
      </table>
      <?php } ?>
      </div>
</div>
    <div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Aniversariantes</p>
      </div>
      <div style="padding:5px;"><?php
	  $sql = mysql_query("SELECT * FROM usuarios_clube WHERE id order by id desc");
echo "<p align=\"center\"><strong>Aniversariante do dia</strong></p>";
while ($valor = mysql_fetch_array($sql)) {
$total = mysql_num_rows($sql);
if($valor[dia] == date(d))
if($valor[mes] == date(m))
echo "<table style=\"width: 100%; border-collapse: collapse\" border=\"0\" cellspacing=\"3\" bordercolor=\"#3c3c3c\" summary=\"\" cellpadding=\"0\"> 
<tbody>
<tr valign=\"top\">
<td width=\"100%\">
<img src=\"$valor[foto]\" width=\"85\" height=\"80\" hspace=\"5\" align=\"left\"><br>
&nbsp;Parabens hoje dia $valor[dia]/$valor[mes],<br /> 
 &nbsp;para o(a) nosso(a) querido(a) aniversariante: <a href=\"javascript:;\" onclick =\"Load ('?sexy=plPerfil&amp;id=$valor[id]','conteudo','GET');\">$valor[nome]</a><br></td>
</tr></tbody></table>
";
}
?></div></div>
	      <div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Usu&aacute;rios Cadastrados </p>
      </div>
      <div style="padding:5px;"><?php
$query = "SELECT * FROM usuarios_clube";
$result = mysql_query($query);
$play = mysql_num_rows($result);
if($play <= "0"){
echo "<div class='warning'>Nenhum Usu&aacute;rio cadastrado</div>";}
?><marquee scrollamount="6" onmouseover="stop();" onmouseout="start();"><?php
require_once("Fail/Settings.php");
$id = $_GET["id"];
$query = "SELECT * FROM usuarios_clube order BY id DESC";
$result = mysql_query($query);
while($play = mysql_fetch_array($result)){
$nome = $play['nome'];
$foto = $play['foto'];
?>
                &nbsp;<div style="width:100px; height:auto; float:left; text-align:center;">
<center><a href="javascript:;" onclick ="Load ('?sexy=plPerfil&amp;id=<? echo $play['id']; ?>','conteudo','GET');" title="<? echo $play['nome']; ?>"><div align="center"><img src="<?=$foto;?>" width="80" height="80" border="0"/></div><? echo $play['nome']; ?></a></center></div>
                <? }?></marquee></div></div>	  <div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Gato e Gata da Semana</p>
      </div>
      <div style="padding:3px;">
        <table width="51%" height="17" border="0" align="center" cellpadding="0" cellspacing="1" class="Tabelas">
          <tr>
            <td class="Titulo"><?
						$select = file_get_contents('../Admin/Funcoes/Gato.txt');
						$resultado = mysql_query('SELECT * FROM usuarios_clube WHERE ID=' . $select);
						while($play = mysql_fetch_array($resultado))
							{
							$foto = $play['foto'];
						?>
                <table cellpadding="0" cellspacing="1" border="0" width="100%" class="Tabelas">
                  <tr>
                    <td align="left" style="padding:0;"><img src='<?=$foto;?>' width='110' height='85' border="0" /> </td>
                  </tr>
                  <tr>
                    <td class="Titulo"><b>Nome</b></td>
                  </tr>
                  <tr>
                    <td><? echo $play['nome']; ?></td>
                  </tr>

                  <tr>
                    <td><b>Visualisar Perfil </b></td>
                  </tr>
                  <tr>
                    <td><a href="javascript:;" onclick ="Load ('?sexy=plPerfil&amp;id=<? echo $play['id']; ?>','conteudo','GET');">Clique Aqui !</a></td>
                  </tr>
                </table>
              <?
							}
						?>
              &nbsp;</td>
            <td class="Titulo"><?
						$select = file_get_contents('../Admin/Funcoes/Gata.txt');
						$resultado = mysql_query('SELECT * FROM usuarios_clube WHERE ID=' . $select);
						while($play = mysql_fetch_array($resultado))
							{
							$foto = $play['foto'];
						?>
                <div align="center">
                  <table cellpadding="0" cellspacing="1" border="0" width="100%" class="Tabelas">
                    <tr>
                      <td align="left"><img src='<?=$foto;?>' width='110' height='85' border="0" /> </td>
                    </tr>
                    <tr>
                      <td class="Titulo"><b>Nome</b></td>
                    </tr>
                    <tr>
                      <td><? echo $play['nome']; ?></td>
                    </tr>


                    <tr>
                      <td><b>Visualisar Perfil </b></td>
                    </tr>
                    <tr>
                      <td><a href="javascript:;" onclick ="Load ('?sexy=plPerfil&amp;id=<? echo $play['id']; ?>','conteudo','GET');">Clique Aqui !</a></td>
                    </tr>
                  </table>
                  <?
							}
						?>
                  &nbsp;</div></td>
          </tr>
        </table>
      </div> </div>
	  <div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Parceiros</p>
      </div>
      <div style="padding:5px;"><?php include ('Fail/Includes/Parceiros.php'); ?></div></div>
    </div>
</div>
</div>
</body>
</html>
<? } ?>