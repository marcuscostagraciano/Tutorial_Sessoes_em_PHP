<?php
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'pdo_sessao_bd');
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
// inclui o arquivo de funções
require_once 'functions.php';