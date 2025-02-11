<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os valores do formulário
        $dividendo = $_POST["dividendo"] ?? 0;
        $divisor = $_POST["divisor"] ?? 0;

        // Analisando divisão
        $quociente = null;
        $resto = null;

        if ($divisor != 0) {
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        }
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>

        <table class="divisao">
            <tr>
                <?php 
                    echo "<td>$dividendo</td>";
                    echo "<td>$divisor</td>";
                ?>
            </tr>
            <tr>
                <?php 
                    echo "<td>$resto</td>";
                    echo "<td>$quociente</td>";
                ?>
            </tr>
        </table>
    </section>
</body>
</html>