<?php
$page = basename($_SERVER['REQUEST_URI']);
$current_page = basename(__FILE__);
if(substr_count(strtolower($page), $current_page) > 0)
die("<strong> Acesso n&atilde;o autorizado. </strong>");

$host = "sql306.cuccfree.com"; 		// Servidor 
$usuario = "cucch_15464446";  		// Usuario
$senha = "keven10";		// Senha
$banco = "cucch_15464446_novo";			// Banco de Dados
$conecta = mysql_connect($host,$usuario,$senha) or die("Não Foi Possível Conectar");  // Conexao
$seleciona = mysql_select_db($banco) or die("Não Foi Encontrado o Respectivo Banco De Dados");  // Conexao
?>