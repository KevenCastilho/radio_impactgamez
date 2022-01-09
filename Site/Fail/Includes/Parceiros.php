<?php
$query = "SELECT * FROM parceiros";
$result = mysql_query($query);
$play = mysql_num_rows($result);
if($play <= "0"){
echo "<br><div class='warning'>Nenhum Parceiro cadastrado</div>";}
?>
<marquee scrollamount="6" onmouseover="stop();" onmouseout="start();"><?php
$select = "SELECT * FROM parceiros"; 
$result = mysql_query($select);
while($play = mysql_fetch_array($result)){
$nome = $play['nome'];
$id = $play['id'];
$banner = $play['banner'];
$url = $play['url'];
?>
<a href="<?php echo $url;?>" target="_blank"><img src="<?php echo $banner;?>" width="180" height="60" border="0" title="<?php echo $nome;?>" /></a>
<? } ?>
</marquee>