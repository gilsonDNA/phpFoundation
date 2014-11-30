<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->

<div class="span10">

    <div class="well">

        <?php if(!$_POST['submit']): ?>

        <form action="contato.php" method="post" >
        <h3>Informe os dados abaixo:</h3>


        <input class="btn btn-primary btn-small" type="submit" name="submit" value="Enviar">

        <table>
            <tr>
                <td><label>Nome: <input type="text" name="nome"/></label></td>
                <td><label>Email: <input type="text" name="email"/></label></td
            </tr>
            <tr >
                <td cols="2"><label>Assunto: <input type="text" name="assunto"/></label></td>

            </tr>
            <tr>

                <td cols="2"><label>Mensagem: <textarea name="mensagem"   rows="3"/></label></td

            </tr>
        </table>


        <hr />
        </form>

        <?php else: ?>

            <h1>Dados Enviado com sucesso, abaixo seguem os dados que voce enviou</h1>
            <b>Nome: <?php echo $_POST['nome']; ?></b> <br />
            <b>Nome: <?php echo $_POST['email']; ?></b> <br />
            <b>Nome: <?php echo $_POST['assunto']; ?></b> <br />
            <b>Nome: <?php echo $_POST['mensagem']; ?></b> <br />

            <a href="index.php">Voltar</a>


        <?php endif; ?>

    </div>





</div>
