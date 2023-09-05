<?php 
    $url = "https://pokeapi.co/api/v2/pokemon/ditto";
    $response = file_get_contents($url);
    $data = json_decode($response);
    for ($i=0; $i < 2; $i++) { 
        echo $data->abilities[$i]->ability->name."<br>";
    }
    
    foreach ($data->abilities as $pepe) {
        echo $pepe->ability->name."<br>";
    }


?>
