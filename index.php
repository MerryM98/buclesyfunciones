<?php

echo("clase 4 bucles, arreglos y  funciones");
//array indexado
$arreglo=array("Merilian","Meilyn","Mejia","Palacio");
echo("<br>");
print_r($arreglo);

echo("<br>...................");
// esto es un array asociativo

$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"Merilian",'usuario4'=>"Meilyn");
echo("<br>");
print_r($arreglo);

echo("<br>...................");
//tamaño de arreglo
$tamano=count($arreglo);
echo("<br>");
echo("El tamaño de nuestro arreglo es: ".$tamano);
echo("<br>...................");
//bluces for

for($centinela=0; $centinela<=10; $centinela++)
{
    echo(" <br>El valor de centinela es: ". $centinela."<br>" );
}

//bucle for para recorrer arreglos
echo("<br>...................");
$arreglo=array("Merilian","Meilyn","Mejia","Palacio");


for($centinela=0;$centinela<count($arreglo);$centinela++)

{
    echo("<br>".$arreglo[$centinela]."<br>");
}

//bucle foreach para recorrer arreglos
echo("<br>...................");
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"Merilian",'usuario4'=>"Meilyn");
foreach($arreglo as $clave=>$valor)
{
    echo"<br>"."la clave es: ".$clave."<br>";
    echo "<br>".($valor)."<br>";
}
//bucle foreach para arreglo indexado
echo("<br>...................");
$arreglo=array("Merilian","Meilyn","Mejia","Palacio");

foreach($arreglo as $clave=> $valor)
{
    echo "<br> El valor del cajón es: ".$valor;
    echo "<br> La clave del cajon es : ".$clave;
}



?>  