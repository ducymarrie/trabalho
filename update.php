<?php
    
   require 'conexao.php';
   if(isset($_GET['id_postagens'])){
   $id = $_GET[ 'id_postagens'];
   $sql = mysqli_query($connectionBD, "SELECT * FROM postagens WHERE id_postagens = $id");
   $count = (is_array($sql)) ? count($sql) : 1;
   if($count){ 
       $n = mysqli_fetch_array($sql);
       $titulo = $n['titulo_postagem'];
       $conteudo = $n['conteudo_postagem'];
       $data = $n['data_postagem'];
       
   }}
  

if(isset($_POST['atualizar'])){
   $id = $_GET["id_postagens"];
   $titulo = $_POST["titulo"];
   $conteudo = $_POST["conteudo"];
   $data = $_POST["data"];
   

   $queryUpdate = "UPDATE postagens SET titulo_postagem = '$titulo', conteudo_postagem = '$conteudo', data_postagem = '$data' WHERE id_postagens = $id";
   $consulta = mysqli_query($connectionBD, $queryUpdate);
   header('location: index.php');
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Post - Blog da Ducy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
   
              <form method="POST" class="flex flex-col items-center  gap-4">
                <div>
                  <h2 class="text-3xl">Atualizar Postagem</h2>
                </div>
                <br>
                <div class="mb-3">
                  <label>Titulo</label>
                  <input type="text" name="titulo"  class="w-50 px-4 py-2 border border-black border-1">
                </div>
                <div class="mb-3">
                  <label>Conteudo</label>
                  <input type="text" name="conteudo"  class="w-50 px-4 py-2 border border-black border-1">
                </div>
                <div class="mb-3">
                  <label>Data da postagem</label>
                  <input type="date" name="data"  class="w-50 px-4 py-2 border border-black border-1">
                </div>
                <div class="mb-3">
                  <button type="submit" name="atualizar" class="bg-blue-700 text-white px-4 py-2 rounded">Salvar</button>
                </div>
        </form>
       
    </main>
</body>
</html>