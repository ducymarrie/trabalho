<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Post - Blog da Ducy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
        <form action="salvar.php" method="post" class="flex items-center justify-center flex-col gap-8">
            <div>
                <h2 class="text-3xl">blog da ducy</h2>
            </div>
            <div>
                <input type="text" class="w-64 border border-1 border-black rounded p-2" placeholder="titulo" name="titulo">
            </div>
            <div>
            <input type="text" class="w-64 border border-1 border-black rounded p-2" placeholder="conteudo" name="conteudo">
            </div>
            <div>
                <label>Data da postagem:</label>
                <input type="date" name="data">
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Postar</button>
            </div>
        </form>
    </main>
</body>
</html>