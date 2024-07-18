<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de número real</h1>
    </header>
    <section>
        <?php 
            $numero = $_GET["numero"];
            $parteInt = intval($numero);
            $parteFrac = substr(strpbrk($numero, '.,'), 1);

            echo "$num";
            echo "$parteInt";
            echo "$parteFrac";
        ?>
    </section>
</body>
</html>