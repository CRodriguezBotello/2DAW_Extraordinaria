<?php


    // $numero= $_GET["numero"];
    // $medidaI= $_GET["medidaI"];
    // $medidaF= $_GET["medidaF"];

   
// Creamos una función para hacer la conversión
Function conversor(){

    // Array de unidad de medidas, lo pasas todo ametros 

    $medidas = [
        'km'=> 1000,
        'm'=> 1,
        'cm'=> 0.01 
    ];
    
    // Convertir el valor a metros (unidad base que son metros)
    $Vmetros = $_GET["numero"] * $medidas[$_GET["medidaI"]]; 
     

    // Convertir metros a la  unidad final 
    $resultado = $Vmetros / $medidas[$_GET["medidaF"]];

    return $resultado; // Devolver el resultado fuera de la función
}

$resultado = conversor();

header('location:formulario_v2.php?numero='.$numero.'&medidaI='.$_GET["medidaI"].'&medidaF='.$_GET["medidaF"].'&resultado='.$resultado);

?>