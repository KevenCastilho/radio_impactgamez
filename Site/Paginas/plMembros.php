<? $select = file_get_contents('Funcoes/AltTema.txt');
$resultado = mysql_query('SELECT * FROM tema WHERE id=' . $select);
while($tema = mysql_fetch_array($resultado))
{ $codigo = $tema['codigo'];?><div id="conteudo_esquerdo">
      <div class="conteudo_tesquerdo" style="background: #aebcbf;background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809));background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 );">
        <p style="padding:5px;">Membros</p>
      </div>
      <div align="center"><?php
$query = "SELECT * FROM usuarios";
$result = mysql_query($query);
$play = mysql_num_rows($result);
if($play <= "0"){
echo "<div class='warning'>Nenhum Usu&aacute;rio cadastrado</div>";}
?>
        <?php
 include('Fail/Settings.php');
$query = "SELECT * FROM usuarios";
$result = mysql_query($query,$conecta);
while ($play = mysql_fetch_array($result)){
$id = $play["id"];
$nome = $play['nome'];
$nick = $play['nick'];
$foto = $play['foto'];
$msn = $play['msn'];
$programa = $play['programa'];
$relacionamento = $play['relacionamento'];
$n = $i+1;
$i++;
?>
        <table width="100%" border="0" align="left" cellpadding="0" cellspacing="1" class="Tabelas">
          <tr><br />
              <td class="Titulo" align="center" width="105" style="padding:0;"><div align="center"><img src="../Admin/Imagens/Fotos/<?=$foto?>" width="80" height="80" border="0" title="<? echo"$nome" ?>" /></div></td>
            <td width="915" style="line-height:125%;"> Nome: <b><? echo $nome; ?></b><br />
              Nick: <b><? echo $nick; ?></b><br />
              Programa: <b><? echo $programa; ?></b><br />
			  Relacionamento: <b><? echo $relacionamento; ?></b><br />
              Perfil: <b><a href="javascript:;" onclick ="Load ('?sexy=plMembrosPerfil&amp;id=<? echo $play['id']; ?>','conteudo','GET');" title="<? echo $play['nome']; ?>">Clique aqui</a></b><br />
              <br />
            </td>
          </tr>
        </table>
        <?
}
?>
      </div>
</div>
    </div>
    </div>
    </div>
</body>
</html>
<? } ?>