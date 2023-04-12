<?php

for ($i=0; $i < 100 ; $i++) { 
$data = array('numero_aleatorio' => rand(1, 100)); // Generar número aleatorio

$json = json_encode($data, JSON_PRETTY_PRINT); 
// Convertir a formato JSON
echo '<pre>' . $json . '</pre>'; // Imprimir trama JSON

ob_flush(); // Limpiar búfer de salida
flush(); // Enviar contenido al navegador
sleep(5); // Agregar un delay de 5 segundos
}

?>
