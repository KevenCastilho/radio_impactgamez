<style>
.tt{border:1px solid #CCC;}
</style>
<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?><?php
require_once("Fail/Settings.php");
$id = $_GET["id"];
$query = "SELECT * FROM topmusica WHERE id='$id'";
$result = mysql_query($query);
while($play = mysql_fetch_array($result)){
$musica = $play["musica"];
$artista = $play["artista"];
$foto = $play["foto"];
$link = $play["link"];
$id = $play['id'];
$video = $play["video"];
?><div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Musica <strong>
          <?=$musica;?>
        </strong><strong></strong></p>
  </div>
<div style="padding: 10px;">
  <table width='485' border='0' align='center' cellspacing='4'>
    <tr>
      <td colspan='2' class='tt'><div align="center" id="semfoto"><img src='<?=$foto;?>' width='490' height='200' /></div></td>
    </tr>
    <tr>
      <td width='194' class='tt'><span class='text3'>Artista: </span><span class='phpinfo'><strong>
        <?=$artista;?>
      </strong></span></td>
      <td width='285' class='tt'><span class='text3'>Musica: </span><span class='phpinfo'><strong>
        <?=$musica;?>
      </strong></span></td>
    </tr>
    <tr>
      <td class='tt'>Link do Video: <strong><a target="_blank" href="<?=$video;?>">Clique Aqui !</a></strong></td>
      <td class='tt'><span class='text3'>Download: <strong><a target="_blank" href="<?=$link;?>">Clique Aqui !</a></strong></span></td>
    </tr>
  </table>
</div></div>
    </div>
    </div>
    </div>
</body>
</html>
<? }} ?>