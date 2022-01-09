<?php
include("Config.php");
function LimparTexto($texto){
$texto=str_replace(array("<", ">", "\\", "/", "=", "'", "?"), "", $texto);
return $texto;
}
$login = LimparTexto($_POST["login"]);
$senha = LimparTexto($_POST["senha"]);
$resultado = mysql_query("SELECT * FROM usuarios WHERE login = '$login' ");
$linhas = mysql_num_rows($resultado);
while ($linha = mysql_fetch_array($resultado)){
$rank = $linha["cargo"];
$foto = $linha["foto"];
}
if ($linhas == 0){
header("Location: logar.php?fail=aviso");
}else {
    if ($senha != mysql_result($resultado, 0, "senha")){
    header("Location: logar.php?fail=incorreto");
    }else{
    if ($rank == Locutor){
    session_start();
    $_SESSION["login_user"] = $login;
    $_SESSION["senha_user"] = $senha;
    $_SESSION["rank"] = $rank;
    $_SESSION["foto"] = $foto;
    header("Location: index.php");
    }else {
    $rank == Administrador;
    session_start();
    $_SESSION["login_user"] = $login;
    $_SESSION["senha_user"] = $senha;
    $_SESSION["rank"] = $rank;
    $_SESSION["foto"] = $foto;
    header("Location: index.php");
	}
    }
    }
mysql_close($conecta);
?>