<?php
session_start(); // Inicia uma Sessao
if (isset($_SESSION["login_usuario"]) AND isset($_SESSION["senha_usuario"])) {
    $login_usuario = $_SESSION["login_usuario"]; // Verifica se o login digitado esta certo
    $senha_usuario = $_SESSION["senha_usuario"]; // Verifica se a senha digitada esta certa
    include "Config.php"; // Inclui o arquivo Config
    $foto = $_SESSION["foto"]; // Verifica a foto do usuario
	}else{ // Se não estiver logado vai para login
	header("Location: login.php");} // Se não estiver logado vai para login
?>
