<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>



    <?php

        $nome = 'Gustavo';
        $idade = 15;
        $peso = 63.0;

        //operador "." ou .

        echo 'Ola '. $nome . ', vi que você tem ' . $idade . ' anos e pesa ' . $peso . 'kg (aspas simples concatenando)' ;

        echo '<br />';

        echo "Ola $nome, vi que você tem $idade anos e pesa $peso kg (aspas duplas sem concatenar)";

        echo '<br />';

        echo 'Ola $nome, vi que você tem $idade anos e pesa $peso kg (aspas simples sem concatenar)';

        // a utilização de aspas duplas converte $ para variaveis sem a necessidade de .
    ?>

</body>
</html>