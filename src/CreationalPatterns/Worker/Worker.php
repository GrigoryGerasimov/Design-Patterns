<?php

namespace DesignPatterns\Patterns\CreationalPatterns\Worker;

// Factory Pattern

class Worker {
    
    private string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function setName($name): void
    {
        $this->name = $name;
    }
}