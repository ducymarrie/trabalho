<?php 

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM usuario WHERE login_usuario='$login' and senha_usuario='$senha'";
    $conexao = new PDO('mysql:host=localhost; dbname=blogphp', 'root', '');
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();
    $id_logado = $logado['id']; 

    if($logado == null){
        //usuário ou senhas invalidas
        header('Location: usuarioerro.php');
    }else {
        session_start();
        $_SESSION['usuario_logado'] = $id_logado;
        header('Location: index.php');

        die();
    }
    ?>