<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            //string
            $nome = 'André';
            
            //int
            $idade = 36;

            //float
            $peso = 88.5;

            //boolean
            $fumante_sn = true; //(true = 1) ou (false = vazio)

            //... lógica ...//

            $idade = 30;

        ?>

        <h1>Ficha Cadastral</h1>
        <br/>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ?></p>


    </body>
</html>