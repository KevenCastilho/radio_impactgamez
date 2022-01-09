<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style><div align="center">
  <?php
foreach ($_REQUEST as $___opt => $___val) {
 $$___opt = $___val;
}
if(empty($vai)) {
include("play.php");
}
elseif(substr($vai, 0, 4)=='http' or substr($vai,
0, 1)=="/" or substr($vai, 0, 1)==".")
{
echo '<br><font face=arial size=11px><br><b>A p&aacute;gina n&atilde;o existe.</b><br>Por favor selecione uma p&aacute;gina a partir do Menu Principal.</font>';
}
else {
include("$vai.php");
}
			?>
</div>
