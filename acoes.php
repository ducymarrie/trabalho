
<?php
session_start();
require 'conexao.php';

if (isset($_POST['update_postagem'])) {
	//$postagens_id = mysqli_real_escape_string($conexao, $_POST['id_postagens']);
	$titulo = mysqli_real_escape_string($connectionBD, trim($_POST['titulo']));
	$conteudo = mysqli_real_escape_string($connectionBD, trim($_POST['conteudo']));
	$data = mysqli_real_escape_string($connectionBD, trim($_POST['data']));
	
	$sql = "UPDATE postagens SET titulo_postagem = '$titulo', conteudo_postagem = '$conteudo', data_postagem = '$data'";
	
	mysqli_query($connectionBD, $sql);
	if (mysqli_affected_rows($connectionBD) > 0) {
		$_SESSION['mensagem'] = 'Usuário atualizado com sucesso';
		header('Location: index.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'Usuário não foi atualizado';
		header('Location: index.php');
		exit;
	}
}