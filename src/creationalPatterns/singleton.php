<?php

namespace DesignPatterns\Patterns\CreationalPatterns;

final class Singleton {
    
    private static ?self $instance = null;
    private static ?string $name = null;
    
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
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
    
    public function __clone(): void
    {
        
    }
}