<?php
# CONEXÃO COM O BANCO DE DADOS

$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'exemplo_juliana';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<br><h3>Não conectou</h3>!!! Erro: " . mysqli_connect_error());
}

?>