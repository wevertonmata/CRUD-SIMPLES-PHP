<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <?php 
            if( empty($_GET['id']) ){
                echo "<h1>Inserir novo dado</h1>";
            }else{
                echo "<h1>Atualizar dado existente</h1>";
            }
        ?>

        <?php  if($_GET['type'] == 0 or $_GET['type'] == null ): ?>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $livro->getId(); ?>">
                <p>
                    Nome: <input type="text" name="nome" value="<?php echo $livro->getNome(); ?>">
                </p>
                <p>
                    Descricao: <input type="text" name="descricao" value="<?php echo $livro->getDescricao(); ?>">
                </p>
                <p>
                    <button type="submit">Salvar</button>
                </p>
            </form>

        <?php elseif($_GET['type'] == 1 ): ?>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $vestuario->getId(); ?>">
                <p>
                    Nome: <input type="text" name="nome" value="<?php echo $vestuario->getNome(); ?>">
                </p>
                <p>
                    Unidade: <input type="number" name="unidade" value="<?php echo $vestuario->getUnidade(); ?>">
                </p>
                <p>
                    <button type="submit">Salvar</button>
                </p>
            </form>
            
        <?php elseif($_GET['type'] == 2 ): ?>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $cliente->getId(); ?>">
                <p>
                    Nome: <input type="text" name="nome" value="<?php echo $cliente->getNome(); ?>">
                </p>
                <p>
                    CPF: <input type="text" name="cpf" value="<?php echo $cliente->getCpf(); ?>">
                </p>
                <p>
                    <button type="submit">Salvar</button>
                </p>
            </form>
        <?php   endif;    ?>

    </body>
</html>