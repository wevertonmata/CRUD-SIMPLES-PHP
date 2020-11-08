<?php
require_once("../../model/categoria_dao.php");
$ClienteDAO = new ClienteDAO();
// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cria uma categoria para inserir no banco
    $cliente = new Cliente($_POST[“id”], $_POST["nome"],$_POST["cpf"] );
    $ClienteDAO->Cliente_inserir($cliente);
    // Redireciona a página para a listagem
    header("location: ../../view/index.php");
} else {
    // Cria a categoria vazia para preencher o formulário
    $cliente = new Cliente(0, "","");
    require_once("../../view/categoria_form.php");
}