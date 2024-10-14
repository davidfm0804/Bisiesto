<?php
require 'analizar.php';
// Verificar si se han recibido los parámetros esperados
if (isset($_GET['dia'], $_GET['mes'], $_GET['anio'])) {
    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $anio = $_GET['anio'];

    // Crear una instancia de la clase Fecha
    $objFecha = new Fecha();

    // Ajustar febrero si es un año bisiesto
    $objFecha->ConvertirFecha("$dia/$mes/$anio");

    // Mostrar la cantidad de días del mes y la información
    if (isset($objFecha->meses[$mes])) {
        echo "<h1>Información de la Fecha</h1>";
        echo "<p>La fecha introducida es: $dia/$mes/$anio.</p>";
        echo "<p>El mes de " . $objFecha->meses[$mes][0] . " tiene " . $objFecha->meses[$mes][1] . " días.</p>";
    } else {
        echo "<p>Mes no válido.</p>";
    }
} else {
    echo "<p>No se recibieron los datos necesarios.</p>";
}
?>
