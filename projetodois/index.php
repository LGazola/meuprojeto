<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Luiz</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <nav class="header-nav">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="index.php?pg=quemsomos">
                        Quem somos
                    </a>
                </li>
                <li>
                    <a href="index.php?pg=equipe">
                        Equipe
                    </a>
                </li>
                <li>
                    <a href="index.php?pg=contato">
                        Entre em contato
                    </a>
                </li>
                <li>
                    <a href="index.php?pg=jogos">
                        Jogos
                    </a>
                </li>
            </ul>
        </nav>


    </header>
    <main>
        <?php
        //print_r($_GET);
        
        $pg = $_GET["pg"] ?? "home";
        $pg = "paginas/{$pg}.php";
        if (file_exists($pg)) {
            include $pg;
        } else {
            include "paginas/erro.php";
        }

        ?>
        <h1>
            STorrent
        </h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nesciunt ipsa, atque voluptas iste
            accusantium explicabo voluptatibus beatae vero maiores expedita quae commodi, quo nulla, laudantium aliquid
            tempora illo fugiat.</p>

    </main>
    <footer class="footer">
        <p>Desenvolvido por Luiz Gazola</p>


    </footer>

</body>

</html>