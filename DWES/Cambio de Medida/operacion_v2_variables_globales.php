<?php
        /*Esta version no funciona ya que las variables que estan dentro de la funcion se estan refiriendo
        a funciones locales creadas en la propia funcion. En este caso, al no tener variabes definidas, da error.
        Para que funcione, debemos poner dentro de la funcion "global" junto a las variables, sabra que nos 
        referimos a las variables globales creadas anteriormente*/

    $numero= $_GET["numero"];
    $medidaI= $_GET["medidaI"];
    $medidaF= $_GET["medidaF"];
   
Function conversor(){

    global $numero, $medidaI, $medidaF;
    
    $medidas = [
        'km'=> 1000,
        'm'=> 1,
        'cm'=> 0.01 
    ];
    
    $Vmetros = $numero * $medidas[$medidaI]; 
     
    $resultado = $Vmetros / $medidas[$medidaF];

    return $resultado; 
}

$resultado = conversor();

header('location:formulario_v2.php?numero='.$numero.'&medidaI='.$medidaI.'&medidaF='.$medidaF.'&resultado='.$resultado);

?>