<?php

namespace DesignPatterns\Patterns\CreationalPatterns;

// Singleton Pattern

final class Connector {
    
    private static ?self $instance = null;
    private static ?string $name = null;
    
    private function __construct()
    {
        
    }
    
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        
        return self::$instance;
    }
    
    public static function getInstanceName(): ?string
    {
        return self::$name;
    }
    
    public static function setInstanceName(string $name): void
    {
        self::$name = $name;
    }
    
    public function __wakeup(): void
    {
        
    }
    
    private function __clone(): void
    {
        
    }
}