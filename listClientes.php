<!-- ESTE ARQUIVO LISTA TODOS OS CLIENTES DO ARRAY -->
<?php
include __DIR__ . "/admin/cliente/clienteDAO.php";
?>

<div class="span10">


    <form class="form-horizontal" action="listClientes" role="form" method="post" >
    <div class="well">
        <h1> Clientes Cadastrados </h1>
        <hr />

        <!-- MONTANDO A TABELA -->
        <table class="table table-striped">
            <tr>
                <td><b>Id</b></td>
                <td><b>Nome</b></td>
                <td><b>Cpf</b></td>
                <td><b>Visualizar</b></td>
            </tr>

        <?php

        /**
         * Retorna o array de objetos, depois percorre montando a lista de Clientes
         */

            $listaClientes = getListClientes();
            foreach($listaClientes as $cliente)
            {

                    echo "<tr>";
                    echo "<td>" . $cliente->getId() . "</td>";
                    echo "<td>" . $cliente->getNome() . "</td>";
                    echo "<td>" . $cliente->getCpf() . "</td>";
                    echo "<td>";
                    echo "<a href='detalheCliente.php?key=" . $cliente->getId() . "' title='clique para acessar'>Ver Detalhes</a></td>";
                    echo "</td></tr>";


            }

        ?>

        </table>

        <hr />

    </div>

    </form>
</div>