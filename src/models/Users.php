<?php

namespace Daw;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function inscripcio($Nom, $Cognoms, $Data, $Carrer, $Ciutat, $Postal) {
        $insertStmt = $this->sql->prepare('INSERT INTO usuari (Nom, Cognoms, Dataa, Carrer, Ciutat, Postal) VALUES (:Nom, :Cognoms, :Dataa, :Carrer, :Ciutat, :Postal)');
        $result = $insertStmt->execute([
            ':Nom' => $Nom,
            ':Cognoms' => $Cognoms,
            ':Dataa' => $Data,
            ':Carrer' => $Carrer,
            ':Ciutat' => $Ciutat,
            ':Postal' => $Postal
        ]);
    
        return $result;
    }
    

}