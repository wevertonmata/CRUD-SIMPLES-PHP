<?php
require_once("../../model/categoria_dao.php");
$VestuarioDAO = new VestuarioDAO();
// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cria uma categoria para inserir no banco
    $vestuario = new Vestuario($_POST[“id”], $_POST["nome"],$_POST["unidade"] );
    $VestuarioDAO->Vestuario_inserir($vestuario);
    // Redireciona a página para a listagem
    header("location: ../../view/index.php");
} else {
    // Cria a categoria vazia para preencher o formulário
    $vestuario = new Vestuario(0, "",0);
    require_once("../../view/categoria_form.php");
}