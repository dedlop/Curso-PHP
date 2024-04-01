<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            $idade = 18;
            $peso = 55;

            $pessoa_apta = ($idade >= 16 && $idade <= 69) && $peso >= 50 ? true : false;   

        ?>

        <h1>A Pessoa está apta para doar sangue?</h1>
        
        <p>
            <?= $pessoa_apta ? 'SIM' : 'NÃO' ?>
        </p>
        

    </body>
</html>