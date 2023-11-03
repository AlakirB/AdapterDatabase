<?php
/*
use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
*/

require_once '';

$prixEssence = new PrixEssence;

$repository = new PrixEssenceRepository(
    new DateTime(),
    new Json()
);