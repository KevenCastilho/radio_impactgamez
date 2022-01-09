<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Nova M&uacute;sica </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />                
                    <?php
					if($_POST['novo']){
					$musica = $_POST['musica'];
					$artista = $_POST['artista'];
					$fotoo = $_POST['foto'];
					$foto = str_replace("\\","",$fotoo);
					$link = $_POST['link'];
					$video = $_POST['video'];
					if ($musica==NULL|$artista==NULL|$foto==NULL|$link==NULL|$video==NULL){
					echo "<script>location.href='?abrir=pagNovaMusica&msg=erro'</script>";
					}else{
					$query = "INSERT INTO topmusica (musica, artista, foto, link, video) VALUES ('$musica', '$artista','$foto', '$link', '$video')";
					$result  = mysql_query($query) or die ("Erro ao Inserir");
					echo "<script>location.href='?abrir=pagNovaMusica&msg=sucesso'</script>";}}
					?>
					<form id="form1" name="novo" method="post" action="">
						        <table width="800" border="0">
													                                    <tr>
                                    <td><div align="right">Artista:</div></td>
                                    <td><input class="text-input medium-input datepicker" type="text" id="medium-input" name="artista" /></td>
                                  </tr>
                                  <tr>
                                    <td width="99"><div align="right">Música:</div></td>
                                    <td width="1074"><input name="musica" type="text" class="text-input medium-input datepicker" id="musica"/></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right">
                                      <div align="right">Link da Imagem:</div>
                                    </div></td>
                                    <td><input class="text-input medium-input datepicker" type="text" id="foto" name="foto" /></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right">Link Download: </div></td>
                                    <td><input class="text-input medium-input datepicker" type="text" id="medium-input" name="link" /></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right">Video:</div></td>
                                    <td><input class="text-input medium-input datepicker" type="text" id="medium-input" name="video" /></td>
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
				   $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>M&uacute;sica adicionada com sucesso!</div>";}
				   ?>  <? } ?> 