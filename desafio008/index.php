<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando dados do formulário
        $numero = $_POST["numero"] ?? 0;

        // Calculando raizes
        $raizQuadrada = sqrt($numero);
        $raizCubica = $numero ** (1/3);
    ?>

    <main>
        <h1>Informe um número</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>">

            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>

        <p>Analisando o <strong>Número <?= $numero ?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?= number_format($raizQuadrada, 3, ",", ".") ?></strong></li>
            <li>A sua raiz cúbica é <strong><?= number_format($raizCubica, 3, ",", ".") ?></strong></li>
        </ul>
    </section>
</body>
</html>