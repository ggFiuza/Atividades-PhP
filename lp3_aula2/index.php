<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 2</title>
    <h1>Aula 2</h1>
</head>
<body>
    <?php 
    echo "A <br>";
    $boi = 6;
    echo "Isso é um texto: $boi <br>";    
    echo 'Isso tambem é um texto ';
    ?>
    <h3>Lista</h3>
    <ul>
        <?php
            if($boi % 2 == 0){
                $resp = "Par";
            }
            else {
                $resp = "Impar";
            }
        ?>

  <?php  if ($boi%2==0) { ?>
    <li>A variável Xuxu é par</li>
<?php } else {?>
    <li>A variável Xuxu é impar </li>
    <?php }?>
    </ul>
    
</body>
</html>