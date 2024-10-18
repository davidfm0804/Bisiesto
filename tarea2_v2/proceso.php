<?php
class Proceso {
    private int $mayor;
    private int $menor;
    public function __construct($a,$b){
        if($a>$b){
            $this->mayor=$a;
            $this->menor=$b;
        }else{
            $this->mayor=$b;
            $this->menor=$a;
        }
    }
    public function sumar() {
        return $this->mayor + $this->menor;
    }

    public function restar() {
        return $this->mayor - $this->menor;
    }

    public function multiplicar() {
        return $this->mayor * $this->menor;
    }

    public function dividir() {
        if ($this->menor == 0) {
            return "Error: División por cero no permitida.";
        }
        return $this->mayor / $this->menor;
    }
}
?>
