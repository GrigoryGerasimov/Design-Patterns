<?php

namespace DesignPatterns\Patterns\CreationalPatterns\FactoryWorker;


require_once("Employer.php");

class Developer extends Employer
{
    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?string $position = null;
    private int|float|null $experience = null;
    
    public function __construct(?string $firstName, ?string $lastName, ?string $position, int|float|null $experience)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->experience = $experience;
    }
    
    public function getName(): string
    {
        return "$this->firstName $this->lastName";
    }
    public function setName(?string $name): void
    {
        if ($name)
        {
            $splitName = explode(" ", $name);
            $this->firstName = $splitName[0];
            $this->lastName = $splitName[1];
        }
    }
    
    public function getPosition(): string
    {
        return $this->position;
    }
    public function setPosition(?string $position): void
    {
        if ($position) $this->position = $position;
    }
    
    public function getExperience(): int|float
    {
        return $this->experience;
    }
    public function setExperience(int|float|null $experience): void
    {
        if ($experience) $this->experience = $experience;
    }
    
    public function perform(): string
    {
        print_r("Performing as a Junior Developer.");
    }
    
    public function workInOffice(): string
    {
        print_r("Working in the office on Mondays.");
    }
    
    public function workAtHome(): string
    {
        print_r("Working on home office from Tuesday till Friday.");
    }
}