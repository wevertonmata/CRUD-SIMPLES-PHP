<?php
require_once("../../model/categoria_dao.php");
$ClienteDAO = new ClienteDAO();
// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cria uma categoria com código vazio para inserir no banco
    $cliente = new Cliente($_POST["id"], $_POST["nome"], $_POST["cpf"]);
    $ClienteDAO->Cliente_atualizar($cliente);
    // Redireciona a página para a listagem
    header("location: ../../view/index.php");
} else {
    // Busca a categoria no banco de dados
    $cliente = $ClienteDAO->Cliente_buscarPorId($_GET["id"]);
    require_once("../../view/categoria_form.php");
}