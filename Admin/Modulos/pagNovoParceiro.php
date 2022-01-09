<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Novo Parceiro </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />                
                    <?php
					if($_POST['novo']){
					$nome = $_POST['nome'];
					$url = $_POST['url'];
					$banner = $_POST['banner'];
					if ($nome==NULL|$url==NULL|$banner==NULL){
					echo "<script>location.href='?pagina=pagNovoParceiro&msg=erro'</script>";
					}else{
					$query = "INSERT INTO parceiros (nome, url, banner) VALUES ('$nome', '$url','$banner')";
					$result  = mysql_query($query) or die ("Erro ao Inserir");
					echo "<script>location.href='?abrir=pagNovoParceiro&msg=sucesso'</script>";}}
					?>
					<form id="form1" name="novo" method="post" action="">
						        <table width="800" border="0">
                                  <tr>
                                    <td width="99"><div align="right">Nome:</div></td>
                                    <td width="1074"><input name="nome" type="text" class="text-input small-input" id="nome"/></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right">Site:</div></td>
                                    <td><input name="url" type="text" id="site" class="text-input small-input" /></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right">Link da Imagem:</div></td>
                                    <td><input class="text-input medium-input datepicker" type="text" id="medium-input" name="banner" /></td>
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
				   $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Parceiro adicionado com sucesso!</div>";}
				   ?>   
				   <? } ?>