<?php

namespace DesignPatterns\Patterns\CreationalPatterns\FactoryWorker;


interface WorkerInterface
{
    public function perform(): string;
    public function workInOffice(): string;
    public function workAtHome(): string;
}