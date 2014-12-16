<?php
session_start();
require_once("utilidades.php");
if(retornaURLDigitada() == "error404") {
    header("HTTP/1.0 404 Not Found");
    //include("error.php");
    header("location:/error.php");
    die;
}
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
?>

<?php include_once("header_padrao.php"); ?>
