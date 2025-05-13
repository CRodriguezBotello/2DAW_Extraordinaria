<?php


    $numero= $_GET["numero"];
    $medidaI= $_GET["medidaI"];
    $medidaF= $_GET["medidaF"];
   
// Creamos una función para hacer la conversión
Function conversor($numero, $medidaI, $medidaF){

    // Array de unidad de medidas, lo pasas todo ametros 

    $medidas = [
        'km'=> 1000,
        'm'=> 1,
        'cm'=> 0.01 
    ];
    
    // Convertir el valor a metros (unidad base que son metros)
    $Vmetros = $numero * $medidas[$medidaI]; 
     

    // Convertir metros a la  unidad final 
    $resultado = $Vmetros / $medidas[$medidaF];

    return $resultado; // Devolver el resultado fuera de la función
}

$resultado = conversor($numero,$medidaI, $medidaF);

header('location:formulario_v2.php?numero='.$numero.'&medidaI='.$medidaI.'&medidaF='.$medidaF.'&resultado='.$resultado);

?>