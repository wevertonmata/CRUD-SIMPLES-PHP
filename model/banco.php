<?php

define('BD_USUARIO','root');
define('BD_SENHA','123');
$dsn = 'mysql:dbname=mvc;host=127.0.0.1';

 try {
     $conn = new PDO($dsn, BD_USUARIO, BD_SENHA);
 }
 catch(Exception $ex) {
  echo "Erro na conexão com o banco:". $ex->getMessage();
  die;
 }

