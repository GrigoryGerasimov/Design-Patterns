<?php

namespace DesignPatterns\Patterns\CreationalPatterns\FactoryWorker;


require_once("FactoryWorkerInterface.php");
require_once("Designer.php");

class FactoryDesigner implements FactoryWorkerInterface
{
    public static function generate(?string $firstName, ?string $lastName, ?string $position, int|float|null $experience)
    {
        return new Designer($firstName, $lastName, $position, $experience);
    }
}