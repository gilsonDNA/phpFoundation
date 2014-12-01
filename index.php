
<?php include_once("header.php"); ?>

<?php include_once("menu.php"); ?>


<?php

    if(!isset($_GET['page']))

        require_once("home.php");

    else

        try{

            require_once(  $_GET['page'].".php" );
        }catch(Exception $e){
            require_once("error.php");
        }


?>


<?php include_once("footer.php"); ?>