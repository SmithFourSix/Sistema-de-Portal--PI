<?php
session_start();
include("config.php");

    
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];

//É query feita no mysql para inserir as informações já pegando do metodo post que o usuario digitou na pagina de cadastro
$query = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('{$nome}', '{$usuario}','{$senha}',now())";
//abre a conexão
$result = $conn->query("SELECT COUNT(*) FROM usuario WHERE usuario = '{$usuario}'");
$row = $result->fetch_row();
if ($row[0] > 0) {
    echo"<script type='text/javascript'>alert('Usuario já cadastrado.');window.location.href='index.html';</script>";
}else{
    $conn->query($query);//faz a consulta no banco de dados com a variavel $query
    echo"<script type='text/javascript'>alert('Cadastro realizado com sucesso.');window.location.href='index.html';</script>";
}
?>
