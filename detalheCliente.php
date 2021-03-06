<!-- ARQUIVO APRESENTA OS DETALHES DO CLIENTE -->
<?php
    require_once("utilidades.php");
    include_once("header_padrao.php");
?>

<?php include_once("menu.php"); ?>

<div class="span10">
    <form class="form-horizontal" action="contato" role="form" method="post" >
    <div class="well">

        <?php
            include __DIR__ . "/admin/cliente/clienteDAO.php";
            /**
             * CAPTURA O PARAMENTRO KEY, E PERCORRE O ARRAY PARA LOCALIZAR O CLIENTE PELO ID
             * */

            $idCliente = $_GET['key'];
            $listaClientes = getListClientes();
            foreach($listaClientes as $cliente){

                /**
                 * VERIFICA SE O CLIENTE EXISTE,CASO SIM, APRESENTA OS DADOS
                 */
                if ($cliente->getId() == $idCliente){

                   echo "<h1>Cliente Selecionado:</h1>";


                   echo "<div class='form-group'>";
                   echo "<label for='id' class='col-sm-2 control-label'>Id:</label>";
                   echo "<div class='col-sm-10'>";
                   echo "  <input type='text' class='form-control' id='id' name='id' value=".$cliente->getId()." />";
                   echo  "</div>";
                   echo  "</div>";
                   echo "<div class='form-group'>";
                   echo "    <label for='nome' class='col-sm-2 control-label'>Nome:</label>";
                   echo "      <div class='col-sm-10'>";
                   echo "         <input type='email' class='form-control' id='nome' name='nome' value=".$cliente->getNome()." />";
                   echo "     </div>";
                   echo " </div>";
                   echo " <div class='form-group'>";
                   echo "    <label for='cpf' class='col-sm-2 control-label'>CPF:</label>";
                   echo "     <div class='col-sm-10'>";
                   echo "        <input type='text' class='form-control' id='cpf' name='cpf' value=".$cliente->getCpf()." />";
                   echo "     </div>";
                   echo " </div>";
                   echo " <hr />";
                   echo " <a href='listClientes'>Voltar</a>";
                }

            }
        ?>


    </div>

    </form>

</div>

<?php include_once("footer.php"); ?>
