<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 4 </title>
</head>
<body>
   <h1>LP3 Aula 4 - Lucas Lemos de Souza</h1> 
   <h3> 1- Estrutura de repetição FOR</h3>
   <?php       
    for($i = -10; $i < 11; $i++) {
    echo "$i ";
}
   ?>
   <h3>2- Soma de números impáres que são múltiplos de 3 entre 0 e 500</h3>
   <?php
$soma = 0;
for($i = 0; $i < 501; $i++){
    if($i % 2 != 0 | $i % 3 == 0) {
        $soma += $i;}
       } echo "soma de números impáres que são múltiplos de 3 entre 0 e 500 é: $soma ";


   ?>
   <h3>3- Estrutura de Repetição Contagem de 10 em 10</h4>
    <?php 
   for($i = 100; $i >= 0; $i-=10) {
    echo "$i ";
     if($i == 0){
            echo "Acabou";
        }
}
    ?>  
    <h3>4- Estrutura de Repetição PARA com contagem regressiva 100 até 0 com números ímpares divisíveis por 5</h3>
    <?php
        for($i = 99; $i > 0; $i-=2) {
         if($i % 5 == 0){
        echo "[$i] "; 
         } else {
             echo "$i ";
         }  
   }
    ?>
    <h3>5- Estrutura de Repetição PARA, contagem 5 em 5 dos números 150 a 0</h3>
    <?php
        for($i = 150; $i >= 0; $i-=5) {
    echo "$i ";
        }
    ?>
    <h3>6- O mesmo da questão 5 mas usando WHILE</h3>
    <?php
   $i = 150;
    while ($i >=0) {
        echo "$i ";
        $i-=5;
    }
?>
</body>
</html>