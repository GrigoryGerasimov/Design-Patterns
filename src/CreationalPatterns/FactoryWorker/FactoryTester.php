<?php

namespace DesignPatterns\Patterns\CreationalPatterns\FactoryWorker;

require_once("FactoryWorkerInterface.php");
require_once("Tester.php");

class FactoryTester implements FactoryWorkerInterface
{
    public static function generate(?string $firstName, ?string $lastName, ?string $position, int|float|null $experience)
    {
        return new Tester($firstName, $lastName, $position, $experience);
    }
}