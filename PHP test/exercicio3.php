<?php


$paginas = [
    'Principal' => 'Aluno',
    'Exercício 1' => 'pimba',
    'Exercicio 2' => 'pamba',
    'Exercicio 3' => "tramba"

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #069;
            padding: 8px 10px;
            text-align: center;
        }

        a {
            display: inline-block;
            margin: 0 10px;
            color: black;
            font-size: 17px;
        }
    </style>
</head>
<body>
<h1>Bem-vindo ao AVA Formadora</h1>
<p>Nome: João Pedro Braga</p>
<p>Matrícula: 22201613</p>
<header>
    <nav>
        <ul>
            <?php foreach ($paginas as $key => $value) { ?>
                <li><a href="<?php echo $value . '.php'; ?>"><?php echo $key; ?></a></li>
            <?php } ?>
        </ul>
        <!--            <ul>-->
        <!--                <li><a href="index.php">Principal</a></li>-->
        <!--                <li><a href="exercicio1.php">Exercício 1</a></li>-->
        <!--                <li><a href="exercicio2.php">Exercício 2</a></li>-->
        <!--                <li><a href="exercicio3.php">Exercício 3</a></li>-->
        <!--            </ul>-->
    </nav>
</header>
</body>
</html>