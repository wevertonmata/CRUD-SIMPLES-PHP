<?php
require_once("../../model/categoria_dao.php");
// Executa a exclusão no banco e volta para a tela de listagem
$ClienteDAO = new ClienteDAO();
$ClienteDAO->Cliente_excluir(new Cliente($_GET["id"],"",""));
header("location: ../../view/index.php");