<?php

function ctrlConsultas($request, $response, $container){
    $userModel = $container->Users();
    $usuaris = $userModel->all(); 

  
    $response->set("usuaris", $usuaris);

    // Debes pasar los datos a la vista
    $response->setTemplate("consultas.php");

    return $response;
}