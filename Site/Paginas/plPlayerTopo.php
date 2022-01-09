<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?><div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Player Topo </p>
      </div>
  <div style="padding: 10px;"> Tenha hoje mesmo nossa r&aacute;dio em seu site,<br />
          <br />
        Para isso leia as instru&ccedil;&atilde;o abaixo:
        
        Renomeie o arquivo principal do seu website (normalmente <b>index.php</b> ou <strong>index.html</strong>) para um outro nome qualquer (como <b>index2.php </b>ou<b> <strong>index2.html</strong></b>),<br />
  <br />
        Em seguida, preencha corretamente o formul&aacute;rio abaixo, e clique no bot&atilde;o gerar c&oacute;digo.<br />
  <br>
  <b>ATEN&Ccedil;&Atilde;O:</b> O campo &quot;Link do conteudo do seu site&quot; precisa indicar o local correto do novo nome do arquivo (como http://seusite.com/<b>index2.php </b>ou<b> <strong>index2.html</strong></b>)<br />
  <br />
        Ap&oacute;s isso, copie o c&oacute;digo gerado e coloque-o dentro de um arquivo chamado <b>index.php</b> ou <strong>index.html</strong>, e pronto!
        <br /><br />
        Se o Seu f&ocirc;r Blog,Pegue o c&oacute;digo embaixo do Codigo do Player no nosso Player em Box,
        <form name="formu" action="Player.php" target="centro" method="post">
<input type="hidden" value="1" name="flag"/>
<input type="hidden" value="" name="id"/>
        <table cellpadding="1" cellspacing="1" border="0" width="100%">
          <tr>
            <td align="center" class="Titulo">Informe os dados de seu site para gerar o c&oacute;digo da barra.</td>
          </tr>
          <tr>
            <td width="200"><b>Titulo da p&aacute;gina:</b></td>
          </tr>
          <tr>
            <td><input type="text" name="Nome" size="75" id="Nome" /></td>
          </tr>
          <tr>
            <td width="200"><b>Tema:</b></td>
          </tr>
		          <tr>
            <td width="200"><b>Link do conte&uacute;do do seu site:</b></td>
          </tr>
          <tr>
            <td><input type="text" name="Site" size="75" value="http://" id="Link" /></td>
          </tr>
		  <tr>
            <td width="200" valign="top"><b>Instru&ccedil;&atilde;o:</b></td>
          </tr>
          <tr>
            <td>
                Preencha todos os campos acima, e em seguida clique em &quot;Gerar Player&quot;           </td>
          </tr>
          <tr>
            <td colspan="2" class="Fim" align="center"><input type="submit" class="button" value="Gerar Player" />            </td>
          </tr>
        </table>
    </form>
</di></div>
    </div>
    <div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Codigo do Player</p>
      </div>
      <div style="padding:5px;">
    <iframe src="" name="centro" width="640" height="80" frameborder="0" id="centro"></iframe></div></div>
	</body>
</html>
<? } ?>