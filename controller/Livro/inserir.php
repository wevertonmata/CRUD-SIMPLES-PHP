<?php
require_once("../../model/categoria_dao.php");
$LivroDAO = new LivroDAO();
// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cria uma categoria para inserir no banco
    $livro = new Livro($_POST[“id”], $_POST["nome"],$_POST["descricao"] );
    $LivroDAO->Livro_inserir($livro);
    // Redireciona a página para a listagem
    header("location: ../../view/index.php");
} else {
    // Cria a categoria vazia para preencher o formulário
    $livro = new Livro(0, "","");
    require_once("../../view/categoria_form.php");
}