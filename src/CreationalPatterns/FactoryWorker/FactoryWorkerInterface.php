<?php

namespace DesignPatterns\Patterns\CreationalPatterns\FactoryWorker;

// Factory Method Pattern

interface FactoryWorkerInterface
{
    public static function generate(?string $firstName, ?string $lastName, ?string $position, int|float|null $experience);
}