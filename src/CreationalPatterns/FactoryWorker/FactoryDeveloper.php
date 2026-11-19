<?php

namespace DesignPatterns\Patterns\CreationalPatterns\FactoryWorker;


require_once("FactoryWorkerInterface.php");
require_once("Developer.php");

class FactoryDeveloper implements FactoryWorkerInterface
{
    public static function generate(?string $firstName, ?string $lastName, ?string $position, int|float|null $experience)
    {
        return new Developer($firstName, $lastName, $position, $experience);
    }
}