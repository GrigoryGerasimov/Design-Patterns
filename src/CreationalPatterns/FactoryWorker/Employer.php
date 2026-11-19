<?php

namespace DesignPatterns\Patterns\CreationalPatterns\FactoryWorker;


require_once("WorkerInterface.php");

abstract class Employer implements WorkerInterface
{
    public function perform(): string
    {
        print_r("Performing.");
    }
    
    public function workInOffice(): string
    {
        print_r("Working in the office.");
    }
    
    public function workAtHome(): string
    {
        print_r("Working at home.");
    }
}