<?php
class Proceso {
    private function ordenar(&$a,&$b){//a es el mayor y b es el menor
        if($b>$a){
            $aux=$a;
            $a=$b;
            $b=$aux;
        }

    }
    public function sumar($a, $b) {
        $this->ordenar($a,$b);
        return $a + $b;
    }

    public function restar($a, $b) {
        $this->ordenar($a,$b);
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        $this->ordenar($a,$b);
        return $a * $b;
    }

    public function dividir($a, $b) {
     
        if ($b == 0) {
            return "Error: División por cero no permitida.";
        }
        return $a / $b;
    }
}
?>
