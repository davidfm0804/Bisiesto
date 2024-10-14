<?php
require 'proceso.php';

// Obtener la fecha desde el formulario
if (isset($_POST['fecha']) && !empty($_POST['fecha'])) {
    $cadenaFecha = $_POST['fecha'];
    $objFecha = new Fecha();
    
    // Comprobar si es año bisiesto y ajustar febrero si es necesario
    $objFecha->EsBisiesto($cadenaFecha);
    
    // Extraer el mes de la fecha proporcionada
    $fechaDividida = $objFecha->ConvertirFecha($cadenaFecha);
    $mes = $fechaDividida[1]; // El mes proporcionado en la fecha (formato "dd/m/yyyy")

    // Mostrar la cantidad de días del mes
    if (isset($objFecha->meses[$mes])) {
        echo "El mes de " . $objFecha->meses[$mes][0] . " tiene " . $objFecha->meses[$mes][1] . " días.";
    } else {
        echo "Mes no válido.";
    }
} else {
    echo "Por favor, introduce una fecha en el formato correcto (dd/mm/yyyy).";
}
?>
