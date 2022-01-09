<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<?php
$resultado = mysql_query("SELECT*FROM configs");
$linhas = mysql_num_rows($resultado);
while ($play = mysql_fetch_array($resultado)){
$ipp = $play["ip"];
$portt = $play["port"];
$nomeradio = $play["nomeradio"];
?>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Inicio</h3>
      </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p>
<div align="center"><br />
  Ol&aacute;,Seja bem vindo(a) ao PAINEL ADMINISTR&Aacute;VEL Vers&atilde;o 1.0,Fa&ccedil;a bom uso do nosso sistema com modera&ccedil;&atilde;o.<br />
  <br />
</div>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Informa&ccedil;&otilde;es Do Site </h3>
      </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
&nbsp;&raquo;&nbsp;Locutor Online<font color="#15729D">
<? $select = file_get_contents('Funcoes/Alt.txt');
   $resultado = mysql_query('SELECT * FROM usuarios WHERE ID=' . $select);
   while($edition = mysql_fetch_array($resultado)) {
   $nick = $edition['nick']; ?>
[ <? echo $edition['nick']; ?> ]</font><br />
&nbsp;&raquo;&nbsp;Status dos Pedidos<font color="#15729D">
<? $sql3 = "SELECT * FROM formulario";
$query3 = mysql_query("$sql3") or die(mysql_error());
$dados3 = mysql_fetch_assoc($query3); ?>
[     <?php if($dados3["online"] == 1){ ?>
    <font color="#418900">Ativado</font>
    <? }else{?>
    <font color="#FF0000">Desativado</font>
    <? }?> ]</font><br />
&nbsp;&raquo;&nbsp;M&uacute;sica Tocando   <font color="#15729D">[
<?php
	$ip = "$ipp";
	$port = "$portt";
	$fp = @fsockopen($ip,$port,$errno,$errstr,1);
	if (!$fp) 
	{$title = "<font color=red>Offline</font>  ";} 
	else{ fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n"); while (!feof($fp)) {$info = fgets($fp);}
	$info = str_replace('</body></html>', "", $info);
	$split = explode(',', $info);
	if (empty($split[6]) ){$title = "A música atual não está disponível";}
	else {$count = count($split);$i = "6";while($i<=$count){if ($i > 6){$title .= ", " . $split[$i];} else {$title .= $split[$i];}$i++;} } }
	$title = substr($title, 0, -2);
	echo $title;
   ?> ]</font><br />
&nbsp;&raquo;&nbsp;Status da R&aacute;dio <font color="#15729D">[
<?php
	$online = "<font color='#418900'>Online</font>";
	$offline = "<font color='#FF00'>Offline</font>";
	$ipp = "$ip";
	$portt = "$port";
	$fp = @fsockopen($ipp,$portt,$errno,$errstr,1);if (!$fp) { $status = $offline;} else{ fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");
	while (!feof($fp)) {$info = fgets($fp);}$split = explode(',', $info);if ($split[1] == "0" ){$status = $offline;}else{$status = $online;}}echo $status;
	?> 
 ]</font><br />&nbsp;&raquo;&nbsp;Cor do Site<font color="#15729D">
<? $select = file_get_contents('../Site/Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['nome'];?>
[ <? echo $tema['nome']; ?> ]</font><br />
<br />
<? if($cargo == "Administrador"){ ?><div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Informa&ccedil;&otilde;es Do Banco de Dados </h3>
      </blockquote>
    </div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
&nbsp;&raquo;&nbsp;Administradores e Locutores Cadastrados <font color="#15729D">[ 	<?php
	$query = mysql_query("SELECT * FROM usuarios") or die("Erro");
	$edition = mysql_num_rows($query);
	echo($edition);
	?> ]</font><br />
						&nbsp;&raquo;&nbsp;Total de M&uacute;sicas Cadastradas no Top Musica <font color="#15729D">[ 	<?php
	$query = mysql_query("SELECT * FROM topmusica") or die("Erro");
	$edition = mysql_num_rows($query);
	echo($edition);
	?> ]</font><br />
                        &nbsp;&raquo;&nbsp;Total de Parceiros Cadastrados <font color="#15729D">[ <?php
	$query = mysql_query("SELECT * FROM parceiros") or die("Erro");
	$edition = mysql_num_rows($query);
	echo($edition);
	?> ]</font><br />
						&nbsp;&raquo;&nbsp;Total de Publicidades Cadastradas <font color="#15729D">[ 	<?php
	$query = mysql_query("SELECT * FROM publicidade") or die("Erro");
	$edition = mysql_num_rows($query);
	echo($edition);
	?> ]</font>  <br />
                        &nbsp;&raquo;&nbsp;Total de Not&iacute;cias Cadastradas <font color="#15729D">[ 	<?php
	$query = mysql_query("SELECT * FROM noticias") or die("Erro");
	$edition = mysql_num_rows($query);
	echo($edition);
	?> ]</font><br />
                        &nbsp;&raquo;&nbsp;Total de Usu&aacute;rios Cadastrados no Clube <font color="#15729D">[ 	<?php
	$query = mysql_query("SELECT * FROM usuarios_clube") or die("Erro");
	$edition = mysql_num_rows($query);
	echo($edition);
	?> ]</font> 
	<? } ?><br />
<br /><div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Dados do Desenvolvedor </h3>
      </blockquote>
    </div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
&nbsp;&raquo;&nbsp;Desenvolvedor do Sistema  <font color="#15729D">[
   Angelus Inferni (Killer Dark)
]</font><br />
&nbsp;&raquo;&nbsp;Localiza&ccedil;&atilde;o <font color="#15729D">[
São Paulo/SP
]</font><br />
&nbsp;&raquo;&nbsp;Telefone para Contato <font color="#15729D">[
(13)981236670
]</font><br />
&nbsp;&raquo; Contato via MSN <font color="#15729D">[
angelusinferni@live.com
]</font><br />
&nbsp;&raquo;&nbsp;Painel Licenciado para <font color="#15729D">[ <? echo"$nomeradio" ?> ]</font><br />  
	<? }}} ?>