<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<? if($cargo == "Administrador"){ ?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>

<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Todas as M&uacute;sicas </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<?php
					$query = "SELECT * FROM topmusica";
					$result = mysql_query($query);
					$play = mysql_num_rows($result);
					if($play <= "0"){
					echo "<div class='atencion'>Nenhuma M&uacute;sica cadastrada, adicione uma nova m&uacute;sica [ + ]</div>";}
					?>
<table>
					<form action="" method="post">
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox"/></th>
								   <th width="100">Artista</th>
								   <th width="100">M&uacute;sica</th>
								   <th width="100">A&ccedil;&otilde;es</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="6">
                                    <input type="submit" name="deleta" class="button" value="Deletar">
                                    <?php
									if($_POST['deleta']) {
									$opcoes = $_POST['id'];
									$opcoes_text = implode(", ", $opcoes);
									if ($opcoes==NULL){echo "<script>location.href='index.php?abrir=pagTodasMusicas&msg=seleciona'</script>";}
									$query = "DELETE FROM topmusica WHERE id in (" . $opcoes_text . ")";
									mysql_query($query) or die(mysql_error());
									echo "<script>location.href='index.php?abrir=pagTodasMusicas&msg=sucesso' OnClick=\"return confirm('Voc&ecirc; tem certeza que vai excluir essa musica?')\"</script>";
									}
									?>
									</td>
								</tr>
							</tfoot>
							<tbody>
							<?php
							$query = "SELECT * FROM topmusica ORDER BY id DESC";
							$result = mysql_query($query);
							while ($play = mysql_fetch_array($result)){
							$artista = $play["artista"];
							$musica = $play["musica"];
							$id = $play["id"];
							echo " <tr><td><input type='checkbox' name='id[]' value='$id' /></td><td align='center'>$artista</td><td align='center'>$musica</td><td align='center'><a href='index.php?abrir=pagEditMusica&id=$id' title='Editar'>Editar</a> <a href='index.php?abrir=pagExcluir&acao=Musica&id=$id' OnClick=\"return confirm('Voc&ecirc; tem certeza que vai excluir essa notícia?')\">Excluir</a></td></tr>";}
							?>
							</tbody>
                         </form>
						</table>
</table>
                    <?php $msg = $_GET['msg']; if($msg=="seleciona"){echo "<div class='warning'>Selecione pelo menos 1 checkbox para excluir uma música !</div>";}?> 
                    <?php $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>M&uacute;sica exclu&iacute;da com sucesso !</div>";}?>
					<? } ?>