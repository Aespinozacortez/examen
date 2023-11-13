<?php

function ctrlDades($request, $response, $container){



    $Nom = $request->get("SESSION","Nom");
    $Cognoms = $request->get("SESSION","Cognoms");
    $Data = $request->get("SESSION","Data");
    $Carrer = $request->get("SESSION","Carrer");
    $Ciutat = $request->get("SESSION","Ciutat");
    $Postal = $request->get("SESSION","Postal");
    $ID_Usuari = $request->get("SESSION","ID_Usuari");


    $response->set("Nom",$Nom);
    $response->set("Cognoms",$Cognoms);
    $response->set("Data",$Data);
    $response->set("Carrer",$Carrer);
    $response->set("Ciutat",$Ciutat);
    $response->set("Postal",$Postal);
    $response->set("ID_Usuari",$ID_Usuari);


    

    $response->setTemplate("dades.php");

    return $response;
    
}