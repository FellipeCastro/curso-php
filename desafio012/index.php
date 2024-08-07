<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando dados do formulário
        $segundosTotal = $_POST["segundosTotal"] ?? 0;

        // Calculando o tempo
        $semanas = intdiv($segundosTotal, 604800);
        $resto = $segundosTotal % 604800;

        $dias = intdiv($resto, 86400);
        $resto %= 86400;

        $horas = intdiv($resto, 3600);
        $resto %= 3600;

        $minutos = intdiv($resto, 60);
        $segundos = $resto % 60;
    ?>

    <main>
        <h1>Calculadora de tempo</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="segundosTotal">Qual é o total de segundos?</label>
            <input type="number" name="segundosTotal" id="segundosTotal" value="<?= $segundosTotal ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>

        <p>Analisando o valor que você digitou, <strong><?= number_format($segundosTotal, 0, ",", ".") ?></strong> equivalem a um total de:</p>
        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $segundos ?> segundos</li>
        </ul>
    </section>
</body>
</html>