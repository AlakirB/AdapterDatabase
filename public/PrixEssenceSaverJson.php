<?php

require_once 'PrixEssenceSaver.php';
require_once 'Json.php';

class PrixEssenceSaverJson{
    public function __construct(
        private PrixEssenceSaver $prixEssenceSaver,
        private string $filePath,
        private string $jsonData
    ) {}


    public function save(PrixEssence $prixEssence)
    {
        $driver = $this->prixEssenceSaver->driver;

        $prixEssence->persist(
            $this->prixEssenceSaver->now,
            function ($data) use ($driver) {
                $this->jsonData = json_encode($data);
                $driver->doSave($this->filePath, $this->jsonData);
            }
        );
    }
}