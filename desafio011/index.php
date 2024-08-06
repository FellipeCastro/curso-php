<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando dados do formulário
        $preco = $_POST["preco"] ?? 0;
        $porcentagem = $_POST["porcentagem"] ?? 0;

        // Calculando novo preço
        $formula = ($preco * $porcentagem) / 100;
        $novoPreco = $preco + $formula;
    ?>

    <main>
        <h1>Reajustador de preços</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="preco">Preço do produto (R$):</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>">

            <label for="porcentagem">Qual será a porcentagem de reajuste? (<strong><span id="inputPorcentagem">0</span>%</strong>)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudarPorcentagem()" value="<?= $porcentagem ?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>

        <p>O produto custava R$ <?= number_format($preco, 2, ",", ".") ?>, com <strong><?= $porcentagem ?>% de aumento</strong> vai passar a custar <strong>R$ <?= number_format($novoPreco, 2, ",", ".") ?></strong> a partir de agora.</p>
    </section>

    <script>
        const mudarPorcentagem = () => {
            inputPorcentagem.innerText = porcentagem.value
        }
    </script>
</body>
</html>