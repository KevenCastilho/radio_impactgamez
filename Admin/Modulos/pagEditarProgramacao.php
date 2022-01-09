<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<? 
$id = $_GET['id'];
$zeroseg = mysql_real_escape_string($_POST['zeroseg']);
$zeroter = mysql_real_escape_string($_POST['zeroter']);
$zeroqua = mysql_real_escape_string($_POST['zeroqua']);
$zeroqui = mysql_real_escape_string($_POST['zeroqui']);
$zerosex = mysql_real_escape_string($_POST['zerosex']);
$zerosab = mysql_real_escape_string($_POST['zerosab']);
$zerodom = mysql_real_escape_string($_POST['zerodom']);
$duasseg = mysql_real_escape_string($_POST['duasseg']);
$duaster = mysql_real_escape_string($_POST['duaster']);
$duasqua = mysql_real_escape_string($_POST['duasqua']);
$duasqui = mysql_real_escape_string($_POST['duasqui']);
$duassex = mysql_real_escape_string($_POST['duassex']);
$duassab = mysql_real_escape_string($_POST['duassab']);
$duasdom = mysql_real_escape_string($_POST['duasdom']);
$quatroseg = mysql_real_escape_string($_POST['quatroseg']);
$quatroter = mysql_real_escape_string($_POST['quatroter']);
$quatroqua = mysql_real_escape_string($_POST['quatroqua']);
$quatroqui = mysql_real_escape_string($_POST['quatroqui']);
$quatrosex = mysql_real_escape_string($_POST['quatrosex']);
$quatrosab = mysql_real_escape_string($_POST['quatrosab']);
$quatrodom = mysql_real_escape_string($_POST['quatrodom']);
$seisseg = mysql_real_escape_string($_POST['seisseg']);
$seister = mysql_real_escape_string($_POST['seister']);
$seisqua = mysql_real_escape_string($_POST['seisqua']);
$seisqui = mysql_real_escape_string($_POST['seisqui']);
$seissex = mysql_real_escape_string($_POST['seissex']);
$seissab = mysql_real_escape_string($_POST['seissab']);
$seisdom = mysql_real_escape_string($_POST['seisdom']);
$oitoseg = mysql_real_escape_string($_POST['oitoseg']);
$oitoter = mysql_real_escape_string($_POST['oitoter']);
$oitoqua = mysql_real_escape_string($_POST['oitoqua']);
$oitoqui = mysql_real_escape_string($_POST['oitoqui']);
$oitosex = mysql_real_escape_string($_POST['oitosex']);
$oitosab = mysql_real_escape_string($_POST['oitosab']);
$oitodom = mysql_real_escape_string($_POST['oitodom']);
$dezseg = mysql_real_escape_string($_POST['dezseg']);
$dezter = mysql_real_escape_string($_POST['dezter']);
$dezqua = mysql_real_escape_string($_POST['dezqua']);
$dezqui = mysql_real_escape_string($_POST['dezqui']);
$dezsex = mysql_real_escape_string($_POST['dezsex']);
$dezsab = mysql_real_escape_string($_POST['dezsab']);
$dezdom = mysql_real_escape_string($_POST['dezdom']);
$dozeseg = mysql_real_escape_string($_POST['dozeseg']);
$dozeter = mysql_real_escape_string($_POST['dozeter']);
$dozequa = mysql_real_escape_string($_POST['dozequa']);
$dozequi = mysql_real_escape_string($_POST['dozequi']);
$dozesex = mysql_real_escape_string($_POST['dozesex']);
$dozesab = mysql_real_escape_string($_POST['dozesab']);
$dozedom = mysql_real_escape_string($_POST['dozedom']);
$quatorzeseg = mysql_real_escape_string($_POST['quatorzeseg']);
$quatorzeter = mysql_real_escape_string($_POST['quatorzeter']);
$quatorzequa = mysql_real_escape_string($_POST['quatorzequa']);
$quatorzequi = mysql_real_escape_string($_POST['quatorzequi']);
$quatorzesex = mysql_real_escape_string($_POST['quatorzesex']);
$quatorzesab = mysql_real_escape_string($_POST['quatorzesab']);
$quatorzedom = mysql_real_escape_string($_POST['quatorzedom']);
$dezeseisseg = mysql_real_escape_string($_POST['dezeseisseg']);
$dezeseister = mysql_real_escape_string($_POST['dezeseister']);
$dezeseisqua = mysql_real_escape_string($_POST['dezeseisqua']);
$dezeseisqui = mysql_real_escape_string($_POST['dezeseisqui']);
$dezeseissex = mysql_real_escape_string($_POST['dezeseissex']);
$dezeseissab = mysql_real_escape_string($_POST['dezeseissab']);
$dezeseisdom = mysql_real_escape_string($_POST['dezeseisdom']);
$dezoitoseg = mysql_real_escape_string($_POST['dezoitoseg']);
$dezoitoter = mysql_real_escape_string($_POST['dezoitoter']);
$dezoitoqua = mysql_real_escape_string($_POST['dezoitoqua']);
$dezoitoqui = mysql_real_escape_string($_POST['dezoitoqui']);
$dezoitosex = mysql_real_escape_string($_POST['dezoitosex']);
$dezoitosab = mysql_real_escape_string($_POST['dezoitosab']);
$dezoitodom = mysql_real_escape_string($_POST['dezoitodom']);
$vinteseg = mysql_real_escape_string($_POST['vinteseg']);
$vinteter = mysql_real_escape_string($_POST['vinteter']);
$vintequa = mysql_real_escape_string($_POST['vintequa']);
$vintequi = mysql_real_escape_string($_POST['vintequi']);
$vintesex = mysql_real_escape_string($_POST['vintesex']);
$vintesab = mysql_real_escape_string($_POST['vintesab']);
$vintedom = mysql_real_escape_string($_POST['vintedom']);
$vinteduasseg = mysql_real_escape_string($_POST['vinteduasseg']);
$vinteduaster = mysql_real_escape_string($_POST['vinteduaster']);
$vinteduasqua = mysql_real_escape_string($_POST['vinteduasqua']);
$vinteduasqui = mysql_real_escape_string($_POST['vinteduasqui']);
$vinteduassex = mysql_real_escape_string($_POST['vinteduassex']);
$vinteduassab = mysql_real_escape_string($_POST['vinteduassab']);
$vinteduasdom = mysql_real_escape_string($_POST['vinteduasdom']);

if($_POST['envia']) {
$query = "UPDATE programacao SET zeroseg='$zeroseg',zeroter='$zeroter',zeroqua='$zeroqua',zeroqui='$zeroqui',zerosex='$zerosex',zerosab='$zerosab',zerodom='$zerodom',duasseg='$duasseg',duaster='$duaster',duasqua='$duasqua',duasqui='$duasqui',duassex='$duassex',duassab='$duassab',duasdom='$duasdom',quatroseg='$quatroseg',quatroter='$quatroter',quatroqua='$quatroqua',quatroqui='$quatroqui',quatrosex='$quatrosex',quatrosab='$quatrosab',quatrodom='$quatrodom',seisseg='$seisseg',seister='$seister',seisqua='$seisqua',seisqui='$seisqui',seissex='$seissex',seissab='$seissab',seisdom='$seisdom',oitoseg='$oitoseg',oitoter='$oitoter',oitoqua='$oitoqua',oitoqui='$oitoqui',oitosex='$oitosex',oitosab='$oitosab',oitodom='$oitodom',dezseg='$dezseg',dezter='$dezter',dezqua='$dezqua',dezqui='$dezqui',dezsex='$dezsex',dezsab='$dezsab',dezdom='$dezdom',dezseg='$dezseg',dezter='$dezter',dezqua='$dezqua',dezqui='$dezqui',dezsex='$dezsex',dezsab='$dezsab',dezdom='$dezdom',dozeseg='$dozeseg',dozeter='$dozeter',dozequa='$dozequa',dozequi='$dozequi',dozesex='$dozesex',dozesab='$dozesab',dozedom='$dozedom',quatorzeseg='$quatorzeseg',quatorzeter='$quatorzeter',quatorzequa='$quatorzequa',quatorzequi='$quatorzequi',quatorzesex='$quatorzesex',quatorzesab='$quatorzesab',quatorzedom='$quatorzedom',dezeseisseg='$dezeseisseg',dezeseister='$dezeseister',dezeseisqua='$dezeseisqua',dezeseisqui='$dezeseisqui',dezeseissex='$dezeseissex',dezeseissab='$dezeseissab',dezeseisdom='$dezeseisdom',dezoitoseg='$dezoitoseg',dezoitoter='$dezoitoter',dezoitoqua='$dezoitoqua',dezoitoqui='$dezoitoqui',dezoitosex='$dezoitosex',dezoitosab='$dezoitosab',dezoitodom='$dezoitodom',vinteseg='$vinteseg',vinteter='$vinteter',vintequa='$vintequa',vintequi='$vintequi',vintesex='$vintesex',vintesab='$vintesab',vintedom='$vintedom',vinteduasseg='$vinteduasseg',vinteduaster='$vinteduaster',vinteduasqua='$vinteduasqua',vinteduasqui='$vinteduasqui',vinteduassex='$vinteduassex',vinteduassab='$vinteduassab',vinteduasdom='$vinteduasdom' WHERE id='$id'";
mysql_query($query) or die(mysql_error());
echo "<script>location.href='index.php?abrir=pagEditarProgramacao&id=$id&msg=sucesso';</script>
";

}
?><div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Editar Programa&ccedil;&atilde;o </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
	<table align="center" border="0" cellpadding="6" cellspacing="0" class="tborder" width="778">
			
				<tr>
<?php
$id = $_GET['id'];
$resultado = mysql_query("SELECT*FROM programacao WHERE id='$id'");
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
<form name="envia" action="index.php?abrir=pagEditarProgramacao&id=<? echo $id ?>" method="post" name="envia">
<center>
<tr> 
 <td colspan="6" class="alt2" align="center">&nbsp;</td>
</tr>

<div align="center"><table width='560' height='342' border='0' align='center'>   

<tr>
<td width='35' height='14'> 
            <div align='center'>Hora</div></td>
          <td width='72' align='center'>SEGUNDA</div></td>
          <td width='72' align='center'>TERÇA</div></td>
          <td width='73' align='center'>QUARTA</div></td>
          <td width='73' align='center'>QUINTA</div></td>
          <td width='74' align='center'>SEXTA</div></td>
          <td width='73' align='center'>SABADO</div></td>
          <td width='74' align='center'>DOMINGO</div></td>
    </tr>
        <tr> 
          <td><div align='center'><strong>00:00</strong></div></td>

          <td><div align='center'><input name='zeroseg' type='text' value='<? echo $zeroseg ?>' /></div></td>
        <td><div align='center'><input name='zeroter' type='text' value='<? echo $zeroter ?>' /></div></td>
          <td><div align='center'><input name='zeroqua' type='text' value='<? echo $zeroqua ?>' /></div></td>
 <td><div align='center'><input name='zeroqui' type='text' value='<? echo $zeroqui ?>' /></div></td>

          <td><div align='center'><input name='zerosex' type='text' value='<? echo $zerosex ?>' /></div></td>
          <td><div align='center'><input name='zerosab' type='text' value='<? echo $zerosab ?>' /></div></td>
          <td><div align='center'><input name='zerodom' type='text' value='<? echo $zerodom ?>' /></div></td>
       </tr>
        <tr> 
          <td><div align='center'><strong>02:00</strong></div></td>
             <td><div align='center'><input name='duasseg' type='text' value='<? echo $duasseg ?>' /></div></td>
        <td><div align='center'><input name='duaster' type='text' value='<? echo $duaster ?>' /></div></td>
          <td><div align='center'><input name='duasqua' type='text' value='<? echo $duasqua ?>' /></div></td>
 <td><div align='center'><input name='duasqui' type='text' value='<? echo $duasqui ?>' /></div></td>

          <td><div align='center'><input name='duassex' type='text' value='<? echo $duassex ?>' /></div></td>
          <td><div align='center'><input name='duassab' type='text' value='<? echo $duassab ?>' /></div></td>
          <td><div align='center'><input name='duasdom' type='text' value='<? echo $duasdom ?>' /></div></td>

        </tr>
        <tr> 
          <td><div align='center'><strong>04:00</strong></div></td>
           <td><div align='center'><input name='quatroseg' type='text' value='<? echo $quatroseg ?>' /></div></td>
        <td><div align='center'><input name='quatroter' type='text' value='<? echo $quatroter ?>' /></div></td>
          <td><div align='center'><input name='quatroqua' type='text' value='<? echo $quatroqua ?>' /></div></td>
 <td><div align='center'><input name='quatroqui' type='text' value='<? echo $quatroqui ?>' /></div></td>

          <td><div align='center'><input name='quatrosex' type='text' value='<? echo $quatrosex ?>' /></div></td>
          <td><div align='center'><input name='quatrosab' type='text' value='<? echo $quatrosab ?>' /></div></td>
          <td><div align='center'><input name='quatrodom' type='text' value='<? echo $quatrodom ?>' /></div></td>
        </tr>
        <tr> 
          <td><div align='center'><strong>06:00</strong></div></td>

            <td><div align='center'><input name='seisseg' type='text' value='<? echo $seisseg ?>' /></div></td>
        <td><div align='center'><input name='seister' type='text' value='<? echo $seister ?>' /></div></td>
          <td><div align='center'><input name='seisqua' type='text' value='<? echo $seisqua ?>' /></div></td>
 <td><div align='center'><input name='seisqui' type='text' value='<? echo $seisqui ?>' /></div></td>

          <td><div align='center'><input name='seissex' type='text' value='<? echo $seissex ?>' /></div></td>
          <td><div align='center'><input name='seissab' type='text' value='<? echo $seissab ?>' /></div></td>
          <td><div align='center'><input name='seisdom' type='text' value='<? echo $seisdom ?>' /></div></td>
        </tr>
        <tr> 
          <td><div align='center'><strong>08:00</strong></div></td>
           <td><div align='center'><input name='oitoseg' type='text' value='<? echo $oitoseg ?>' /></div></td>
        <td><div align='center'><input name='oitoter' type='text' value='<? echo $oitoter ?>' /></div></td>
          <td><div align='center'><input name='oitoqua' type='text' value='<? echo $oitoqua ?>' /></div></td>
 <td><div align='center'><input name='oitoqui' type='text' value='<? echo $oitoqui ?>' /></div></td>

          <td><div align='center'><input name='oitosex' type='text' value='<? echo $oitosex ?>' /></div></td>
          <td><div align='center'><input name='oitosab' type='text' value='<? echo $oitosab ?>' /></div></td>
          <td><div align='center'><input name='oitodom' type='text' value='<? echo $oitodom ?>' /></div></td>
        </tr>
        <tr> 
          <td><div align='center'><strong>10:00</strong></div></td>
            <td><div align='center'><input name='dezseg' type='text' value='<? echo $dezseg ?>' /></div></td>
        <td><div align='center'><input name='dezter' type='text' value='<? echo $dezter ?>' /></div></td>
          <td><div align='center'><input name='dezqua' type='text' value='<? echo $dezqua ?>' /></div></td>
 <td><div align='center'><input name='dezqui' type='text' value='<? echo $dezqui ?>' /></div></td>

          <td><div align='center'><input name='dezsex' type='text' value='<? echo $dezsex ?>' /></div></td>
          <td><div align='center'><input name='dezsab' type='text' value='<? echo $dezsab ?>' /></div></td>
          <td><div align='center'><input name='dezdom' type='text' value='<? echo $dezdom ?>' /></div></td>
        </tr>
        <tr> 
          <td height='21'> <div align='center'><strong>12:00</strong></div></td>

           <td><div align='center'><input name='dozeseg' type='text' value='<? echo $dozeseg ?>' /></div></td>
        <td><div align='center'><input name='dozeter' type='text' value='<? echo $dozeter ?>' /></div></td>
          <td><div align='center'><input name='dozequa' type='text' value='<? echo $dozequa ?>' /></div></td>
 <td><div align='center'><input name='dozequi' type='text' value='<? echo $dozequi ?>' /></div></td>

          <td><div align='center'><input name='dozesex' type='text' value='<? echo $dozesex ?>' /></div></td>
          <td><div align='center'><input name='dozesab' type='text' value='<? echo $dozesab ?>' /></div></td>
          <td><div align='center'><input name='dozedom' type='text' value='<? echo $dozedom ?>' /></div></td>
        </tr>
        <tr> 
          <td height='21'> <div align='center'><strong>14:00</strong></div></td>
            <td><div align='center'><input name='quatorzeseg' type='text' value='<? echo $quatorzeseg ?>' /></div></td>
        <td><div align='center'><input name='quatorzeter' type='text' value='<? echo $quatorzeter ?>' /></div></td>
          <td><div align='center'><input name='quatorzequa' type='text' value='<? echo $quatorzequa ?>' /></div></td>
 <td><div align='center'><input name='quatorzequi' type='text' value='<? echo $quatorzequi ?>' /></div></td>

          <td><div align='center'><input name='quatorzesex' type='text' value='<? echo $quatorzesex ?>' /></div></td>
          <td><div align='center'><input name='quatorzesab' type='text' value='<? echo $quatorzesab ?>' /></div></td>
          <td><div align='center'><input name='quatorzedom' type='text' value='<? echo $quatorzedom ?>' /></div></td>

        </tr>
        <tr> 
          <td height='21'> <div align='center'><strong>16:00</strong></div></td>
            <td><div align='center'><input name='dezeseisseg' type='text' value='<? echo $dezeseisseg ?>' /></div></td>
        <td><div align='center'><input name='dezeseister' type='text' value='<? echo $dezeseister ?>' /></div></td>
          <td><div align='center'><input name='dezeseisqua' type='text' value='<? echo $dezeseisqua ?>' /></div></td>
 <td><div align='center'><input name='dezeseisqui' type='text' value='<? echo $dezeseisqui ?>' /></div></td>

          <td><div align='center'><input name='dezeseissex' type='text' value='<? echo $dezeseissex ?>' /></div></td>
          <td><div align='center'><input name='dezeseissab' type='text' value='<? echo $dezeseissab ?>' /></div></td>
          <td><div align='center'><input name='dezeseisdom' type='text' value='<? echo $dezeseisdom ?>' /></div></td>
        </tr>
        <tr> 
          <td height='21'> <div align='center'><strong>18:00</strong></div></td>
  <td><div align='center'><input name='dezoitoseg' type='text' value='<? echo $dezoitoseg ?>' /></div></td>
        <td><div align='center'><input name='dezoitoter' type='text' value='<? echo $dezoitoter ?>' /></div></td>
          <td><div align='center'><input name='dezoitoqua' type='text' value='<? echo $dezoitoqua ?>' /></div></td>
 <td><div align='center'><input name='dezoitoqui' type='text' value='<? echo $dezoitoqui ?>' /></div></td>

          <td><div align='center'><input name='dezoitosex' type='text' value='<? echo $dezoitosex ?>' /></div></td>
          <td><div align='center'><input name='dezoitosab' type='text' value='<? echo $dezoitosab ?>' /></div></td>
          <td><div align='center'><input name='dezoitodom' type='text' value='<? echo $dezoitodom ?>' /></div></td>
          
        </tr>
        <tr> 
          <td height='21'> <div align='center'><strong>20:00</strong></div></td>
            <td><div align='center'><input name='vinteseg' type='text' value='<? echo $vinteseg ?>' /></div></td>
        <td><div align='center'><input name='vinteter' type='text' value='<? echo $vinteter ?>' /></div></td>
          <td><div align='center'><input name='vintequa' type='text' value='<? echo $vintequa ?>' /></div></td>
 <td><div align='center'><input name='vintequi' type='text' value='<? echo $vintequi ?>' /></div></td>

          <td><div align='center'><input name='vintesex' type='text' value='<? echo $vintesex ?>' /></div></td>
          <td><div align='center'><input name='vintesab' type='text' value='<? echo $vintesab ?>' /></div></td>
          <td><div align='center'><input name='vintedom' type='text' value='<? echo $vintedom ?>' /></div></td>
    </tr>
        <tr> 
          <td height='21'> <div align='center'><strong>22:00</strong></div></td>
            <td><div align='center'><input name='vinteduasseg' type='text' value='<? echo $vinteduasseg ?>' /></div></td>
        <td><div align='center'><input name='vinteduaster' type='text' value='<? echo $vinteduaster ?>' /></div></td>
          <td><div align='center'><input name='vinteduasqua' type='text' value='<? echo $vinteduasqua ?>' /></div></td>
 <td><div align='center'><input name='vinteduasqui' type='text' value='<? echo $vinteduasqui ?>' /></div></td>

          <td><div align='center'><input name='vinteduassex' type='text' value='<? echo $vinteduassex ?>' /></div></td>
          <td><div align='center'><input name='vinteduassab' type='text' value='<? echo $vinteduassab ?>' /></div></td>
          <td><div align='center'><input name='vinteduasdom' type='text' value='<? echo $vinteduasdom ?>' /></div></td>
        </tr>
        <tr> 
         
         
     <tr>
     <td colspan="30"  align="center">
     <input name="envia" class="button" type="submit" value="Editar" /></div>
    </tr>
  </table>
</form></div>
                   <?php
				   $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Programação Alterada Com Sucesso!</div>";}
				   ?>  <? } ?>