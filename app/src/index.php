<?php
require_once 'projet.php';
require_once 'Reader.php';

use Projet\User;
use Reader\Reader;
// use const Projet\A;
// use function Projet\compter;


$reader = new Reader(__DIR__ . '/test.txt');
$reader->read();

//Instantiate the reflection object
$reflector = new ReflectionClass('Reader\Reader');
//Now get all the properties from class A in to $properties array
$properties = $reflector->getAttributes();
//print_r($properties);

$string1 = "<h1>Opérateur de résolution de portée :: </h1>";

$string2 = "<p> Un attribut statique est lié à une classe et non à un objet --> :: pour l'appeler dans la classe self:: dans l'objet MaClass::MaFonction() </p>";

$string3 = "<p>Une constante de class appartient aussi à une class donc MaClass::Maconstante et ne peut pas être modifiée !!!!! alors qu'un attribut statique oui</p>";
echo $string1;
echo $string2;
echo $string3;
