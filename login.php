<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->





<div class="span10">
    <form class="form-horizontal" action="contato" role="form" method="post" >
    <div class="well">

        <?php if(!isset( $_POST['submit']) ): ?>

        <h6>Você precisa fazer se autenticar no sistema:</h6>



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

            $arrUsuario =  array();
            $arrUsuario['email'] = $_POST['email'];
            $arrUsuario['password'] = $_POST['password'];





            ?>



        <?php endif; ?>

        <hr />




    </div>



    </form>

</div>
