<?php
class Fecha {
    public array $meses;

    public function __construct() {
        $this->meses = [
            1 => ['Enero', 31],
            2 => ['Febrero', 28],
            3 => ['Marzo', 31],
            4 => ['Abril', 30],
            5 => ['Mayo', 31],
            6 => ['Junio', 30],
            7 => ['Julio', 31],
            8 => ['Agosto', 31],
            9 => ['Septiembre', 30],
            10 => ['Octubre', 31],
            11 => ['Noviembre', 30],
            12 => ['Diciembre', 31]
        ];
    }

    private function EsBisiesto($anio) {
        // Verificar si el año es bisiesto y actualizar febrero
        if ($anio % 4 == 0 && ($anio % 100 != 0 || $anio % 400 == 0)) {
            $this->meses[2][1] = 29; // Ajustar los días de febrero a 29
        }
    }

    public function ConvertirFecha($fecha): array {
        $fechaDividida = explode("/", $fecha);
        $anio = $fechaDividida[2];

        // Llamar a EsBisiesto para ajustar el mes de febrero si es necesario
        $this->EsBisiesto($anio);

        // Devolver la fecha dividida
        return $fechaDividida;
    }
}
?>
