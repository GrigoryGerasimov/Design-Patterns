<?php

namespace DesignPatterns\Patterns;

require_once("CreationalPatterns/Connector.php");

$connectionMySQL = CreationalPatterns\Connector::getInstance();
print_r($connectionMySQL::getInstanceName());

$connectionMySQL::setInstanceName("MySQL");

$connectionMongo = CreationalPatterns\Connector::getInstance();
print_r($connectionMongo::getInstanceName());