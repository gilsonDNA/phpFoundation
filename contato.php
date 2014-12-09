<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->





<div class="span10">
    <form class="form-horizontal" action="contato" role="form" method="post" >
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
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="assunto" class="col-sm-2 control-label">Assunto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Mensagem:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control"  name="mensagem" required="true"></textarea>
                    </div>
                </div>


        <hr />


        <?php else: ?>

            <h4>Dados Enviado com sucesso, abaixo seguem os dados que voce enviou</h4>


            <b>Nome:</b> <?php echo $_POST['nome']; ?> <br />
            <b>Email:</b> <?php echo $_POST['email']; ?> <br />
            <b>Assunto:</b> <?php echo $_POST['assunto']; ?> <br />
            <b>Mensagem: </b><?php echo $_POST['mensagem']; ?> <br />



            <a href="index">Voltar</a>


        <?php endif; ?>

    </div>



    </form>

</div>
