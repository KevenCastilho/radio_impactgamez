<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?><div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Bate Papo </p>
      </div>
  <div style="padding: 10px;">
        <img style="visibility:hidden;width:0px;height:0px;" border=0 width=0 height=0 src="http://c.gigcount.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEzMDU*MjIwNzA2MjQmcHQ9MTMwNTQyMjA5NzkyMSZwPTUzMTUxJmQ9Jmc9MSZvPTI1MzdhMTI2ODk5MjRiMGJhYTJj/YWYxY2Y*N2FjN2Uw.gif" /><embed src="http://www.xatech.com/web_gear/chat/chat.swf" quality="high" width="615" height="405" name="chat" FlashVars="id=210700707&amp;rl=Brazilian" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://xat.com/update_flash.shtml" />
    <br>
      <h3>Regras</h3>
        <ul>
          <li>Nao Floodar,</li>
          <li>Nao Divulgar outros sites que nao sejam parceiras da Radio,</li>
          <li>Nao Desrespeitar os membros do chat.</li>
        </ul>
  </div></div>
    </div>
    </div>
    </div>
</body>
</html>
<? } ?>