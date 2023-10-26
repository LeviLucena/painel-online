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
    <style>
        /* Estilos CSS inline para o logo */
        .navbar-brand img {
            max-width: 150px; /* Largura máxima do logo */
            height: auto; /* Altura automática para manter a proporção */
        }

        /* Estilos básicos para o submenu */
        ul {
        list-style-type: none;
        padding: 0;
        }

        li {
        display: inline;
        margin-right: 20px;
        margin-left: 20px;
        position: relative;
        font-size: 20px;
        }

        /* Estilos para o link do submenu */
        .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 10px;
        z-index: 1;
        white-space: nowrap; /* Evita que o submenu quebre para a próxima linha */
        }


        /* Estilo para os itens de menu do submenu (lista vertical) */
        .submenu li {
            display: block; /* Exibe os itens de menu verticalmente */
            margin-bottom: 5px; /* Espaçamento entre os itens de menu */
        }

        li:hover .submenu {
        display: block;
        }

        /* Estilo para a div do logo com fundo preto */
        .logo-container {
            background-color: #000; /* Cor de fundo preto */
            display: inline-block; /* Para que a div se ajuste ao tamanho da imagem */
            padding: 10px; /* Espaçamento interno para o fundo preto */
            border-radius: 0 25px 25px 0; /* Cantos arredondados no canto direito */
        }

        /* Estilo para a imagem da logo */
        .logo-container img {
            max-height: 100px; /* Altura máxima da imagem (ajuste conforme necessário) */
            max-width: 100%; /* Largura máxima da imagem (ajuste conforme necessário) */
        }
        </style>

        <script>
            // Função para redirecionar após um período de tempo
            function redirecionarParaLogin() {
                setTimeout(function() {
                alert("Sua sessão expirou. Você será redirecionado para a página de login.");
                 window.location.href = "SEU DOMINIO AQUI/login.php"; // Redireciona para a página de login
                }, 1800000); // 1800000 milissegundos = 30 minutos
            }
         </script>

</head>
    <body onload="redirecionarParaLogin()">
            <!-- Cabeçalho com o logo -->
            <div class="container">
                <header>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">

            <!-- Logo com fundo preto -->
            <div class="navbar-header">
                <a class="#" href="index.php">
                    <div class="logo-container">
                        <img src="imagens\logo-governo-do-estado-sp.png" alt="Logo">
                    </div>
                </a>
            </div>
                
                <!-- Menu de navegação -->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><i class="fas fa-home"></i> Página Inicial</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-users"></i> Grupo <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gis.php">Grupo de Informática em Saúde - GIS</a></li>
                            <li><a href="ges.php">Grupo de Equipamentos em Saúde - GES</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-building"></i> Coordenadoria <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cgcss.php">Coordenadoria de Gestão de Contratos de Serviços de Saúde - CGCSS</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-building"></i> Centro <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)">Centro de Informática e Comunicação - CIC</a>
                                <ul class="submenu">
                                    <li><a href="otrs.php"><i class="fas fa-chart-bar"></i> Indicadores OTRS</a></li>
                                    <li><a href="rdm.php"><i class="fas fa-chart-bar"></i> Indicadores RDM</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>

<!-- Conteúdo da Página -->
<div class="container">
   <!-- <div class="jumbotron">
        <h1>Painel de Indicadores Grupo de Informática em Saúde - GIS</h1>
        <p>Esta é uma página de exemplo em PHP com um menu dropdown e um logo usando Bootstrap 3.</p>
    </div> -->

    <!-- Coloque o iframe aqui dentro da div.container -->
    <iframe title="Painel GIS" width="1140" height="700" src="SEU LINK BI AQUI" frameborder="0" allowFullScreen="true"></iframe>
</div>

<!-- Inclua o JavaScript do Bootstrap (opcional) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <!-- Rodapé com imagem -->
   <div class="container">
        <img src="imagens\rodape_preto.png" alt="Rodapé" />
    </div>
</body>
</html>
