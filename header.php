<?php
require_once("utilidades.php");
if(retornaURLDigitada() == "error404") {
    header('Location: error.php');
    //die;
    //http_response_code(404);
    //header("HTTP/1.0 404 Not Found");

}
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
?>

<!DOCTYPE html>
<html>
<head>
    <title>School Of Net - PHP-Foundation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta charset="utf-8">
</head>



<body>

<!-- HEADER -->
<header class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <h2>School Of Net - PHP Foundation</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
<div class="container-fluid">
    <!-- CLASSE PARA DEFINIR UMA LINHA -->
    <div class="row-fluid">
