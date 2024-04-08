<?php 
    if (isset($GET["numero1"]) && !empty($GET["numero1"]) && isset($_GET["numero2"]) && !empty($_GET["numero2"]) && isset($_GET["numero3"]) && !empty($_GET["numero3"])) {
        $numero1=$_GET["numero1"];
        $numero2=$_GET["numero2"];   
        $numero3=$_GET["numero3"];
        if ($numero1 > $numero2) {  
            if ($numero1 > $numero3) {
                $mayor=$numero1;
            } else {
                $mayor=$numero3;
            }
        } else {  
            if ($numero2 > $numero3) {
                $mayor=$numero2;
            } else {
                $mayor=$numero3;
            }
        }
        echo "El mayor es: ".$mayor;
    }else{
        echo "Los datos recibidos son incorrectos";
    }
    
    

