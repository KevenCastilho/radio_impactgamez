<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?><div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Seja Parceiro </p>
      </div>
<div style="padding: 10px;"> * Afim de ser parceiro?<br />
  * Quer ter seu site divulgado em nossa p&aacute;gina?</p>
      <p>Isto &eacute; f&aacute;cil!      mande para nosso e-mail os seguintes dados:<br />
        - Nome do site,<br />
        - Banner do seu site,tamanho 120x60,<br />
        - URL (link) do site,<br />
        - Uma breve descri&ccedil;&atilde;o do que seu site tem,<br />
        - Qual a categoria de seu site.</p>
      <p>Mande todos os dados acima corretamente</p>
      <p>O contato serve tanto para Email como para Messenger &quot;MSN&quot;<br />
          <br />
        N&atilde;o      aceitamos sites com de conte&uacute;do:<br />
        - Racista<br />
        - Ofensivo </p>
      <p>Ap&oacute;s      contatar a equipe, aguarde no prazo de 1 a 7 dias &uacute;teis para ser      adicionado em nossa lista. lembrando, todos os dados tem que estar      totalmente corretos para seu site ser aceito.<br />
          <br />
  Obs: Seu      banner estar&aacute; em nosso site ap&oacute;s voc&ecirc; confirmar os dados com      nossa equipe,caso contrario n&atilde;o colocaremos.</p></div>
      </div>
    </div>
    </div>
    </div>
</body>
</html>
<? } ?>