<?php
   include __DIR__ . "/admin/conteudo/conteudoDAO.php";
   $tipoConteudo = "empresa";
?>
<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
<div class="span10">


    <form class="form-horizontal" action="empresaEdit" role="form" method="post" >


        <?php if(!isset( $_POST['submit']) ): ?>

            <div class="well">
                <h1> Alterar Texto </h1>
                <hr />

                <?php
                $conteudo = getConteudo($tipoConteudo);

                echo "<textarea name='editor1'>".$conteudo['conteudo']."</textarea>";
                ?>

                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>


                <hr />


                <input class="btn btn-primary btn-small" type="submit" name="submit" value="Salvar Texto"/>
            </div>

        <?php else: ?>

            <div class="well">
                <h1> Texto Alterado </h1>
                <hr />

                <?php

                    $conteudoDigitado = $_POST['editor1'];

                    if(updateConteudo($conteudoDigitado, $tipoConteudo) ){
                        echo "<p>Operação realizada com sucesso!</p>";
                        echo "<a class='btn btn-default'  role='button' href='empresa'>OK</a>";

                    }else{
                        echo "<p>Não foi possível salvar os dados!</p>";
                    }

                ?>

                <hr />


            </div>

        <?php endif; ?>

    </form>
</div>