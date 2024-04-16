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

        .main {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding-top: 100px;
        }

        .form form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 10px 10px 5px;
            align-items: center;
        }

        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form form input {
            margin: 5px;
        }

        .form a{
            color: black;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            background-color: #E5E5E5;
            border: 1px solid #4F4F4F;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <header>
            <h1>Avaliação Formadora I</h1>
            <p style="font-weight: bold">Nome: João Pedro Braga Gomes</p>
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

    <div class="main">
        <h1 style="padding-bottom: 20px">Exercício 1</h1>
        <div class="form">
            <?php
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $repeticoes = $_POST['repeticoes'];

                for ($i = 1; $i <= $repeticoes; $i++) {
                    if ($i % 2 == 0) {
                        echo "<p>$i - $sobrenome</p>";
                    } else {
                        echo "<p>$i - $nome</p>";
                    }
                }
            ?>

            <a style="display: flex;
                    justify-content: center;
                    align-items: center"
               class="voltar"
               href="index.php">
                Voltar
            </a>
        </div>
    </div>

</body>
</html>