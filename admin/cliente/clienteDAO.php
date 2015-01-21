<?php
    include "Cliente.php";

    //metodo que cria um array de clientes, gerando dados fictícios para o mesmo
    function getListClientes()
    {

        $arrayClientes = array();

        for($x = 0; $x < 10; $x++)
        {
            $nomeCliente = "Cliente".$x;
            $cpf = "017.234.233.".$x;
            $arrayClientes[$x] = new Cliente($x,$nomeCliente, $cpf  );
        }

        return $arrayClientes;
    }

