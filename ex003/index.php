<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitirvos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $nome = "Fellipe"; // String
        $sobrenome = "Castro"; // String
        $idade = 16; // Int ou integer
        $peso = 85.5; // Float, double ou real(apenas nas versões abaixo da 7.4)
        $casado = false; // Bool ou boolean

        const PAIS = "Brasil";
        const CURSO = "TI";

        // echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;

        // 0x = hexadecimal 0b = binário 0 = octal
        // $num = 010;
        // echo $num;

        // $v = true;
        // var_dump($v)

        // $num = (int) 3e2;
        // var_dump($num);

        // $num = (int) "980";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // echo $casado;

        // $vet = [1, 2.5, "Maria", false, 12];
        // var_dump($vet)

        // class Pessoa {
        //     private string $nome;
        // }

        // $p = new Pessoa;
        // var_dump($p);
    ?>    
</body>
</html>