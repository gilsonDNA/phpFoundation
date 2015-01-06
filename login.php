<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->

<div class="span10">
    <form class="form-horizontal" action="contato" role="form" method="post" >
    <div class="well">

        <?php if(!isset( $_POST['submit']) ): ?>

        <h3>Você precisa se autenticar no sistema:</3>



                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="digite sua senha" required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-primary btn-small" type="submit" name="submit" value="Enviar"/>
                    </div>
                </div>

        <?php else: ?>
           <?php

            include("usuario/usuarioDAO.php");
            require_once("utilidades.php");
            $arrUsuario =  array();
            $arrUsuario['email'] = $_POST['email'];
            $arrUsuario['password'] = $_POST['password'];


            try{
                $usuario = getUsuarioByEmail($arrUsuario['email']);


                if( password_verify($arrUsuario['password'], $usuario['password']) ){
                    criaSessao($usuario);
                    echo "Autenticação realizada com sucesso!";
                    echo "<hr /><a class='btn btn-default'  role='button' href='empresa'>OK</a>";
                }else{
                    echo "Login ou senha inválidos!";
                    die;
                }
            }catch (Exception $e){
                echo $e->getMessage();
            }



            ?>



        <?php endif; ?>

        <hr />




    </div>



    </form>

</div>
