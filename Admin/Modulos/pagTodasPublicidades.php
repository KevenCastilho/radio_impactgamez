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
.style2 {	color: #666666;
	font-weight: bold;
}
-->
</style>

<div align="left">
      <blockquote>
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Todas Publicidades</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<?php
					$query = "SELECT * FROM publicidade";
					$result = mysql_query($query);
					$play = mysql_num_rows($result);
					if($play <= "0"){
					echo "<div class='atencion'>Nenhuma Publicidade cadastrada, adicione uma nova publicidade [ + ]</div>";}
					?>
    <table>
      <form action="" method="post">
        <thead>
          <tr>
            <th><input name="checkbox" type="checkbox" class="check-all"/></th>
            <th width="100">Nome</th>
            <th width="100">Site</th>
			<th width="100">Imagem</th>
			<th width="100">A&ccedil;&otilde;es</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <td colspan="6"><input type="submit" name="deleta" class="button" value="Deletar" />
                <?php
									if($_POST['deleta']) {
									$opcoes = $_POST['id'];
									$opcoes_text = implode(", ", $opcoes);
									if ($opcoes==NULL){echo "<script>location.href='index.php?abrir=pagTodasPublicidades&msg=seleciona'</script>";}
									$query = "DELETE FROM publicidade WHERE id in (" . $opcoes_text . ")";
									mysql_query($query) or die(mysql_error());
									echo "<script>location.href='index.php?abrir=pagTodasPublicidades&msg=sucesso' OnClick=\"return confirm('Voc&ecirc; tem certeza que vai excluir esse parceiro?;')\"</script>";
									}
									?>            </td>
          </tr>
        </tfoot>
        <tbody>
          <?php
							$query = "SELECT * FROM publicidade ORDER BY id DESC";
							$result = mysql_query($query);
							while ($play = mysql_fetch_array($result)){
							$nome = $play["nome"];
							$url = $play["url"];
							$banner = $play["banner"];
							$id = $play["id"];
							echo " <tr><td><input type='checkbox' name='id[]' value='$id' /></td><td align='center'>$nome</td><td align='center'>$url</td><td align='center'>$banner</td><td align='center'><a href='index.php?abrir=pagEditPublicidade&id=$id' title='Editar'>Editar</a> <a href='index.php?abrir=pagExcluir&acao=Publicidade&id=$id' OnClick=\"return confirm('Voc&ecirc; tem certeza que vai excluir esse parceiro?')\">Excluir</a></td></tr>";}
							?>
        </tbody>
      </form>
    </table>
    <?php $msg = $_GET['msg']; if($msg=="seleciona"){echo "<div class='warning'>Selecione pelo menos 1 checkbox para excluir um torpedo !</div>";}?>
    <?php $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Publicidade exclu&iacute;da com sucesso !</div>";}?>
</div>
</div>
<? } ?>