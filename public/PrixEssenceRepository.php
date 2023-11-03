<?php

require_once 'PrixEssenceSaver.php';

class PrixEssenceRepository implements PrixEssenceSaver
{
    public function __construct(
        private \DateTimeInterface $now,
        private $driver
    ){}

    public function save(PrixEssence $prixEssence)
    {
        $driver = $this->driver;

        $prixEssence->persist(
            $this->now,
            function ($data) use ($driver) {
                $driver->doSave($data);
            }
        );
    }
}