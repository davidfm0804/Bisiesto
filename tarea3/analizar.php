<?php
require 'proceso.php'; // Asegúrate de incluir el archivo de la clase correcta

// Obtener la fecha desde el formulario
if (isset($_POST['fecha']) && !empty($_POST['fecha'])) {
    $cadenaFecha = $_POST['fecha'];
    $objFecha = new Fecha();
    
    // Extraer el día, mes y año de la fecha proporcionada y ajustar febrero si es bisiesto
    $fechaDividida = $objFecha->ConvertirFecha($cadenaFecha);
    $dia = $fechaDividida[0]; // El día proporcionado en la fecha
    $mes = $fechaDividida[1]; // El mes proporcionado en la fecha
    $anio = $fechaDividida[2]; // El año proporcionado en la fecha

    // Redirigir a resultado.php pasando los datos en la URL
    header("Location: visualizar.php?dia=$dia&mes=$mes&anio=$anio");
}   
?>
