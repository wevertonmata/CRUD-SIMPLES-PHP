<?php
require_once("../../model/categoria_dao.php");
$VestuarioDAO = new VestuarioDAO();
// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cria uma categoria com código vazio para inserir no banco
    $vestuario = new Vestuario($_POST["id"], $_POST["nome"], $_POST["unidade"]);
    $VestuarioDAO->Vestuario_atualizar($vestuario);
    // Redireciona a página para a listagem
    header("location: ../../view/index.php");
} else {
    // Busca a categoria no banco de dados
    $vestuario = $VestuarioDAO->Vestuario_buscarPorId($_GET["id"]);
    require_once("../../view/categoria_form.php");
}