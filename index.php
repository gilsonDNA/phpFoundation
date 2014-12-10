<?php include_once("header.php"); ?>

<?php include_once("menu.php"); ?>

<?php
    //echo "index";
    //die;
    $paginaDigitada = retornaURLDigitada();
    //var_dump($paginaDigitada);
    //die;
    if($paginaDigitada != "error404") {
        require_once($paginaDigitada);
    }

?>

<?php include_once("footer.php"); ?>