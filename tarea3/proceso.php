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

    public function ConvertirFecha($fecha): array {
        $partirFecha = explode("/", $fecha);
        return $partirFecha;
    }

    public function EsBisiesto($fecha) {
        $fechaDividida = $this->ConvertirFecha($fecha);
        $anio = $fechaDividida[2];
        $mes = $fechaDividida[1];

        // Verificar si el año es bisiesto
        if ($anio % 4 == 0 && ($anio % 100 != 0 || $anio % 400 == 0)) {
            $resultado = true;
        } else {
            $resultado = false;
        }

        // Si el mes es febrero (2) y el año es bisiesto, ajustar los días
        if ($mes == 2 && $resultado) {
            $this->meses[2][1] = 29;
        }
    }
}
?>
