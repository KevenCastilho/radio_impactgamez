<?php include ('AutorizaUser.php');?>
<? if($cargo == "Administrador"){ ?>
<?php
session_start("login_user");
if(! $login_user AND $senha_user) {
echo "<div align=center>Seu vagabundo,vai procurar o que fazer.</div>";
exit;} ?>
<?php
include "Config.php";
if($_GET["acao"] == "Noticia") {
$id = $_POST["id"];
$sql = "DELETE FROM noticias WHERE id = ".$_GET["id"];
$query = mysql_query($sql);
if ($query == true) {
echo "<script>window.location='index.php?abrir=pagTodasNoticias&msg=sucesso';</script>";}
else {echo "<script>window.location='index.php?abrir=pagTodasNoticias'</script>";}}
?>
<?php
include "Config.php";
if($_GET["acao"] == "Usuarios") {
$id = $_POST["id"];
$sql = "DELETE FROM usuarios WHERE id = ".$_GET["id"];
$query = mysql_query($sql);
if ($query == true) {
echo "<script>window.location='index.php?abrir=pagTodosUser&msg=sucesso'</script>";}
else {echo "<script>window.location='index.php?abrir=pagTodosUser'</script>";}}
?>
<?php
include "Config.php";
if($_GET["acao"] == "UsuariosClube") {
$id = $_POST["id"];
$sql = "DELETE FROM usuarios_clube WHERE id = ".$_GET["id"];
$query = mysql_query($sql);
if ($query == true) {
echo "<script>window.location='index.php?abrir=pagUserClube&msg=sucesso';</script>";}
else {echo "<script>window.location='index.php?abrir=pagUserClube'</script>";}}
?>
<?php
include "Config.php";
if($_GET["acao"] == "Musica") {
$id = $_POST["id"];
$sql = "DELETE FROM topmusica WHERE id = ".$_GET["id"];
$query = mysql_query($sql);
if ($query == true) {
echo "<script>window.location='index.php?abrir=pagTodasMusicas&msg=sucesso';</script>";}
else {echo "<script>window.location='index.php?abrir=pagTodasMusicas'</script>";}}
?>
<?php
include "Config.php";
if($_GET["acao"] == "Parceiro") {
$id = $_POST["id"];
$sql = "DELETE FROM parceiros WHERE id = ".$_GET["id"];
$query = mysql_query($sql);
if ($query == true) {
echo "<script>window.location='index.php?abrir=pagTodosParceiros&msg=sucesso';</script>";}
else {echo "<script>window.location='index.php?abrir=pagTodosParceiros'</script>";}}
?>
<?php
include "Config.php";
if($_GET["acao"] == "Publicidade") {
$id = $_POST["id"];
$sql = "DELETE FROM publicidade WHERE id = ".$_GET["id"];
$query = mysql_query($sql);
if ($query == true) {
echo "<script>window.location='index.php?abrir=pagTodasPublicidades&msg=sucesso';</script>";}
else {echo "<script>window.location='index.php?abrir=pagTodasPublicidades'</script>";}}
?>
<? } ?>