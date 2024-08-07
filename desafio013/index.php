<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando dados do formulário
        $valorSaque = $_POST["valorSaque"] ?? 0;

        // Calculando saque
        $resto = $valorSaque;

        $notas100 = floor($resto / 100);
        $resto %= 100;

        $notas50 = floor($resto / 50);
        $resto %= 50;

        $notas20 = floor($resto / 20);
        $resto %= 20;

        $notas10 = floor($resto / 10);
        $resto %= 10;

        $notas5 = floor($resto / 5);
        $resto %= 5;

        $notas2 = floor($resto / 2);
        $resto %= 2;

        $notas1 = floor($resto / 1);
        $resto %= 1;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="valorSaque">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valorSaque" id="valorSaque" value="<?= $valorSaque ?>" required>

            <p>Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2, R$1</p>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
            <h2>Saque de R$ realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src="img/100-reais.jpg" alt="100 Reais"> X<?= $notas100 ?></li>
                <li><img src="img/50-reais.jpg" alt="50 Reais"> X<?= $notas50 ?></li>
                <li><img src="img/20-reais.jpg" alt="20 Reais"> X<?= $notas20 ?></li>
                <li><img src="img/10-reais.jpg" alt="10 Reais"> X<?= $notas10 ?></li>
                <li><img src="img/5-reais.jpg" alt="5 Reais"> X<?= $notas5 ?></li>
                <li><img src="img/2-reais.jpg" alt="2 Reais"> X<?= $notas2 ?></li>
                <li><img src="img/1-real.jpg" alt="1 Real"> X<?= $notas1 ?></li>
            </ul>
        </section>
</body>
</html>