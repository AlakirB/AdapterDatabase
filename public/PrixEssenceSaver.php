<?php

require_once 'PrixEssence.php';

interface PrixEssenceSaver {
    public function save(PrixEssence $prixEssence);
}