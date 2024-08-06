<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os valores do formulário
        $salario = $_POST["salario"] ?? 0;

        // Salário mínimo
        $salarioMin = 1412;

        // Calculando resultado final
        $quociente = intdiv($salario, $salarioMin);
        $resto = $salario % $salarioMin;
    ?>

    <main>
        <h1>Informe seu Salário</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="salario">Salário:</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $salarioMin ?>">

            <input type="submit" value="Calcular">
        </form>

        <p>Considerando o salário mínimo de  <strong>R$ <?= number_format($salarioMin, 2, ",", ".") ?></strong></p>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <p>Quem recebe um salário de R$ <?= number_format($salario, 2, ",", ".") ?> ganha <strong><?= $quociente ?> Salários mínimos</strong> + <strong>R$ <?= number_format($resto, 2, ",", ".") ?></strong></p>
    </section>
</body>
</html>