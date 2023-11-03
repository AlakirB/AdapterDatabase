<?php

class Database {
    public function doSave(string $sqlQuery, PDO $connexion) 
    {
        $stmt = $connexion->prepare($sqlQuery);
        $stmt->execute();
    }
}