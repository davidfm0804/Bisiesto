<?php
     require_once 'proceso.php';
     
    
     $objFecha->$mes[1][0];
     echo $objFecha;
?>
<?php
    require 'proceso.php'
    $cadenaFecha=$_POST['fecha'];
    $objFecha=new Fecha();
    $objFecha->EsBisiesto($cadenaFecha);
    

?>