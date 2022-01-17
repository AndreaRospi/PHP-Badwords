<?php
$paragrafo = "PHP è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero distribuito sotto la PHP License.";
$parolaCensurata = str_replace($_GET['parola'],"***",$paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php bad words</title>
</head>
<body>
    <h2>Paragrafo originale</h2>
    <h3>Totale caratteri paragrafo: <?php echo strlen($paragrafo); ?></h3>
    <p>
        <?php echo $paragrafo;?>
    </p>

    <h2>Paragrafo censurato</h2>
    <p>
        <?php 
         echo $parolaCensurata;
        ?>

    </p>
    
</body>
</html>
