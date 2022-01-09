<?php
session_start(); // Inicia uma Sessao
if (isset($_SESSION["login_user"]) AND isset($_SESSION["senha_user"])) {
    $login_user = $_SESSION["login_user"];
    $senha_user = $_SESSION["senha_user"];
    $rank = $_SESSION["rank"];
    $cargo = $_SESSION["rank"];
    include "Config.php";
    $foto = $_SESSION["foto"];
	}else{
	header("Location: logar.php");} 
?>
