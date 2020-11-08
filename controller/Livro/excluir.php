<?php
require_once("../../model/categoria_dao.php");
// Executa a exclusão no banco e volta para a tela de listagem
$LivroDAO = new LivroDAO();
$LivroDAO->Livro_excluir(new Livro($_GET["id"],"",""));
header("location: ../../view/index.php");