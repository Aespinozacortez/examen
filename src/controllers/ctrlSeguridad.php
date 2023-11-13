<?php

function ctrlSeguridad($request, $response, $container){

    $response->setTemplate("seguridad.php");

    return $response;
    
}
