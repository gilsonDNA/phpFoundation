<?php include_once("header.php"); ?>

<?php include_once("menu.php"); ?>

<?php
    $paginaDigitada = retornaURLDigitada();
    //var_dump($paginaDigitada);
    //die;
    if($paginaDigitada != "error404")
    {
        if(estaLogado())
        {
            require_once($paginaDigitada);
        }else
        {
            require_once("login.php");
        }

    }

?>

<?php include_once("footer.php"); ?>