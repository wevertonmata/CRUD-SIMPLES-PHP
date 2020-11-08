<?php
require_once("../../model/categoria_dao.php");
$LivroDAO = new LivroDAO();
// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cria uma categoria com código vazio para inserir no banco
    $livro = new Livro($_POST["id"], $_POST["nome"], $_POST["descricao"]);
    $LivroDAO->Livro_atualizar($livro);
    // Redireciona a página para a listagem
    header("location: ../../view/index.php");
} else {
    // Busca a categoria no banco de dados
    $livro = $LivroDAO->Livro_buscarPorId($_GET["id"]);
    require_once("../../view/categoria_form.php");
}