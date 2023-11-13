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

    $carpeta = "../public/Resguardos/" . $Nom . "_" . $Cognoms . "/";
    
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }

    $fileName = basename($_FILES['resguardPagament']['name']);
    $uploadFile = $carpeta . $fileName;

    move_uploaded_file($_FILES['resguardPagament']['tmp_name'], $uploadFile);

    $response->setSession("ID_Usuari", $userModel);
    $response->setSession("Nom", $Nom);
    $response->setSession("Cognoms", $Cognoms);
    $response->setSession("Data", $Data);
    $response->setSession("Carrer", $Carrer);
    $response->setSession("Ciutat", $Ciutat);
    $response->setSession("Postal", $Postal);


    $response->redirect("location: index.php?r=dades");

    return $response;
}
?>
