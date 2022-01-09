<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Nova Not&iacute;cia</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />                
                    <?php
					if($_POST['novo']){
					$titulo = $_POST['titulo'];
					$conteudo = $_POST['conteudo'];
					$foto = $_POST['foto'];
					$data = $_POST['data'];
					$poster = $_POST['poster'];
					if ($titulo==NULL|$conteudo==NULL|$foto==NULL|$poster==NULL){
					echo "<script>location.href='?abrir=pagNovaNoticia&msg=erro'</script>";
					}else{
					$query = "INSERT INTO noticias (titulo, conteudo, foto, data, poster) VALUES ('$titulo', '$conteudo','$foto', '$data', '$poster')";
					$result  = mysql_query($query) or die ("Erro ao Inserir");
					echo "<script>location.href='?abrir=pagNovaNoticia&msg=sucesso'</script>";}}
					?>
					<form id="form1" name="novo" method="post" action="">
						        <table width="800" border="0">
                                  <tr>
                                    <td width="99"><div align="right">Titulo:</div></td>
                                    <td width="1074"><input name="titulo" type="text" class="text-input medium-input datepicker" id="titulo"/></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right">Data:</div></td>
                                    <td><select name="data" id="data">
									<option value="<?php $data = date("d/m");echo("$data"); ?>"><?php $data = date("d/m");echo("$data"); ?></option></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right">Link da Imagem:</div></td>
                                    <td><input class="text-input medium-input datepicker" type="text" id="medium-input" name="foto" /></td>
                                  </tr>
							                                  <tr>
                                    <td><div align="right">Postada por:</div></td>
                                    <td><label>
                                      <select name="poster" id="poster">
<?
$resultado = mysql_query("SELECT * FROM usuarios");
while($usuario = mysql_fetch_array($resultado)){
echo '<option value="' . $usuario['nome'] . '">' . $usuario['nome'] . '</option>';}
?>
                                      </select>
                                      </label></td>
                                  </tr>

                                  <tr>
                                    <td><div align="right">Conteudo:</div></td>
                                    <td><textarea class="text-input textarea wysiwyg" id="textarea" name="conteudo" cols="79" rows="15"></textarea></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td><input class="button" type="submit" value="Cadastrar" name="novo" /></td>
                                  </tr>
                                </table>
					</form>
 					</div>
				</div>      <br />
				<?php
				   $msg = $_GET['msg']; if($msg=="erro"){echo "<div class='warning'>Preencha todos os Campos! !</div>";}
				   ?>
                   <?php
				   $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Not&iacute;cia adicionada com sucesso!</div>";}
				   ?>   
				   <? } ?>