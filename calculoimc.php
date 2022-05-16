<?php
    function imc2($valorIMC){

        $faixasIMC = ["Magreza", "Saudável", "Sobrepeso", "Obesidade Grau I", "Obesidade Grau II", "Obesidade Grau III"];
        $valorIMC = number_format($valorIMC, 2, '.');        


        if($valorIMC <= 18.5){
            echo "Atenção seu imc é " . $valorIMC . " e você está classificado como " . $faixasIMC[0];
        }
        else if($valorIMC >= 18.51 && $valorIMC <= 24.99){
            echo "Atenção seu imc é " . $valorIMC . " e você está classificado como " . $faixasIMC[1];
        }
        else if($valorIMC >= 25.00 && $valorIMC <= 29.99){
            echo "Atenção seu imc é " . $valorIMC . " e você está classificado como " . $faixasIMC[2];
        }
        else if($valorIMC >= 30.00 && $valorIMC <= 34.99){
            echo "Atenção seu imc é " . $valorIMC . " e você está classificado como " . $faixasIMC[3];
        }
        else if($valorIMC >= 35.00 && $valorIMC <= 39.99){
            echo "Atenção seu imc é " . $valorIMC . " e você está classificado como " . $faixasIMC[4];
        }
        else{
            echo "Atenção seu imc é " . $valorIMC . " e você está classificado como " . $faixasIMC[5];
        }

    }

    //$valorIMC = (float)readline("Valor do IMC:");
    echo imc2(12);
    
?>