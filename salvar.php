<?php
//Adicionar a conexão com o banco 
include 'conexao.php';
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$data = $_POST['data'];
$sql = mysqli_query($connectionBD, "INSERT INTO postagens(titulo_postagem, conteudo_postagem, data_postagem) VALUES ('$titulo', '$conteudo','$data')");

if ($sql){
    header('Location: index.php');

}


?>