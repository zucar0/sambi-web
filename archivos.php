<?php

    $archivo = "/assets/Primeras_bicicletas.csv"
    #La función retornará verdadero o falso dependiendo si el archivo existe o no
    if(file_exists($archivo)){
        echo "El archivo existe\n";
        
    }
?>