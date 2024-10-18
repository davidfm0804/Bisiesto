<?php
require 'proceso.php'; // Incluir la clase Proceso

// Verificar si los datos han sido enviados
if (isset($_POST['num1'], $_POST['num2'], $_POST['operacion'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Crear una instancia de la clase Proceso
    $proceso = new proceso($num1, $num2);

    // Realizar la operación solicitada
    $resultado = "";
    switch ($operacion) {
        case '+':
            $resultado = $proceso->sumar();
            break;
        case '-':
            $resultado = $proceso->restar();
            break;
        case '*':
            $resultado = $proceso->multiplicar();
            break;
        case '/':
            $resultado = $proceso->dividir();
            break;
        default:
            $resultado = "Operación no válida.";
    }

    // Mostrar el resultado
    echo "El resultado de $num1 $operacion $num2 es: $resultado";
} else {
    echo "Por favor, completa todos los campos del formulario.";
}
?>
