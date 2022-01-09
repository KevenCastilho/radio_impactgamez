<?php
include('Config.php');
function LimparTexto($texto){
$texto=str_replace(array("<", ">", "\\", "/", "=", "'", "?"), "", $texto);
return $texto;
}
$login = LimparTexto($_POST["login"]);
$senha = LimparTexto($_POST["senha"]);
$resultado = mysql_query("SELECT * FROM usuarios_clube WHERE login = '$login' ");
$linhas = mysql_num_rows($resultado);
while ($linha = mysql_fetch_array($resultado)){
$sexo = $linha["sexo"];
$foto = $linha["foto"];
}
if ($linhas == 0){
header("Location: login.php?acao=erro");
}else {
    if ($senha != mysql_result($resultado, 0, "senha")){
    header("Location: login.php?acao=erro");
    }else{
    if ($sexo == Masculino){
    session_start();
    $_SESSION["login_usuario"] = $login;
    $_SESSION["senha_usuario"] = $senha;
    $_SESSION["sexo"] = $sexo;
    $_SESSION["foto"] = $foto;
    header("Location: access.php");
    }else {
    $sexo == Feminino;
    session_start();
    $_SESSION["login_usuario"] = $login;
    $_SESSION["senha_usuario"] = $senha;
    $_SESSION["sexo"] = $sexo;
    $_SESSION["foto"] = $foto;
    header("Location: access.php");}
    }
    }
mysql_close($conecta);
?>
