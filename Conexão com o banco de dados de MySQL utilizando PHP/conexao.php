<?php

# Caminho do servidor mysql:
$servidor = "localhost";

# Nome do usuário do mysql:
$usuario = "root";

# Senha do usúario do mysql:
$senha = "senha123456";

# Nome do banco de dados:
$banco = "meu_banco"

# Conecta com o servidor:
mysql_connect($servidor, $usuario, $senha)
	or die("Aconteceu um erro: Não foi possível conectar ao servidor de banco de dados.");

# Seleciona o banco:
mysql_select_db($banco)
	or die("Aconteceu um erro: Não foi possível selecionar o banco de dados.");