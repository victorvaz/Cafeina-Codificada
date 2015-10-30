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

# SQL:
$sql = "SELECT * FROM produto;";

# Executa a SQL:
$query = mysql_query($sql)
	or die("Não foi possível executar a query. ". mysql_error());

# Printa os dados:
while ($row = mysql_fetch_array($row))
	print $row['id'] . ',' . $row['nome'];