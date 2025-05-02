<?php
/*** CONEXÃO COM BANCO DE DADOS */
/**VARIAVEIS */
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sisfarmacia');

$URL = 'http://localhost/www.sisfarmacia.com';

/**CONEXÃO */
$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;
try {
    $pdo = new PDO($servidor, USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "<script>alert('Banco de Dados conectado com Sucesso!!!')</script>";
} catch (PDOException $e) {
    echo "<script>alert('Erro ao tentar se conectar com a base de Dados!')</script>";
}