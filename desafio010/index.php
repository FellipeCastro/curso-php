<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando dados do formulário
        $nascimento = $_POST["nascimento"] ?? 0;
        $ano = $_POST["ano"] ?? date("Y");

        // Calculando idade
        $idade = $ano - $nascimento;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?= $nascimento ?>">

            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>">

            <input type="submit" value="Qual será minha idade?">
        </form>

        <section>
            <h2>Resultado</h2>

            <p>Quem nasceu em <?= $nascimento ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?></p>
        </section>
    </main>
</body>
</html>