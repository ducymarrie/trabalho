<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
        <form action="loginuser.php" method="post" class="flex items-center justify-center flex-col gap-8">
            <div>
                <h2 class="text-3xl">Entrar no blog</h2>
            </div>
            <div>
                <input name="login"class="w-64 border border-1 border-black rounded p-2" type="text" placeholder="Login:">
            </div>
            <div>
                <input name="senha"class="w-64 border border-1 border-black rounded p-2" type="password" placeholder="Senha:">
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Entrar</button>
            </div>
        </form>
    </main>
</body>
</html>