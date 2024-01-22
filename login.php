<?php
session_start(); // Inicie a sessão no início do seu script PHP

// Inicialize a variável $erro como falsa (nenhum erro ocorreu)
$erro = false;

/* Restante do seu código */
if (isset($_POST['submit'])) {
    $username = @$_REQUEST['username'];
    $password = @$_REQUEST['password'];

    /* Declaração das variáveis que possuem os usuários e as senhas criptografadas */
    $user1 = 'Fulano';
    $hash1 = '$2a$12$/KR4DMFvni1larPZAziwQuWjK0zpEm7yzqidu2akuB1C61Re/ryqu'; // Senha criptografada

    $user2 = 'Visitante';
    $hash2 = '$2a$12$cD61IVEM9AML1KcNxELwbu5X56V5sYMITg5HfYqsWWmN8SblL9kce'; // Senha criptografada

    /* Testa se o botão submit foi ativado */
    if ($username == $user1 && password_verify($password, $hash1)) {
        // Usuário e senha corretos, redirecione
        $_SESSION['usuario'] = $username;
        $_SESSION['senha'] = $password;
        header("Location: SUA URL/index.php");
        exit(); // Encerre o script aqui após o redirecionamento
    } elseif ($username == $user2 && password_verify($password, $hash2)) {
        // Usuário e senha corretos, redirecione
        $_SESSION['usuario'] = $username;
        $_SESSION['senha'] = $password;
        header("Location: SUA URL/index.php");
        exit(); // Encerre o script aqui após o redirecionamento
    } else {
        // Nome de usuário ou senha incorretos, marque a variável $erro como verdadeira
        $erro = true;
    }
}
?>

<!DOCTYPE html>
<!-- Desenvolvido por Levi Lucena - https://www.linkedin.com/in/levilucena/ -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imagens/bi.ico">

    <title>Painel de Indicadores</title>

    <!-- Inclua o JavaScript do jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Link para o CSS do Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Estilos CSS inline para o logo */
        .navbar-brand img {
            max-width: 150px;
            /* Largura máxima do logo */
            height: auto;
            /* Altura automática para manter a proporção */
        }

        /* ... Outros estilos ... */
    </style>

    <script>
        function validarFormulario() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "" || password === "") {
                alert("Por favor, preencha todos os campos.");
                return false; // Impede o envio do formulário
            }
        }
    </script>

</head>

<body>
    <!-- Tela de Login -->
    <div class="container">
        <div class="jumbotron">
            <h1><i class="fas fa-chart-bar"></i> Painel de Indicadores</h1>
            <p>Por favor, faça login para acessar o painel.</p>
            <form method="post" onsubmit="return validarFormulario();">
                <div class="form-group">
                    <label for="username">Usuário:</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Entrar</button>
                <?php if ($erro) { ?>
                    <!-- Exibe a mensagem de erro apenas quando $erro for verdadeiro -->
                    <p style="color: red;">Usuário e/ou senha inválidos. Tente novamente!</p>
                <?php } ?>

            </form>



        </div>
    </div>
    <!-- Inclua o JavaScript do Bootstrap (opcional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Rodapé com imagem -->
    <div class="container">
        <img src="imagens\rodape_preto.png" alt="Rodapé" />
    </div>

</body>

</html>