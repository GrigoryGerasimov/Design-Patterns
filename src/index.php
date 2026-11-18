<?php

namespace DesignPatterns\Patterns;

require_once("CreationalPatterns/Singleton.php");

$connectionMySQL = CreationalPatterns\Singleton::getInstance();
print_r($connectionMySQL::getInstanceName());

$connectionMySQL::setInstanceName("MySQL");

$connectionMongo = CreationalPatterns\Singleton::getInstance();
print_r($connectionMongo::getInstanceName());