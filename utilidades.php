<?php


function criptografa($senha){

    $options =[
        $salt = "school of net - curso de php, recomendo"
    ];

    return password_hash($senha, PASSWORD_DEFAULT, $options );
}



function estaLogado($arrUsuario, $password){

    $logou = false;

    if( isset($_SESSION['usuario'] ) ){

        $usuarioSessao = $_SESSION["usuario"];

        if($usuarioSessao['password'] == $password){
            $logou = true;
        }else{
            return false;
        }


    }

    return $logou;
}

function criaSessao($arrUsuario){

    session_start();
    $_SESSION["usuario"] = $arrUsuario;

}

function destroiSessao($arrUsuario){

    if(isset($_SESSION["usuario"])){
        unset($_SESSION["usuario"]);
    }

}





function minhaRotas(){

    $arrayRotas =  array("index.php","contato.php", "empresa.php", "produto.php", "servico.php", "pesquisa.php");

    return $arrayRotas;
}

function existeRota($pagDigitada){
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


function retornaURLDigitada(){

    $pagDigitada = capturaURL().".php";

    if($pagDigitada == ".php"){
        return  "index.php";
    }

    if(existeRota($pagDigitada)){

        return  $pagDigitada;
    }else{
        return "error404" ;
        //header("HTTP/1.0 404 Not Found");
        //header('Location: error.php', false);
        //require_once("error.php");
        //exit(header("Location: error.php"));

        //http_response_code(404);

    }

}