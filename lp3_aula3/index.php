<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP3 Aula 3</title>
</head>
<body>
    <h1>LP3 Aula 3</h1>

<?php 
for ($i=0; $i<10; $i+=2){
echo "$i<br>";
if ($i==8){
echo "<br><br>";
}
}




$i=1;
while ($i<10){
echo "$i<br>";
$i+=2;
}
?>

<h4>Múltiplos de 3 entre 0 e 100</h4>
<ul>
<?php  for($i=3;$i<100;$i+=3){
?>
    <li>Número:<?= $i?></li>

<?php }
?>

</ul>


<h1>Questão 1</h1>
<?php
for($i=100;$i>=0;$i+=-5){
    echo "$i <br>";
    }
    echo "Acabou!<br>";
?> 

<h1>Questão 2</h1>
<?php

$soma = 0;
$contador = 0;

for($i=14;$i<73;$i++){
$soma+=$i;
$contador++;
}

$media = $soma/$contador;

echo "$media <br>";
?>

<h1>Questão 3</h1>
<?php 
for($i=30;$i>0;$i--){
    if($i%4==0){
    echo "[$i] <br>";
    }
    else {
       echo "$i <br>"; 
    }
    }

?>

</body>
</html>

