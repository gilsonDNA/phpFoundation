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