<?php

function ctrlInscripcio($request, $response, $container){

    $response->setTemplate("inscripcio.php");

    return $response;
    
}