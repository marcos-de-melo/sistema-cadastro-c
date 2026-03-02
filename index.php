<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
</head>

<body>
    <header>
        <h1>Sistema de Cadastro</h1>
        <nav>
            <ul>
                <li><a href="index.php?menu=home">Home</a></li>
                <li><a href="index.php?menu=cadastro">Cadastro</a></li>
                <li><a href="index.php?menu=lista">Lista de Cadastro</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        $menu = $_GET['menu'] ?? 'home';
        include($menu . '.php');
        ?>
    </main>
</body>

</html>