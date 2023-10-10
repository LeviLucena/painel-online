<!DOCTYPE html>
<!-- Desenvolvido por Levi Lucena - https://www.linkedin.com/in/levilucena/ -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Indicadores</title>

    <!-- Inclua o JavaScript do jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <!-- Link para o CSS do Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

        .container-fluid {
            /*background-color: #0c326f; /* Define a cor de fundo */
            /*color: #ffff; /* Define a cor do texto dentro do contêiner para branco (opcional) */
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

        /* Estilo para o contêiner */
        .jumbotron {
            background-color: #0c326f; /* Define a cor de fundo */
            color: #fff; /* Define a cor do texto dentro do contêiner para branco (opcional) */
            padding: 20px; /* Adiciona um espaçamento interno para melhorar o layout */
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

        /* Estilo para os quadros */
        .quadro {
            display: inline-block; /* Para que a div se ajuste ao tamanho da imagem */
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            width: 250px; /* 270 Tamanho dos quadros */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            float: left; /* Alinha os quadros horizontalmente */
        }

        /* Estilo para o contêiner dos quadros */
        .quadro-container {
            text-align: center; /* Centraliza os quadros horizontalmente */
            display: flex; /* Usando flexbox para centralizar horizontalmente */
            justify-content: center; /* Centraliza os quadros horizontalmente */
            flex-wrap: wrap; /* Permite que os quadros quebrem para a próxima linha */
        }

        /* Estilo para as imagens dentro dos quadros */
        .quadro img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        /* Estilo para os títulos dos quadros */
        .quadro h3 {
            font-size: 1.5rem;
        }

        /* Estilo para as descrições dos quadros */
        .quadro p {
            font-size: 1rem;
        }
        </style>
</head>
    <body>
            <!-- Cabeçalho com o logo -->
            <div class="container">
                <header>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">

            <!-- Logo com fundo preto -->
            <div class="navbar-header">
                <a class="#" href="index.php">
                    <div class="logo-container">
                        <img src="imagens\sua logo.png" alt="Logo">
                    </div>
                </a>
            </div>
                
                <!-- Menu de navegação -->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Página Inicial</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Grupo<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gis.php">Grupo de Informática - GI</a>
                        </li>
                            <li><a href="ges.php">Grupo de Equipamentos - GE</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Coordenadoria<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cgc.php">Coordenadoria de Gestão de Contratos - CGC</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Centro<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)">Centro de Informática - CI</a>
                            <ul class="submenu">
                                <li><a href="1.php">Indicadores 1</a></li>
                                <li><a href="2.php">Indicadores 2</a></li>
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
    <div class="jumbotron">
        <h1>Painéis Interativos</h1>
        <p>Explore os painéis interativos: Escolha abaixo o dashboard desejado</p>
    </div>

<div class="quadro-container">   
    <div class="quadro">
        <a href="gis.php"><img src="imagens\gi.png" alt="Painel de Indicadores GI"></a>
        <!-- <h3>Título do Quadro 2</h3>
        <p>Descrição do Quadro 2.</p> -->
    </div>

    <div class="quadro">
        <a href="ges.php"><img src="imagens\ge.png" alt="Painel de Indicadores GE"></a>
        <!-- <h3>Título do Quadro 2</h3>
        <p>Descrição do Quadro 2.</p> -->
    </div>
    
    <div class="quadro">
        <a href="cgcss.php"><img src="imagens\cgc.png" alt="Painel de Indicadores CGC"></a>
        <!-- <h3>Título do Quadro 2</h3>
        <p>Descrição do Quadro 2.</p> -->
    </div>

    <div class="quadro">
        <a href="otrs.php"><img src="imagens\1.png" alt="Painel de Indicadores 1"></a>
        <!-- <h3>Título do Quadro 2</h3>
        <p>Descrição do Quadro 2.</p> -->
    </div>

    <div class="quadro">
        <a href="rdm.php"><img src="imagens\2.png" alt="Painel de Indicadores 2"></a>
        <!-- <h3>Título do Quadro 2</h3>
        <p>Descrição do Quadro 2.</p> -->
    </div>

    <div class="quadro">
        <a href="#"><img src="imagens\construcao.png" alt="Painel em Construção"></a>
        <!-- <h3>Título do Quadro 2</h3>
        <p>Descrição do Quadro 2.</p> -->
    </div>

    <div class="quadro">
        <a href="#"><img src="imagens\construcao.png" alt="Painel em Construção"></a>
        <!-- <h3>Título do Quadro 2</h3>
        <p>Descrição do Quadro 2.</p> -->
    </div>

    <div class="quadro">
        <a href="#"><img src="imagens\construcao.png" alt="Painel em Construção"></a>
        <!-- <h3>Título do Quadro 2</h3>
        <p>Descrição do Quadro 2.</p> -->
    </div>
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
