<?php
    class Fecha(){
        public string $mes[12][2];
        
        function  _ _construct($mes){
            $mes = [
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
        private function ConvertirFecha(){
            echo $_GET['dia'];

        }
        private function EsBisiesto(){
            
        }
    }
?>