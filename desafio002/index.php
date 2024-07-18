<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100...</p>

        <?php 
            $num = rand(0, 100);

            echo "<p>O número gerado foi <strong>$num</strong></p>";
        ?>

        <form action="index.php" method="get">
            <input type="submit" value="Gerar Número">
        </form>
    </section>
</body>
</html>