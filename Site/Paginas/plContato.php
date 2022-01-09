<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?><div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Contato</p>
      </div>
<div style="padding: 10px;">      <?php
	$sz = mysql_fetch_array(mysql_query("SELECT conteudo FROM paginas where pagina='Contato'"));
	?>
	<?=$sz[0]?></div></div>
    </div>
    </div>
    </div>
</body>
</html>
<? } ?>