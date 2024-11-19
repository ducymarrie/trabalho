<?php 
include 'conexao.php';
$id = $_GET["id_postagens"];

if(isset($_GET['id_postagens'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM postagens WHERE id_postagens = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: index.php');
}
?>