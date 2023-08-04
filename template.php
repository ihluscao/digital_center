<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>default</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">


</head>

<body>
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
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Menu animado - SatellaSoft</title>

            <link rel="preload" href="menulateralcss.css" as="style">
            <link rel="preload" href="menuanimado.js" as="script">

            <link rel="stylesheet" href="menulateralcss.css">
        </head>

        <body>

            <header>
                <img src="img/simbolo-do-menu-de-tres-linhas-arredondadas-contornadas.png"
                    alt="Clique para abrir ou fechar o menu" id="btnMenu">
            </header>

            <div id="menu" class="menu effect">
                <nav>
                    <div style="text-align: right;">
                        <!-- <button id="btnClose"><img src="—Pngtree—x lettre neon_6039922.png" alt="sair do menu"></button> -->
                    </div>
                    <ul>
                        <li><a href="#">TUDO</a></li>
                        <li><a href="#">CAMISAS</a></li>
                        <li><a href="#">MOLETONS</a></li>
                        <li><a href="#">CALÇAS</a></li>
                        <li><a href="#">BERMUDAS</a></li>
                        <li><a href="#">CHAPEUS</a></li>
                        <li><a href="">ENTRE EM CONTATO</a></li>
                    </ul>
                </nav>
            </div>

            <script src="js/menu.js"></script>
    </nav>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>