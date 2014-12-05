<?php include_once("header.php"); ?>

<?php include_once("menu.php"); ?>

<?php
    //echo "index";
    //die;
    $paginaDigitada = retornaURLDigitada();
    if($paginaDigitada != "error404") {
        require_once($paginaDigitada);
    }

?>

<?php include_once("footer.php"); ?>