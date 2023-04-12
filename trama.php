<?php

for ($i=0; $i < 100 ; $i++) { 
$data = array('numero_aleatorio' => rand(1, 100)); // Generar número aleatorio

header('Content-Type: application/json');
$json = json_encode($data); 
// Convertir a formato JSON


echo  $json; // Imprimir trama JSON

 if ($i < 99) {
        echo ","; // Agregar coma excepto después del último
    }

ob_flush(); // Limpiar búfer de salida
flush(); // Enviar contenido al navegador
sleep(5); // Agregar un delay de 5 segundos
}

?>
