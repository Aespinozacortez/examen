<?php
function ctrlDoInscripcio($request, $response, $container) {

    $Nom = $request->get(INPUT_POST, "Nom");
    $Cognoms = $request->get(INPUT_POST, "Cognoms");
    $Data = $request->get(INPUT_POST, "Data");
    $Carrer = $request->get(INPUT_POST, "Carrer");
    $Ciutat = $request->get(INPUT_POST, "Ciutat");
    $Postal = $request->get(INPUT_POST, "Postal");

    $userModel = $container->Users();
    $userModel = $userModel->inscripcio($Nom, $Cognoms, $Data, $Carrer, $Ciutat, $Postal);

    $response->redirect("location: index.php?r=");


    return $response;
}
?>