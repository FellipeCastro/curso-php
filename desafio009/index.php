<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando dados do formulário
        $valor1 = $_POST["valor1"] ?? 0;
        $peso1 = $_POST["peso1"] ?? 1;
        $valor2 = $_POST["valor2"] ?? 0;
        $peso2 = $_POST["peso2"] ?? 1;

        // Calculando médias
        $media = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
    ?>

    <main>
        <h1>Médias Aritméticas</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="valor1">1º Valor:</label>
            <input type="number" name="valor1" id="valor1" value="<?= $valor1 ?>">

            <label for="peso1">1º Peso:</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>">

            <label for="valor2">2º Valor:</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor2 ?>">

            <label for="peso2">2º Peso:</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>">

            <input type="submit" value="Calcular médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>

        <p>Analisando os valores <?= $valor1 ?> e <?= $valor2 ?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong><?= number_format($media, 2, ",", ".") ?></strong></li>
            <li>A <strong>Média Aritmética Ponderada</strong> entre os valores com pesos <?= $peso1 ?> e <?= $peso2 ?> é igual a <strong><?= number_format($mediaPonderada, 2, ",", ".") ?></strong></li>
        </ul>
    </section>
</body>
</html>