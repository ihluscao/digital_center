<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>default</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preload" href="menulateralcss.css" as="style">
    <link rel="preload" href="menuanimado.js" as="script">

    <link rel="stylesheet" href="menulateralcss.css">
</head>

<body>
<div id="menu" class="menu effect">
        <nav>
            <ul class="ddmenu">
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">SOBRE</a></li>
                <li><a href="products.php">PRODUTOS</a></li>
                <li><a href="contact.php">CONTATO</a></li>
            </ul>
        </nav>
    </div>
    <nav id="upperheader">
        <div class="container">
            <span class="cabecalho">Digital Center</span>
        </div>
        <div class="logo">
            <img src="img/logo.png">
        </div>
        <div class="searchbox">
            <form id="caixa" action="pesquisa.php" method="POST">
                <input id="campopesquisa" type="text" name="search" placeholder="Digite Aqui o que deseja buscar">
                <a href="pesquisa.php"><ion-icon name="search-outline"></ion-icon></a>
            </form>
        </div>
        <div class="rsb">
            <ul class="ulrsb">
                <li><a href="login.php"><ion-icon name="person-circle-outline"></ion-icon>LOGIN</a></li>
            </ul>
        </div>
    <header>
        <img src="img/simbolo-do-menu-de-tres-linhas-arredondadas-contornadas.png"
            alt="Clique para abrir ou fechar o menu" id="btnMenu">
    </header>

    

    </nav>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="menuanimado.js"></script>
</body>

</html>