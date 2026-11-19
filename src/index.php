<?php

namespace DesignPatterns\Patterns;


require_once("CreationalPatterns/FactoryWorker/FactoryDesigner.php");
require_once("CreationalPatterns/FactoryWorker/FactoryDeveloper.php");
require_once("CreationalPatterns/FactoryWorker/FactoryTester.php");

$designer1 = CreationalPatterns\FactoryWorker\FactoryDesigner::generate("Federico", "De La Piana", "Senior Designer", 8);
$designer2 = CreationalPatterns\FactoryWorker\FactoryDesigner::generate("Radko", "Miloevich", "Designer Assistant", 0.2);

$developer1 = CreationalPatterns\FactoryWorker\FactoryDeveloper::generate("Ivan", "Radoev", "Middle JS Developer", 3);
$developer2 = CreationalPatterns\FactoryWorker\FactoryDeveloper::generate("Rudolf", "Silberstein", "Developer Assistant", 0.1);
$developer3 = CreationalPatterns\FactoryWorker\FactoryDeveloper::generate("Katerina", "Ivanova", "Junior PHP Developer", 2);

$tester1 = CreationalPatterns\FactoryWorker\FactoryTester::generate("Peter", "Green", "Junior Tester", 1.1);
$tester2 = CreationalPatterns\FactoryWorker\FactoryTester::generate("Jane", "Doe", "Testing Approver", 3.1);
$tester3 = CreationalPatterns\FactoryWorker\FactoryTester::generate("Rosaline", "White", "PHP Automate Tester", 4.9);


var_dump($designer1->getName());
var_dump($designer2->getName());
var_dump($designer2->getPosition());
var_dump($designer2->getExperience());

var_dump($developer1->getName());
$developer2->setName("John Doe");
var_dump($developer2->getName());
$developer3->setPosition("Senior Developer");
var_dump($developer3->getPosition());
$developer1->setExperience(1.8);
var_dump($developer1->getExperience());

var_dump($tester1->getName());
var_dump($tester2->getExperience());
var_dump($tester3->getPosition());
$tester1->setName("Petr Zeleny");
$tester2->setExperience(3.3);
$tester3->setPosition("Testing Administrator");
var_dump($tester1->getName());
var_dump($tester2->getExperience());
var_dump($tester3->getPosition());
