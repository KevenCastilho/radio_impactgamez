<?
$select = file_get_contents('../Admin/Funcoes/Alt.txt');
$resultado = mysql_query('SELECT * FROM usuarios WHERE ID=' . $select);
while($play = mysql_fetch_array($resultado))
{
$foto = $play['foto'];
?>
<table width="212" height="192" border="0" align="center" cellspacing="0">
<tr>
    <td width="210" height="129" background="Imagens/Locutor.jpg"><div align="center"><img id="foto" src="../Admin/Imagens/Fotos/<? echo $play['foto']; ?>" width="160" height="110" border="0"></div></td>
  </tr>
<tr>
  <td height="21"><strong>Apresentador:</strong> <? echo $play['nick']; ?></td>
</tr>
<tr>
  <td height="21"><strong>Programa:</strong> <? echo $play['programa']; ?></td>
</tr>
<tr>
  <td height="21"><strong>Ver Perfil:</strong> <a href="javascript:;" onclick ="Load ('?sexy=plMembrosPerfil&amp;id=<? echo $play['id']; ?>','conteudo','GET');" title="<? echo $play['nick']; ?>">Clique aqui</a></td>
</tr>
</table>
<?php } ?>