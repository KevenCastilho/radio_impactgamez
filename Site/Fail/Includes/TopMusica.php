<?php
$query = "SELECT * FROM topmusica";
$result = mysql_query($query);
$play = mysql_num_rows($result);
if($play <= "0"){
echo "<br><div class='warning'>Nenhuma M&uacute;sica cadastrada</div>";}
?>
<?php
$select = "SELECT * FROM topmusica ORDER BY id DESC LIMIT 5"; 
$result = mysql_query($select);
while($play = mysql_fetch_array($result)){
$id = $play["id"];
$musica = $play["musica"];
$artista = $play["artista"];
$foto = $play["foto"];
$link = $play["link"];
$video = $play["video"];
?>
<table width="230" border="0" cellspacing="2">
<tr>
    <td width="202" height="25"><div align="left"><img src="Imagens/Musica.Tocando.png" width="14" height="12" /><a href="javascript:;" onclick ="Load ('?sexy=plVerMusica&id=<?php echo $id;?>','conteudo','GET');"> <?php echo $musica;?> - <?php echo $artista?></a> </div></td>
  </tr>
</table>
<?php } ?>