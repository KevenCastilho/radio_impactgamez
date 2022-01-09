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
        <h3><span class="style1">&nbsp;&nbsp;&raquo;&nbsp;</span>Todos Os Usuários </h3>
  </blockquote>
</div>
<p style="margin-left:0px;margin-top:0px;width:fffpx;border-bottom:1px dotted #fff;"></p><br />
        <?php
$query = "SELECT * FROM usuarios";
$result = mysql_query($query,$conecta);
while ($play = mysql_fetch_array($result)){
$id = $play["id"];
$nome = $play['nome'];
$nick = $play['nick'];
$foto = $play['foto'];
$msn = $play['msn'];
$programa = $play['programa'];
$cargo = $play['cargo'];
$n = $i+1;
$i++;
?>
<table cellpadding="0" cellspacing="1" border="0">
  <tr>
    <td align="center" width="40">ID</td>
    <td width="38">Nome</td>
    <td width="200" align="center">Cargo</td>
    <td width="200" align="center">Detalhes</td>
    <td width="104" align="center" colspan="2">A&ccedil;&otilde;es</td>
  </tr>
  <tr>
    <td align="center"><?=$play['id'];?></td>
    <td align="center"><?=$play['nome'];?></td>
	<td align="center"><?=$play['cargo'];?></td>
    <td align="center" width="200"><a href="javascript: MostraEsconde('<?=$play['id']?>');" id="MostraEsconde_<?=$play['id']?>"> Mostrar Detalhes </a> </td>
    <td align="center" width="104"><a href="index.php?abrir=pagEditarUser&id=<?php echo $id ?>">Editar</a> <a href="index.php?abrir=pagExcluir&acao=Usuarios&id=<?php echo $id ?>" OnClick="return confirm('<?php echo("Voc&ecirc; tem certeza que vai excluir esse usuário?"); ?>');">Apagar</a>    </td>
  </tr>
  <tr id="Local_<?=$play['id'];?>" style="display:none;">
    <td colspan="6"><table cellpadding="0" cellspacing="1" border="0" width="100%">
      <tr>
        <td  align="center" rowspan="8" width="5"><img src="Imagens/Fotos/<?=$foto?>" width="80" height="130" border="0" title="<? echo"$nome" ?>" /></td>
        <td >Nome: <b><? echo $play['nome']; ?></b></td>
      </tr>
      <tr>
        <td>Nick: <b><? echo $play['nick']; ?></b></td>
      </tr>
      <tr>
        <td>MSN: <b><? echo $play['msn']; ?></b></td>
      </tr>
      <tr>
        <td>Orkut: <b><a href="<? echo $play['orkut']; ?>" target="_blank">Clique aqui</a></b></td>
      </tr>
      <tr>
        <td>Cidade / Estado: <b><? echo $play['cidade']; ?> / <? echo $play['estado']; ?></b></td>
      </tr>
      <tr>
        <td>Programa: <b><? echo $play['programa']; ?></b></td>
      </tr>
	   <tr>
        <td>Usuário: <b><? echo $play['login']; ?></b></td>
      </tr>
      <tr>
        <td>Senha: <b><? echo md5($play['senha']); ?></b></td>
      </tr>
    </table></td>
  </tr>
  <?	
		}
	?>
</table><br />
<?php
$msg = $_GET['msg']; if($msg=="sucesso"){echo "<div class='sucess'>Usuário excluído com sucesso</div>";}
?> 
<? } ?>