<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<h1> Código PHP </h1>
    <?php
        //string
        $nome = 'Gustavo <br />';
        echo $nome;

        //numero
        $idade = 15;
        echo $idade;
        echo '<br />';

        //boolean
        $veridico = true;
        echo $veridico;
        // 1 = Verdadeiro, Funcionado, Certo, Veridico...
        // Nada impresso = Falso, Erro, Errado...
    ?>
    <hr>
    <h1> Testando com HTML </h1>
    <p> nome: <?= $nome ?></p>
    <p> idade: <?= $idade ?></p>
    <p> Essa afirmação é verdadeira?: <?= $veridico ?></p>

    <?php
        // a alteração pode ser feita durante o codigo

        $idade = 14;
        $veridico = false;
    ?>
    <hr>
    <h1> Alterando valores... </h1>
    <p> nome: <?= $nome ?></p>
    <p> idade: <?= $idade ?></p>
    <p> Essa afirmação é verdadeira?: <?= $veridico ?></p>
</body>
</html>