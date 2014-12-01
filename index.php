
<?php include_once("header.php"); ?>

<?php include_once("menu.php"); ?>


<?php

    if(!isset($_GET['page']))

        require_once("home.php");

    else

        try{

            $arrayPaginas =  array("contato.php", "empresa.php", "produto.php", "servico.php");
            $valorParametro = $_GET['page'].".php";

            $achou = false;


            foreach( $arrayPaginas as $pag){

                if($valorParametro == $pag){
                    $achou = true;
                    break;
                }


            }



            if($achou){
                require_once(  $valorParametro );
            }else{
                require_once("error.php");
            }



        }catch(Exception $e){
            require_once("error.php");
        }


?>


<?php include_once("footer.php"); ?>