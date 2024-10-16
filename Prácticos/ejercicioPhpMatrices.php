<?php 
    $matriz= [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12], [13, 14, 15, 16]];
 
    function mostrarMatriz($matriz){
        $eje=count($matriz);
        for ($i=0; $i < $eje; $i++) { 
            for ($j=0; $j < $eje; $j++) { 
                echo $matriz[$i][$j]." ";
            }
            echo "<br>";
        }
    }
    function mostrarDiagonal($matriz){
        $eje=count($matriz);
        for ($i=0; $i < $eje; $i++) { 
            for ($j=0; $j < $eje; $j++) { 
                if($i == $j){
                    echo $matriz[$i][$j]." ";
                }else{
                    echo "0 ";
                }
            }
            echo "<br>";
        }
    }

    function mostrarColumna($matriz, $columna){
        $eje=count($matriz);
        for ($i=0; $i < $eje; $i++) 
        { 
            echo $matriz[$i][$columna]." ";
        }
    }

    function mostrarFila($matriz, $fila){
        $eje=count($matriz);
        for ($i=0; $i < $eje; $i++) 
        { 
            echo $matriz[$fila][$i]." ";
        }
    }

    function sumaMatrices($matriz1, $matriz2){
        $eje1=count($matriz1);
        $eje2=count($matriz2);
        for ($i=0; $i < $eje1; $i++) { 
            for ($j=0; $j < $eje2; $j++) {
                echo $matriz1[$i][$j]+$matriz2[$i][$j]." ";
            }
            echo "<br>";
        }
    }

    function esSimetrico($matriz){
        $eje=count($matriz);
        $esSimetrico=true;
        $i=0;
        $j=0; 
        do {
            do {
                if ($i!=$j) {
                    if ($matriz[$i][$j] != $matriz[$j][$i]) {
                        $esSimetrico=false;
                    }
                }
                $j++;
            } while ($esSimetrico && $j < $eje);
            $j=0;
            $i++;
        } while ($esSimetrico && $i<$eje);
        return $esSimetrico;            
    }

    function esSimetrico2($matriz){
        $eje=count($matriz);
        for ($i=0; $i < $eje; $i++) { 
            for ($j=0; $j < $eje; $j++) { 
                if ($i!=$j) {
                    if ($matriz[$i][$j] != $matriz[$j][$i]) {
                        return false;
                    }
                }
            }
        }
        return true;
    }

    mostrarDiagonal($matriz);
    echo "<br>";
    sumaMatrices($matriz, $matriz);


