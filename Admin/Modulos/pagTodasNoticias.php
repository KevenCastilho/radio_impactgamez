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
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Todas as Notícias</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<?php
					$query = "SELECT * FROM noticias";
					$result = mysql_query($query);
					$play = mysql_num_rows($result);
					if($play <= "0"){
					echo "<div class='atencion'>Nenhuma Not&iacute;cia cadastrada, adicione uma nova not&iacute;cia [ + ]</div>";}
					?>
<table>
					<form action="" method="post">
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox"/></th>
								   <th width="100">T&iacute;tulo</th>
								   <th width="100">Data</th>
								   <th width="100">Postada por</th>
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
									if ($opcoes==NULL){echo "<script>location.href='index.php?abrir=pagTodasNoticias&msg=seleciona'</script>";}
									$query = "DELETE FROM noticias WHERE id in (" . $opcoes_text . ")";
									mysql_query($query) or die(mysql_error());
									echo "<script>location.href='index.php?abrir=pagTodasNoticias&msg=sucesso' OnClick=\"return confirm('Voc&ecirc; tem certeza que vai excluir essa notícia?')\"</script>";
									}
									?>
									</td>
								</tr>
							</tfoot>
							<tbody>
							<?php
							$query = "SELECT * FROM noticias ORDER BY id DESC";
							$result = mysql_query($query);
							while ($play = mysql_fetch_array($result)){
							$titulo = $play["titulo"];
							$data = $play["data"];
							$poster = $play["poster"];
							$id = $play["id"];
							echo " <tr><td><input type='checkbox' name='id[]' value='$id' /></td><td align='center'>$titulo</td><td align='center'>$data</td><td align='center'>$poster</td><td align='center'><a href='index.php?abrir=pagEditNoticia&id=$id' title='Editar'>Editar</a> <a href='index.php?abrir=pagExcluir&acao=Noticia&id=$id' OnClick=\"return confirm('Voc&ecirc; tem certeza que vai excluir essa notícia?')\">Excluir</a></td></tr>";}
							?>
							</tbody>
                         </form>
						</table>
</table>
                    <?php $msg = $_GET['msg']; if($msg=="seleciona"){echo "<div class='warning'>Selecione pelo menos 1 checkbox para excluir uma not&iacute;cia !</div>";}?> 
                    <?php $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Not&iacute;cia exclu&iacute;da com sucesso !</div>";}?>
					<? } ?>