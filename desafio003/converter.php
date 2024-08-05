<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <section>
        <?php 
            $valor = $_GET["valor"];
            $dolar = 5.58;
            $valorFinal = $valor / $dolar;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ".  numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a ".  numfmt_format_currency($padrao, $valorFinal, "USD") . "</p>";
        ?>

        <a href="index.html">
            <button>
                Voltar
            </button>
        </a>
    </section>
</body>
</html>