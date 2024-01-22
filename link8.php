<?php
@session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); // Redireciona para a página de login
    exit();
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

    <!-- Link para o CSS da página -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />

    <script>
        // Função para redirecionar após um período de tempo
        function redirecionarParaLogin() {
            setTimeout(function () {
                alert("Sua sessão expirou. Você será redirecionado para a página de login.");
                window.location.href = "SUA URL/login.php"; // Redireciona para a página de login
            }, 1800000); // 1800000 milissegundos = 30 minutos
        }

        // Função para exibir ou ocultar o submenu do CIC ao passar o mouse
        $(document).ready(function () {
            $("li.cic-submenu").hover(
                function () {
                    $(this).find("ul.submenu-cic").slideDown();
                },
                function () {
                    $(this).find("ul.submenu-cic").slideUp();
                }
            );
        });
    </script>
</head>

<body onload="redirecionarParaLogin()">
    <!-- Cabeçalho (Logotipo e Menu) -->
    <header>
        <div class="main mx-auto tabela-projetos">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo-container">
                        <img src="imagens/logo-governo-do-estado-sp.png">
                    </div>
                </div>
                <div class="col-md-10">
                    <nav class="navbar">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><i class="fas fa-home"></i> Página Inicial</a></li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-building"></i> Coordenadoria
                                    <ul class="submenu">
                                        <li><a href="link1.php">Indicadores 1</a></li>
                                        <li><a href="link2.php">Indicadores 2</a></li>

                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-users"></i> Grupo
                                    <ul class="submenu">
                                        <li><a href="link3.php">Indicadores 3</a></li>
                                        <li><a href="link4.php">Indicadores 4</a></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chart-bar"></i> Outros Dashboards
                                    <ul class="submenu">
                                        <li><a href="link5.php">Indicadores 5</a>
                                        </li>
                                        <li><a href="link6.php">Indicadores 6</a></li>
                                        <li><a href="link7.php">Indicadores 7</a></li>

                                        <li class="cic-submenu">
                                            <a href="#">Centro de Informática e Comunicação - CIC</a>
                                            <ul class="submenu-cic">
                                                <li><a href="link8.php">Indicadores 8</a></li>
                                                <li><a href="link9.php">Indicadores 9</a></li>
                                                <!-- Adicione mais itens de submenu conforme necessário -->
                                            </ul>
                                        </li>

                                    </ul>
                                </a>
                            </li>
                            <li>
                                <!--  <a href="#">
                                    <i class="fas fa-envelope"></i> Gestão de Contatos
                                    <ul class="submenu">
                                        <li><a href="inserir_contato.php">Cadastrar um novo Contato</a></li>
                                        <li><a href="consultar_contato.php">Consultar ou Editar Contato</a></li>
                                        <li><a href="#">Lembretes via E-mail</a></li>
                                    </ul>
                                </a>-->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Conteúdo da Página -->
    <div class="container">
        <div class="jumbotron">
            <h1><i class="fas fa-chart-bar"></i> Indicadores</h1>
            <p>Relatório do Service Desk referente as requisições solicitadas no sistema de chamado</p>
        </div>

        <!-- Div para centralizar o iframe horizontalmente -->
        <!-- <div class="mx-auto" style="width: 1200px;"> -->
        <iframe title="POWER BI" width="1140" height="700" src="SEU LINK DO BI" frameborder="0"
            allowFullScreen="true"></iframe>
        <!--<iframe title="Indicadores 2023" width="1140" height="700"
            src="..."
            frameborder="0" allowFullScreen="true"></iframe>-->

        <!-- </div> -->

    </div>

    <!-- Inclua o JavaScript do Bootstrap (opcional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Rodapé com imagem -->
    <div class="container">
        <img src="imagens\rodape_preto.png" alt="Rodapé" />
    </div>
</body>

</html>