<?php $saludo='hola';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>Extraordinaria - Factorial</title>
</head>
<body>
    <?php 
        // $num=$_GET["fin"];

        function factorial($num){
            
            if($num==0 || $num==1){ //Factorial de 0. Lleva un die para que no haga el bucle
                $num=1;
                return $num;
            }

            $factorial=$num;

            while($factorial>1){
                $factorial--;
                $num=$num*$factorial;
                
            }

            return $num;
        }

        echo "Solucion: ".factorial($_GET["fin"]);
        
       
    ?>
</body>
</html>