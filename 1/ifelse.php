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
        $idade = 16;
        $peso = 63.0;

        echo $nome . '<br />';
        echo $idade . '<br />';
        echo $peso . '<hr />';

        if ($nome == 'Gustavo') {
            echo 'nome veridico :) <br />';
        } else {
            echo 'nome falso >:( <br />';
        }

        if ($nome == 'Gustavo' && $idade == 15 && $peso = 63.0) {
            echo 'todas as informações são veridicas';
        } else {
           echo 'alguma informação esta errada';
        }



    ?>


</body>
</html>