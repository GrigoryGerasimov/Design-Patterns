<?php

namespace DesignPatterns\Patterns;


require_once("CreationalPatterns/Worker/WorkerFactory.php");

$worker1 = CreationalPatterns\Worker\WorkerFactory::create("Gerardo");
$worker2 = CreationalPatterns\Worker\WorkerFactory::create("Raul");
$worker3 = CreationalPatterns\Worker\WorkerFactory::create("Juan");

var_dump($worker1, $worker2, $worker3);