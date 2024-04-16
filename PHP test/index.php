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
    <link rel="stylesheet" href="CSS/main.css">
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
        <div style="display: flex; flex-direction: column; align-items: center">
            <img src="images/pimba.png" style="max-width: 200px">
            *literalmente eu*
        </div>

        <div class="d1">
            <img src="images/logo_unisuam_horizontal_color.png"
                 style="max-width: 100px; align-items: end">
            <p>Nome: João Pedro Braga Gomes</p>
            <p>Matricula: 22201613</p>
            <p>Curso: Análise e Desenvolvimento de Sistemas</p>
            <p>4º período</p>
        </div>
    </div>

</body>
</html>