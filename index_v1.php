
<?php include_once("header.php"); ?>

<?php include_once("menu.php"); ?>


<?php


function minhaRotas(){

    $arrayRotas =  array("index.php","contato.php", "empresa.php", "produto.php", "servico.php");

    return $arrayRotas;
}

function verificaRota($pagDigitada){
    $arrayRotas = minhaRotas();

    $achou = false;


    foreach( $arrayRotas as $rota){

        if($pagDigitada == $rota){
            $achou = true;
            break;
        }


    }

    return $achou;

}

function capturaURL(){

    $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = str_replace("/", "", $rota['path']);
    //echo $rota['path'];
    //echo $path;

    return $path;
}

?>


<?php

    $valorParametro = capturaURL();





    if(!isset($_GET['page']))

        require_once("home.php");

    else

        try{


            $valorParametro = $_GET['page'].".php";

            //var_dump($valorParametro);
            //die;

            if(verificaRota($valorParametro)){
                require_once(  $valorParametro );
            }else{
                require_once("error.php");
            }



        }catch(Exception $e){
            require_once("error.php");
        }


?>


<?php include_once("footer.php"); ?>