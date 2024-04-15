<?php
    $paginas = [
        'Principal' => 'index',
        'Exercício 1' => 'exercicio1',
        'Exercicio 2' => 'exercicio2',
        'Exercicio 3' => 'exercicio3'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #FF6600;
            padding: 11px 13px;
            text-align: center;
            color: white;
        }

        a {
            display: flex;
            flex-direction: column;
            margin: 0 10px;
            color: white;
            font-size: 17px;
        }

        nav ul{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

    </style>
</head>
<body>
    <div class="header">
        <header>
            <h1>Avaliação Formadora I</h1>
            <p style="font-weight: bold">Nome: João Pedro Braga</p>
            <p style="font-weight: bold">Matrícula: 22201613</p>
            <nav>
                <ul style="list-style: none">
                    <?php foreach ($paginas as $key => $value) { ?>
                        <li>
                            <a style="text-decoration: none"
                               href="
                                <?php echo $value . '.php'; ?>">
                                <?php echo $key; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </header>
    </div>

    <div>
        <div>

        </div>

        <div>

        </div>
    </div>

</body>
</html>