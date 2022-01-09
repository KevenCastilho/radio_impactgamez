<?php include ('AutorizaUser.php');?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<?php
$sql = "SELECT * FROM pedidos order by hora DESC";
$query = mysql_query("$sql") or die(mysql_error());

$sql2 = "SELECT * FROM usuarios order by id ASC";
$query2 = mysql_query("$sql2") or die(mysql_error());

$sql3 = "SELECT * FROM formulario";
$query3 = mysql_query("$sql3") or die(mysql_error());
$dados3 = mysql_fetch_assoc($query3);
?>
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
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Pedidos</h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
<br />
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="index.php?abrir=pagPedid0s" method="post">
      <label for="online">&nbsp;&nbsp;Pedidos</label>
      <select name="online" id="online">
        <option value="<?php $dados3["online"];?>" disabled="disabled" selected="selected">Selecione</option>
        <option value="1">Online</option>
        <option value="2">Offline</option>
      </select>
      <input type="submit" class="button" name="Alterar" id="Alterar" value="Alterar" />
    </form>
    <br />
    &nbsp;&nbsp;Status atual:
    <?php if($dados3["online"] == 1){ ?>
    <font color="#009900">Online</font>
    <? }else{?>
    <font color="#FF0000">Offline</font>
    <? }?>
    <table>
      <form action="" method="post">
        <thead>
          <tr>
            <th width="20"><input name="checkbox" type="checkbox" class="check-all"/></th>
            <th width="100">Nome</th>
            <th width="100">Email</th>
			<th width="100">Cidade/Estado</th>
			<th width="49">Data</th>
			<th width="51">Hora</th>
            <th width="553">Pedido/Recado</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <td colspan="6"><input type="submit" name="deleta" class="button" value="Deletar" />
                <?php
									if($_POST['deleta']) {
									$opcoes = $_POST['id'];
									$opcoes_text = implode(", ", $opcoes);
									if ($opcoes==NULL){echo "<script>location.href='index.php?abrir=pagPedidos&msg=seleciona'</script>";}
									$query = "DELETE FROM pedidos WHERE id in (" . $opcoes_text . ")";
									mysql_query($query) or die(mysql_error());
									echo "<script>location.href='index.php?abrir=pagPedidos&msg=sucesso'\"</script>";
									}
									?>
            </td>
          </tr>
        </tfoot>
        <tbody>
          <?php
							$query = "SELECT * FROM pedidos ORDER BY id DESC";
							$result = mysql_query($query);
							while ($play = mysql_fetch_array($result)){
							$nome = $play["nome"];
							$data = $play["data"];
							$email = $play["email"];
							$hora = $play["hora"];
							$cidade = $play["cidade"];
							$pedido = $play["pedido"];
							$id = $play["id"];
							echo " <tr><td><input type='checkbox' name='id[]' value='$id' /></td><td align='center'>$nome</td><td align='center'>$email</td><td align='center'>$cidade</td><td align='center'>$data</td><td align='center'>$hora</td><td align='center'>$pedido</td></tr>";}
							?>
        </tbody>
      </form>
    </table>
    <?php $msg = $_GET['msg']; if($msg=="seleciona"){echo "<div class='warning'>Selecione pelo menos 1 checkbox para excluir um pedido !</div>";}?>
    <?php $msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Pedido exclu&iacute;do com sucesso !</div>";}?>
</div>
</div>