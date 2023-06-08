<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        
      
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        a {
            color: #0088cc;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 20px;
            display: inline-block;
        }

        .box {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin: 0 auto;
            max-width: 400px;
        }

        form {
            margin-top: 20px;
        }

        .inputBox {
            position: relative;
            margin-bottom: 20px;
        }

        .inputUser {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-bottom: 1px solid #0088cc;
            background-color: transparent;
            color: #555;
        }

        .labelInput {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #0088cc;
            pointer-events: none;
            transition: 0.2s ease all;
        }

        .inputUser:focus + .labelInput,
        .inputUser:valid + .labelInput {
            top: -10px;
            left: 10px;
            font-size: 12px;
            color: #0088cc;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #0088cc;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
   
    
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <script>
        window.addEventListener('DOMContentLoaded', function() {
            var emailInput = document.getElementById('email');

            emailInput.addEventListener('input', function() {
                var email = emailInput.value;

                if (email.includes('@')) {
                    emailInput.setCustomValidity('');
                } else {
                    emailInput.setCustomValidity('Digite um email válido');
                }
            });
        });
    </script>


                <br><br>
                <div class="inputBox">
                    <input type="number" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

            
    

                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
