<?php 
    require_once ("../model/categoria_dao.php");
    // Cria o DAO e cria a variável com as categorias do banco
    $LivroDAO = new LivroDAO();
    $livros = $LivroDAO->Livro_buscarTodos();

    $ClienteDAO = new ClienteDAO();
    $clientes = $ClienteDAO->Cliente_buscarTodos();

    $VestuarioDAO = new VestuarioDAO();
    $vestuarios = $VestuarioDAO->Vestuario_buscarTodos();
?>
<html>
    <head>
        <title>Listagem de todas entidades</title>
    </head>
    <body>
        <h1>Listagem de Entidades</h1>
            <p><a href="../controller/Livro/inserir.php?type=0">0. Inserir novo <b>livro</b></a></p>
            <p><a href="../controller/Vestuario/inserir.php?type=1">1. Inserir novo <b>vestuario</b></a></p>
            <p><a href="../controller/Cliente/inserir.php?type=2">2. Inserir novo <b>cliente</b></a></p>
        
        <hr>
        
        <table>
            <tr>
                <th>Identificador</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
            <?php
                foreach ($livros as $l) {
                    echo "<tr>";
                    echo "<td>{$l->getId()}</td>";
                    echo "<td>{$l->getNome()}</td>";
                    echo "<td>{$l->getDescricao()}</td>";
                    echo "<td>";
                    echo "<a href='../controller/Livro/editar.php?type=0&id={$l->getId()}'>Alterar</a> ";
                    echo "<a href='../controller/Livro/excluir.php?id={$l->getId()}'>Excluir</a>";
                    echo "</td></tr>";
                };
            ?>
        </table>

        <hr>

        <table>
            <tr>
                <th>Identificador</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
            <?php
                foreach ($clientes as $l) {
                    echo "<tr>";
                    echo "<td>{$l->getId()}</td>";
                    echo "<td>{$l->getNome()}</td>";
                    echo "<td>{$l->getCpf()}</td>";
                    echo "<td>";
                    echo "<a href='../controller/Cliente/editar.php?type=2&id={$l->getId()}'>Alterar</a> ";
                    echo "<a href='../controller/Cliente/excluir.php?id={$l->getId()}'>Excluir</a>";
                    echo "</td></tr>";
                };
            ?>
        </table>

        <hr>
        
        <table>
            <tr>
                <th>Identificador</th>
                <th>Nome</th>
                <th>Unidade</th>
                <th>Ações</th>
            </tr>
            <?php
                foreach ($vestuarios as $l) {
                    echo "<tr>";
                    echo "<td>{$l->getId()}</td>";
                    echo "<td>{$l->getNome()}</td>";
                    echo "<td>{$l->getUnidade()}</td>";
                    echo "<td>";
                    echo "<a href='../controller/Vestuario/editar.php?type=1&id={$l->getId()}'>Alterar</a> ";
                    echo "<a href='../controller/Vestuario/excluir.php?id={$l->getId()}'>Excluir</a>";
                    echo "</td></tr>";
                };
            ?>
        </table>


    </body>
</html>