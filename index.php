<!DOCTYPE html>
<html>
<head>
    <title>Formulário PHP</title>
    <style>
        /* Estilos CSS aqui */
    </style>
    <script>
        // Função para exibir o alerta após o envio do formulário
        function exibirAlerta() {
            alert("Formulário enviado com sucesso!");
        }
    </script>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST" onsubmit="exibirAlerta()">
            <!-- Resto do seu código HTML -->
        </form>
    </div>
</body>
</html>