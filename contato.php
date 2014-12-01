<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->





<div class="span10">
    <form class="form-horizontal" action="contato.php" role="form" method="post" >
    <div class="well">

        <?php if(!isset( $_POST['submit']) ): ?>

        <h6>Informe os dados abaixo:</h6>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-primary btn-small" type="submit" name="submit" value="Enviar"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">Assunto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Mensagem:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control"  name="mensagem" />
                    </div>
                </div>


        <hr />


        <?php else: ?>

            <h1>Dados Enviado com sucesso, abaixo seguem os dados que voce enviou</h1>


            <b>Nome: <?php echo $_POST['nome']; ?></b> <br />
            <b>Email: <?php echo $_POST['email']; ?></b> <br />
            <b>Assunto: <?php echo $_POST['assunto']; ?></b> <br />
            <b>Mensagem: <?php echo $_POST['mensagem']; ?></b> <br />



            <a href="index.php">Voltar</a>


        <?php endif; ?>

    </div>



    </form>

</div>
