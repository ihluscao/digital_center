<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>default</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav id="upperheader">
        <div class="container">
            <span class="cabecalho">Digital Center</span>
        </div>
        <div class="logo">
            <img src="img/sub.png">
        </div>
        <div class="searchbox">
            <form id="caixa" action="pesquisa.php" method="POST">
                <input id="campopesquisa" type="text" name="search" placeholder="Digite Aqui o que deseja buscar">
                <a href=""><ion-icon name="search-outline"></ion-icon></a>
            </form>
        </div>
        <div class="rsb">
            <ul class="rsb"></ul>
        </div>
    </nav>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>