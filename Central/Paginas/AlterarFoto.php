<?php include ('AutorizaUser.php');?>
<?php
session_start("login_usuario");
if(!($login_usuario AND senha_usuario)) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {
	color: #15729D;
	font-weight: bold;
}
-->
</style>

<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Alterar Foto </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<table width="531" border="0">
  <tr>
    <th width="660" height="98" align="center" valign="top" scope="col"><table width="99%" border="0" cellpadding="0" cellspacing="0">
        <tr></tr>
      </table>
<form method="POST" action="" enctype="multipart/form-data">
  <table width="483" border="0">
    <tr>
      <td align="right">Imagem:</td>
      <td><input name="foto" type="file" id="foto" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="envia" id="button" class="button" value="Enviar" /></td>
      </tr>
  </table>
</form>
</th>
  </tr>
</table>
</div>
<?php
if($_POST['envia']) 
{
$char = stripslashes($_POST['char']);
if(eregi("[^a-zA-Z0-9_@.?][<>[.-.] ]",$nome ) )
{
	die("<div class='warning'>Não use caracteristicas especiais no nome da foto');</div>");
}
else
{
	$config = array();
	$arquivo = isset($_FILES["foto"]) ? $_FILES["foto"] : FALSE;
	$dir = "Fotos/";
	$config["tamanho"] = 1000000;
	$config["largura"] = 1024;
	$config["altura"]  = 1024;
	if($arquivo)
	{ 
        $tamanhos = getimagesize($arquivo["tmp_name"]);
    	if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $arquivo["type"]))
    	{
		echo $arquivo["type"];
			die("<div class='warning'>Formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png. Envie em outro Formato</div>");
			
    	}
    	elseif($arquivo["size"] > $config["tamanho"])
        {
			die("<div class='warning'>Imagem muito grande! Máximo $config[tamanho] bytes. Envie outro arquivo</div>");
        }
        elseif($tamanhos[0] > $config["largura"])
        {
		   die("<div class='warning'>Largura da imagem não deve ultrapassar $config[largura] pixels</div>");
        }
       	elseif($tamanhos[1] > $config["altura"])
        {
			die("<div class='warning'>Altura da imagem não deve ultrapassar $config[altura] pixels</script>");
        }    
		else {
        	preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);
        	$imagem_nome = md5(uniqid(time())) . "." . $ext[1];
    	    $imagem_dir = $dir.$imagem_nome;
			if(move_uploaded_file($arquivo["tmp_name"], $imagem_dir))
			{
$login = $_SESSION["login_usuario"];
				mysql_query("UPDATE usuarios_clube SET foto='".$imagem_nome."' WHERE login='".$login."'");

				echo "<div class='sucess'>Sua foto foi enviada com sucesso!</div>";
        	} 
			else
			{
				die("<div class='warning'>Há Algo errado,Tente novamente</div>");
        	}
    	}
	}
}}?>