<?php

// Definição dos atributos do banco de dados
define('HOST', '127.0.0.1');
define('USER', 'root');
define('SENHA', '123456');
define('DB', 'db_php');

// Criando a conexão com o banco de dados
$conexao = mysqli_connect(HOST, USER, SENHA, DB);

// Verificando se a conexão foi bem-sucedida
/*if ($conexao) {
    echo "✅ Conexão bem-sucedida!";
} else {
    echo "❌ Erro na conexão: " . mysqli_connect_error();
}
*/
?>
