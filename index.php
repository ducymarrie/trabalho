<?php
include 'read.php';
include 'conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do inicial do blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="w-full p-4 bg-blue-600 text-white text-3xl">
        <h1>Blog da ducy</h1> 
       <form action="postar.php">
        <button type="submit">Postar</button>
        </form>
    </header>

    <main class="h-full flex items-center justify-center flex-col gap-4 mt-8">
    <?php
            while ($postagens = mysqli_fetch_assoc($listarSQL)) {
            ?>
        <div class="card w-96 p-8 bg-zinc-300 flex flex-col gap-4">
            <div>
                <h2 class="text-3xl"><?php echo $postagens['titulo_postagem'] ?></h2>
            </div>
            <div>
                <p>
                <?php echo $postagens['conteudo_postagem'] ?>   
            </p>
            </div>
            <div>
                <p class="font-bold"><?php echo $postagens['data_postagem'] ?></p>
            </div>
            <div>
            <a href="delete.php?id_postagens=<?php echo $postagens['id_postagens']; ?>">Excluir</a>
            <a href="update.php?id_postagens=<?php echo $postagens['id_postagens']; ?>">Atualizar</a>
            </div>
        </div>
          
        </div>
<?php
            }
            ?>
    </main>
</body>
</html>