<?php
require_once('conexao.php');

if ( isset($_POST['txtNome']) && !empty($_POST['txtNome']) &&
    isset($_POST['txtEmail']) && !empty($_POST['txtEmail']) &&
    isset($_POST['txtSenha']) && !empty($_POST['txtSenha']) ) {

    $nome = filter_input(INPUT_POST, 'txtNome');
    $email = filter_input(INPUT_POST, 'txtEmail');
    $senha = trim(password_hash($_POST['txtSenha'], PASSWORD_DEFAULT));

    $cadastar = mysqli_query($con,"INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    if ( $cadastar ) {
        $query = 'SELECT id, nome, email FROM usuarios WHERE email = "' . $email . '"';
        $usuario = mysqli_query($con, $query);

        $dado = mysqli_fetch_assoc($usuario);
        
        $_SESSION['usuario_logado'] = [
            'id' => $dado['id'],
            'nome' => $dado['nome'],
            'email' => $dado['email']
        ];

        header("Location: index.php");
    } else {
        $_SESSION['type'] = 'danger';
        $_SESSION['message'] = 'Não foi possível efetuar o cadastro!';

        header("Location: cadastro.php");
    }
}  else {
    $_SESSION['type'] = 'info';
    $_SESSION['message'] = 'Campos obrigatórios não foram preenchidos!';

    header("Location: cadastro.php");
}