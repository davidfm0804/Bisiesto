<?php
    Class metodos{
        public function media($a1,$a2,$a3){
            $suma=$a1+$a2+$a3;
            $media=$suma/3;
            return $media;

        }
        public function aprobado($a1,$a2,$a3){
        $media=$this->media($a1,$a2,$a3);
        if($media>=6){
            return true;
        }else{
            return false;
        }
        }
      
    }
?>