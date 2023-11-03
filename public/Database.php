<?php

class Database {
    public function doSave(string $sqlQuery, PDO $connexion) 
    {
        $stmt = $connexion->createStatement($sqlQuery);
        $stmt->execute();
    }
}