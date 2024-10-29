<?php
    //require con los metodos y el main donde va a ocurrir el programa
    require_once 'metodos.php';

    $nombre = $_POST['nombre'];
    $notaHistoria = $_POST['notaH'];
    $notaLengua = $_POST['notaL'];
    $notaMates = $_POST['notaM'];

    $objMetodos=new metodos();
    
    $notaMedia=$objMetodos->media($notaHistoria,$notaLengua,$notaMates);
    echo "El alumno ".$nombre." tiene una nota media de ".$notaMedia."<br/>";

    if($objMetodos->aprobado($notaHistoria,$notaLengua,$notaMates)){
        echo "Esta aprobado";
    }else{
        echo "Esta suspenso";
    }
?>