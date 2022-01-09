<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?>
    <div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Hor&aacute;rios</p>
      </div>
<div style="padding: 10px;"><?php
$resultado = mysql_query("SELECT*FROM programacao");
while($play = mysql_fetch_assoc($resultado)){
$zeroseg   = $play['zeroseg'];
$zeroter   = $play['zeroter'];
$zeroqua   = $play['zeroqua'];
$zeroqui   = $play['zeroqui'];
$zerosex   = $play['zerosex'];
$zerosab   = $play['zerosab'];
$zerodom   = $play['zerodom'];
$duasseg   = $play['duasseg'];
$duaster   = $play['duaster'];
$duasqua   = $play['duasqua'];
$duasqui   = $play['duasqui'];
$duassex   = $play['duassex'];
$duassab   = $play['duassab'];
$duasdom   = $play['duasdom'];
$quatroseg   = $play['quatroseg'];
$quatroter   = $play['quatroter'];
$quatroqua   = $play['quatroqua'];
$quatroqui   = $play['quatroqui'];
$quatrosex   = $play['quatrosex'];
$quatrosab   = $play['quatrosab'];
$quatrodom   = $play['quatrodom'];
$seisseg   = $play['seisseg'];
$seister   = $play['seister'];
$seisqua   = $play['seisqua'];
$seisqui   = $play['seisqui'];
$seissex   = $play['seissex'];
$seissab   = $play['seissab'];
$seisdom   = $play['seisdom'];
$oitoseg   = $play['oitoseg'];
$oitoter   = $play['oitoter'];
$oitoqua   = $play['oitoqua'];
$oitoqui   = $play['oitoqui'];
$oitosex   = $play['oitosex'];
$oitosab   = $play['oitosab'];
$oitodom   = $play['oitodom'];
$dezseg   = $play['dezseg'];
$dezter   = $play['dezter'];
$dezqua   = $play['dezqua'];
$dezqui   = $play['dezqui'];
$dezsex   = $play['dezsex'];
$dezsab   = $play['dezsab'];
$dezdom   = $play['dezdom'];
$dozeseg   = $play['dozeseg'];
$dozeter   = $play['dozeter'];
$dozequa   = $play['dozequa'];
$dozequi   = $play['dozequi'];
$dozesex   = $play['dozesex'];
$dozesab   = $play['dozesab'];
$dozedom   = $play['dozedom'];
$quatorzeseg   = $play['quatorzeseg'];
$quatorzeter   = $play['quatorzeter'];
$quatorzequa   = $play['quatorzequa'];
$quatorzequi   = $play['quatorzequi'];
$quatorzesex   = $play['quatorzesex'];
$quatorzesab   = $play['quatorzesab'];
$quatorzedom   = $play['quatorzedom'];
$dezeseisseg   = $play['dezeseisseg'];
$dezeseister   = $play['dezeseister'];
$dezeseisqua   = $play['dezeseisqua'];
$dezeseisqui   = $play['dezeseisqui'];
$dezeseissex   = $play['dezeseissex'];
$dezeseissab   = $play['dezeseissab'];
$dezeseisdom   = $play['dezeseisdom'];
$dezoitoseg   = $play['dezoitoseg'];
$dezoitoter   = $play['dezoitoter'];
$dezoitoqua   = $play['dezoitoqua'];
$dezoitoqui   = $play['dezoitoqui'];
$dezoitosex   = $play['dezoitosex'];
$dezoitosab   = $play['dezoitosab'];
$dezoitodom   = $play['dezoitodom'];
$vinteseg   = $play['vinteseg'];
$vinteter   = $play['vinteter'];
$vintequa   = $play['vintequa'];
$vintequi   = $play['vintequi'];
$vintesex   = $play['vintesex'];
$vintesab   = $play['vintesab'];
$vintedom   = $play['vintedom'];
$vinteduasseg   = $play['vinteduasseg'];
$vinteduaster   = $play['vinteduaster'];
$vinteduasqua   = $play['vinteduasqua'];
$vinteduasqui   = $play['vinteduasqui'];
$vinteduassex   = $play['vinteduassex'];
$vinteduassab   = $play['vinteduassab'];
$vinteduasdom   = $play['vinteduasdom'];
}
?>
  <table width='560' height='342' border='0' align='center'>
    <tr>
      <td width='35' height='14'><div align='center'><strong>Hora</strong></div></td>
      <td width='72' align='center'><strong>SEGUNDA
          </strong>
    </div></td>
      <td width='72' align='center'><strong>TER&Ccedil;A</strong>
        </div></td>
      <td width='73' align='center'><strong>QUARTA</strong>        </div></td>
      <td width='73' align='center'><strong>QUINTA
        </div>
      </strong></td>
      <td width='74' align='center'><strong>SEXTA
        </div>
      </strong></td>
      <td width='73' align='center'><strong>SABADO
        </div>
      </strong></td>
      <td width='74' align='center'><strong>DOMINGO
        </div>
      </strong></td>
    </tr>
    <tr>
      <td><div align='center'><strong>00:00</strong></div></td>
      <td><div align='center'>
        <? echo $zeroseg ?>
        <br />
      </div></td>
      <td><div align='center'>
       <? echo $zeroter ?>
      </div></td>
      <td><div align='center'>
        <? echo $zeroqua ?>
      </div></td>
      <td><div align='center'>
        <? echo $zeroqui ?>
      </div></td>
      <td><div align='center'>
        <? echo $zerosex ?>
      </div></td>
      <td><div align='center'>
        <? echo $zerosab ?>
      </div></td>
      <td><div align='center'>
        <? echo $zerodom ?>
        <? echo $zeroprodom ?>
      </div></td>
    </tr>
    <tr>
      <td><div align='center'><strong>02:00</strong></div></td>
      <td><div align='center'>
        <? echo $duasseg ?>
        <br />
          <? echo $duasproseg ?>
      </div></td>
      <td><div align='center'>
        <? echo $duaster ?>
         <? echo $duasproter ?>
      </div></td>
      <td><div align='center'>
        <? echo $duasqua ?>
         <? echo $duasproqua ?>
      </div></td>
      <td><div align='center'>
       <? echo $duasqui ?>
 <? echo $duasproqui ?>
      </div></td>
      <td><div align='center'>
        <? echo $duassex ?>
         <? echo $duasprosex ?>
      </div></td>
      <td><div align='center'>
        <? echo $duassab ?>
          <? echo $duasprosab ?>
      </div></td>
      <td><div align='center'>
        <? echo $duasdom ?>
         <? echo $duasprodom ?>
      </div></td>
    </tr>
    <tr>
      <td><div align='center'><strong>04:00</strong></div></td>
      <td><div align='center'>
        <? echo $quatroseg ?>
        <br />
          <? echo $quatroproseg ?>
      </div></td>
      <td><div align='center'>
        <? echo $quatroter ?>
          <? echo $quatroproter ?>
      </div></td>
      <td><div align='center'>
        <? echo $quatroqua ?>
          <? echo $quatroproqua ?>
      </div></td>
      <td><div align='center'>
        <? echo $quatroqui ?>
         <? echo $quatroproqui ?>
      </div></td>
      <td><div align='center'>
        <? echo $quatrosex ?>
          <? echo $quatroprosex ?>
      </div></td>
      <td><div align='center'>
        <? echo $quatrosab ?>
         <? echo $quatroprosab ?>
      </div></td>
      <td><div align='center'>
       <? echo $quatrodom ?>
          <? echo $quatroprodom ?>
      </div></td>
    </tr>
    <tr>
      <td><div align='center'><strong>06:00</strong></div></td>
      <td><div align='center'>
        <? echo $seisseg ?>
        <br />
         <? echo $seisproseg ?>
      </div></td>
      <td><div align='center'>
        <? echo $seister ?>
        <? echo $seisproter ?>
      </div></td>
      <td><div align='center'>
       <? echo $seisqua ?>
        <? echo $seisproqua ?>
      </div></td>
      <td><div align='center'>
        <? echo $seisqui ?>
          <? echo $seisproqui ?>
      </div></td>
      <td><div align='center'>
        <? echo $seissex ?>
         <? echo $seisprosex ?>
      </div></td>
      <td><div align='center'>
        <? echo $seissab ?>
          <? echo $seisprosab ?>
      </div></td>
      <td><div align='center'>
        <? echo $seisdom ?>
        <? echo $seisprodom ?>
      </div></td>
    </tr>
    <tr>
      <td><div align='center'><strong>08:00</strong></div></td>
      <td><div align='center'>
        <? echo $oitoseg ?>
        <br />
          <? echo $oitoproseg ?>
      </div></td>
      <td><div align='center'>
        <? echo $oitoter ?>
         <? echo $oitoproter ?>
      </div></td>
      <td><div align='center'>
        <? echo $oitoqua ?>
          <? echo $oitoproqua ?>
      </div></td>
      <td><div align='center'>
        <? echo $oitoqui ?>
         <? echo $oitoproqui ?>
      </div></td>
      <td><div align='center'>
        <? echo $oitosex ?>
        <? echo $oitoprosex ?>
      </div></td>
      <td><div align='center'>
        <? echo $oitosab ?>
         <? echo $oitoprosab ?>
      </div></td>
      <td><div align='center'>
        <? echo $oitodom ?>
          <? echo $oitoprodom ?>
      </div></td>
    </tr>
    <tr>
      <td><div align='center'><strong>10:00</strong></div></td>
      <td><div align='center'>
        <? echo $dezseg ?>
        <br />
         <? echo $dezproseg ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezter ?>
         <? echo $dezproter ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezqua ?>
        <? echo $dezproqua ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezqui ?>
        <? echo $dezproqui ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezsex ?>
         <? echo $dezprosex ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezsab ?>
        <? echo $dezprosab ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezdom ?>
        <? echo $dezprodom ?>
      </div></td>
    </tr>
    <tr>
      <td height='21'><div align='center'><strong>12:00</strong></div></td>
      <td><div align='center'>
        <? echo $dozeseg ?>
        <br />
        <? echo $dozeproseg ?>
      </div></td>
      <td><div align='center'>
       <? echo $dozeter ?>
       <? echo $dozeproter ?>
      </div></td>
      <td><div align='center'>
       <? echo $dozequa ?>
       <? echo $dozeproqua ?>
      </div></td>
      <td><div align='center'>
       <? echo $dozequi ?>
       <? echo $dozeproqui ?>
      </div></td>
      <td><div align='center'>
       <? echo $dozesex ?>
       <? echo $dozeprosex ?>
      </div></td>
      <td><div align='center'>
       <? echo $dozesab ?>
       <? echo $dozeprosab ?>
      </div></td>
      <td><div align='center'>
       <? echo $dozedom ?>
       <? echo $dozeprodom ?>
      </div></td>
    </tr>
    <tr>
      <td height='21'><div align='center'><strong>14:00</strong></div></td>
      <td><div align='center'>
        <? echo $quatorzeseg ?>
        <br />
         <? echo $quatorzeproseg ?>
      </div></td>
      <td><div align='center'>
        <? echo $quatorzeter ?>
        <? echo $quatorzeproter ?>
      </div></td>
      <td><div align='center'>
        <? echo $quatorzequa ?>
        <? echo $quatorzeproqua ?>
      </div></td>
      <td><div align='center'>
        <? echo $quatorzequi ?>
        <? echo $quatorzeproqui ?>
      </div></td>
      <td><div align='center'>
       <? echo $quatorzesex ?>
       <? echo $quatorzeprosex ?>
      </div></td>
      <td><div align='center'>
       <? echo $quatorzesab ?>
       <? echo $quatorzeprosab ?>
      </div></td>
      <td><div align='center'>
       <? echo $quatorzedom ?>
       <? echo $quatorzeprodom ?>
      </div></td>
    </tr>
    <tr>
      <td height='21'><div align='center'><strong>16:00</strong></div></td>
      <td><div align='center'>
       <? echo $dezeseisseg ?>
        <br />
        <? echo $dezeseisproseg ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezeseister ?>
        <? echo $dezeseisproter ?>
      </div></td>
      <td><div align='center'>
       <? echo $dezeseisqua ?>
       <? echo $dezeseisproqua ?>
      </div></td>
      <td><div align='center'>
       <? echo $dezeseisqui ?>
       <? echo $dezeseisproqui ?>
      </div></td>
      <td><div align='center'>
      <? echo $dezeseissex ?>
      <? echo $dezeseisprosex ?>
      </div></td>
      <td><div align='center'>
       <? echo $dezeseissab ?>
       <? echo $dezeseisprosab ?>
      </div></td>
      <td><div align='center'>
       <? echo $dezeseisdom ?>
       <? echo $dezeseisprodom ?>
      </div></td>
    </tr>
    <tr>
      <td height='21'><div align='center'><strong>18:00</strong></div></td>
      <td><div align='center'>
        <? echo $dezoitoseg ?>
        <br />
        <? echo $dezoitoproseg ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezoitoter ?>
        <? echo $dezoitoproter ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezoitoqua ?>
        <? echo $dezoitoproqua ?>
      </div></td>
      <td><div align='center'>
       <? echo $dezoitoqui ?>
       <? echo $dezoitoproqui ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezoitosex ?>
        <? echo $dezoitoprosex ?>
      </div></td>
      <td><div align='center'>
        <? echo $dezoitosab ?>
        <? echo $dezoitoprosab ?>
      </div></td>
      <td><div align='center'>
       <? echo $dezoitodom ?>
       <? echo $dezoitoprodom ?>
      </div></td>
    </tr>
    <tr>
      <td height='21'><div align='center'><strong>20:00</strong></div></td>
      <td><div align='center'>
       <? echo $vinteseg ?>
        <br />
       <? echo $vinteproseg ?>
      </div></td>
      <td><div align='center'>
       <? echo $vinteter ?>
       <? echo $vinteproter ?>
      </div></td>
      <td><div align='center'>
       <? echo $vintequa ?>
       <? echo $vinteproqua ?>
      </div></td>
      <td><div align='center'>
       <? echo $vintequi ?>
        <? echo $vinteproqui ?>
      </div></td>
      <td><div align='center'>
      <? echo $vintesex ?> 
        <? echo $vinteprosex ?>
      </div></td>
      <td><div align='center'>
       <? echo $vintesab ?>
       <? echo $vinteprosab ?>
      </div></td>
      <td><div align='center'>
        <? echo $vintedom ?>
        <? echo $vinteprodom ?>
      </div></td>
    </tr>
    <tr>
      <td height='21'><div align='center'><strong>22:00</strong></div></td>
      <td><div align='center'>
       <? echo $vinteduasseg ?>
        <br 
        <? echo $vinteduasproseg ?>
      </div></td>
      <td><div align='center'>
       <? echo $vinteduaster ?>
       <? echo $vinteduasproter ?>
      </div></td>
      <td><div align='center'>
      <? echo $vinteduasqua ?>
       <? echo $vinteduasproqua ?>
      </div></td>
      <td><div align='center'>
       <? echo $vinteduasqui ?>
        <? echo $vinteduasproqui ?>
      </div></td>
      <td><div align='center'>
       <? echo $vinteduassex ?>
       <? echo $vinteduasprosex ?>
      </div></td>
      <td><div align='center'>
       <? echo $vinteduassab ?>
       <? echo $vinteduasprosab ?>
      </div></td>
      <td><div align='center'>
       <? echo $vinteduasdom ?>
       <? echo $vinteduasprodom ?>
      </div></td>
    </tr>
    <tr> </tr>
    <tr>
      <td colspan="30"  align="center">
          </div>      </td>
    </tr>
  </table>
</div></div>
    </div>
    </div>
    </div>
</body>
</html>
<? } ?>