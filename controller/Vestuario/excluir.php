<?php
require_once("../../model/categoria_dao.php");
// Executa a exclusão no banco e volta para a tela de listagem
$VestuarioDAO = new VestuarioDAO();
$VestuarioDAO->Vestuario_excluir(new Vestuario($_GET["id"],"",""));
header("location: ../../view/index.php");