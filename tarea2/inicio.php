<?php
require 'proceso.php'; // Incluir la clase Proceso

// Verificar si los datos han sido enviados
if (isset($_POST['num1'], $_POST['num2'], $_POST['operacion'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Crear una instancia de la clase Proceso
    $proceso = new proceso();

    // Realizar la operación solicitada
    $resultado = "";
    switch ($operacion) {
        case '+':
            $resultado = $proceso->sumar($num1, $num2);
            break;
        case '-':
            $resultado = $proceso->restar($num1, $num2);
            break;
        case '*':
            $resultado = $proceso->multiplicar($num1, $num2);
            break;
        case '/':
            $resultado = $proceso->dividir($num1, $num2);
            break;
        default:
            $resultado = "Operación no válida.";
            break;
    }

    // Mostrar el resultado
    echo "El resultado de $num1 $operacion $num2 es: $resultado";
} else {
    echo "Por favor, completa todos los campos del formulario.";
}
?>
