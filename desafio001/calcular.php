<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <section>
        <?php 
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>Seu antecessor é <strong>$antecessor</strong></p>";
            echo "<p>Seu sucessor é <strong>$sucessor</strong></p>";
        ?>
        <a href="index.html">
            <button>
                Voltar
            </button>
        </a>
    </section>
</body>
</html>