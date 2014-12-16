<?php
include __DIR__."/../db/conexaoDB.php";

function getUsuarioByEmail($email){

    try{
        $conn = conexaoDB();

    }catch (\Exception $e){
        echo "Erro ao conectar getUsuario ".$e->getMessage();
        die;
    }

    $sql = "Select * from tblusuario where email = :email";
    $smtp = $conn->prepare($sql);
    $smtp->bindParam(":email", $email);
    $smtp->execute();

    $usuario = $smtp->fetch(PDO::FETCH_ASSOC);


    return $usuario;

}
