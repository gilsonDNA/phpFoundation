<?php


require_once "conexaoDB.php";

echo "### Executando Fixture ###\n";

$conn = conexaoDB();

echo "Removendo tabela\n";
$conn->query("DROP TABLE IF EXISTS tblconteudo;");
echo " ok\n";

echo "Criando tabela tblconteudo";
$conn->query("CREATE TABLE tblconteudo (
            id INT NOT NULL AUTO_INCREMENT,
            conteudo TEXT CHARACTER SET 'utf8' NULL,
            pagina VARCHAR(255) CHARACTER SET 'utf8' NULL,
            PRIMARY KEY (id))");

echo " ok\n";

echo "inserindo dados\n";

$arrayPagConteudo =  array("empresa", "produto", "servico");

foreach($arrayPagConteudo as $pagConteudo ){

    $conteudo = $pagConteudo." Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum.";

    for($x =0; $x <= 1; $x++ ){

        $smtp = $conn->prepare("INSERT INTO tblconteudo (conteudo, pagina) VALUES (:conteudo, :pagina);");
        $smtp->bindParam(":conteudo", $conteudo);
        $smtp->bindParam(":pagina", $pagConteudo);
        $smtp->execute();


    }
}

echo "ok\n";

echo "### Concluido ###\n";




