<?php
    session_start(); // Inicia a sessão

    // Verifica se o formulário foi enviado e se os campos de email e senha não estão vazios
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php'); // Inclui o arquivo de configuração do banco de dados
        
        // Obtém os valores dos campos de email e senha do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Constrói a consulta SQL para verificar se o email e a senha correspondem a um usuário no banco de dados
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        // Executa a consulta SQL
        $result = $conexao->query($sql);

        // Verifica se a consulta retornou algum resultado
        if(mysqli_num_rows($result) < 1)
        {
            // Caso não haja resultado, limpa as variáveis de sessão e redireciona para a página de login
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            // Caso haja resultado, armazena o email e a senha na sessão e redireciona para a página do sistema
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Caso o formulário não tenha sido enviado ou os campos estejam vazios, redireciona para a página de login
        header('Location: login.php');
    }
?>
