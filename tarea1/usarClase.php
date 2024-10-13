<?php
    require_once 'ejemplo.php';

    $objEjemplo = new Ejemplo();
    $objEjemplo->darValor();
    echo $objEjemplo->dato;
?>