<?php

require_once 'PrixEssenceSaver.php';
require_once 'Database.php';

class PrixEssenceSaverAdapter {
    public function __construct(
        private PrixEssenceSaver $prixEssenceSaver,
        private PDO $connexion,
        private string $sqlQuery = null
    ) {}

    public function generateSqlQuery($data) {
        // generate a sql query from our data (array with prix essence content in it)
        $sqlQuery = "INSERT INTO table VALUES ('"; // missing this part of the query : "value 1', 'value 2', ...)"
        for($i = 0; $i < count($data); $i++) {
            $sqlQuery .= $data[$i]."'";

            if ($i != (count($data) - 1)) {
                $sqlQuery .= ",'";
            }
        }
        $sqlQuery .= ")";

        return $sqlQuery;
    }

    public function save(PrixEssence $prixEssence)
    {
        $driver = $this->prixEssenceSaver->driver;

        $prixEssence->persist(
            $this->prixEssenceSaver->now,
            function ($data) use ($driver) {
                $driver->doSave($this->generateSqlQuery($data), $this->connexion);
            }
        );
    }
}