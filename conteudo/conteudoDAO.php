<?php
include __DIR__."/../db/conexaoDB.php";

function getListaConteudo($pagConteudo){

    try{
        $conn = conexaoDB();

    }catch (\Exception $e){
        echo "Erro ao conectar ListaConteudo ".$e->getMessage();
        die;
    }

    $sql = "Select * from tblconteudo where pagina = :pagina";
    $smtp = $conn->prepare($sql);
    $smtp->bindParam(":pagina", $pagConteudo);
    $smtp->execute();

    $listConteudo = $smtp->fetchAll(PDO::FETCH_ASSOC);


    return $listConteudo;

}

function getConteudo($pagConteudo){

    try{
        $conn = conexaoDB();

    }catch (\Exception $e){
        echo "Erro ao conectar conteúdo ".$e->getMessage();
        die;
    }

    $sql = "Select * from tblconteudo where pagina = :pagina";
    $smtp = $conn->prepare($sql);
    $smtp->bindParam(":pagina", $pagConteudo);
    $smtp->execute();

    $conteudo = $smtp->fetch(PDO::FETCH_ASSOC);


    return $conteudo;

}

function getListaPaginas($palavraPesquisada){
    try{
        $conn = conexaoDB();

    }catch (\Exception $e){
        echo "Erro ao conectar ListaConteudoPorPalavraChave ".$e->getMessage();
        die;
    }


    $palavraPesquisada = '%'.$palavraPesquisada.'%';

    $sql = "SELECT distinct pagina FROM phpbanco.tblconteudo where conteudo like :key  ";
    $smtp = $conn->prepare($sql);
    $smtp->bindParam(":key", $palavraPesquisada, PDO::PARAM_STR);
    $smtp->execute();


    $listPaginas = $smtp->fetchAll(PDO::FETCH_ASSOC);



    return $listPaginas;

}

function updateConteudo($pagConteudo, $tipoConteudo){
    try{
        $conn = conexaoDB();

    }catch (\Exception $e){
        echo "Erro ao conectar updateConteudo ".$e->getMessage();
        die;
    }




    $sql = "update tblconteudo set conteudo = :pagConteudo where pagina = :tipoconteudo ";
    $smtp = $conn->prepare($sql);
    $smtp->bindParam(":pagConteudo", $pagConteudo);
    $smtp->bindParam(":tipoconteudo", $tipoConteudo);

    if( $smtp->execute() ){
        return true;
    }else{
        return false;
    }



}