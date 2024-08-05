<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100...</p>

        <?php 
            $num = mt_rand(0, 100);

            echo "<p>O número gerado foi <strong>$num</strong></p>";
        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </section>
</body>
</html>