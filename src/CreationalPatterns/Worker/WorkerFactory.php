<?php

namespace DesignPatterns\Patterns\CreationalPatterns\Worker;


require_once("Worker.php");

class WorkerFactory {
    
    public static function create(string $name): Worker
    {
        return new Worker($name);
    }
}