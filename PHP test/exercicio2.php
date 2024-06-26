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
    <link rel="stylesheet" href="CSS/style.css">
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
        <h1 style="padding-bottom: 20px">Exercício 2</h1>
        <div class="form">
            <form action="exercicio2_login_result.php" method="post">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" placeholder="admin" required>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="admin" required>
                <input type="submit" value="Enviar">
            </form>

            <a style="display: flex;
                justify-content: center;
                align-items: center;"
               href="index.php">
                Voltar
            </a>
        </div>
    </div>

</body>
</html>