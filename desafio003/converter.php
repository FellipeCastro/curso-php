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

            echo "<p>Seus R$ $valor equivalem a US$ $valorFinal</p>";
        ?>

        <a href="index.html">
            <button>
                Voltar
            </button>
        </a>
    </section>
</body>
</html>