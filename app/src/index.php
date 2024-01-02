<?php
require_once 'projet.php';

$user = new Projet\User('Paul');
Projet\compter($user->name); // 4
echo '<br>';
echo Projet\A; // 42

//Ou
use Projet\User;
use const Projet\A;
use function Projet\compter;

require_once 'projet.php';

$user = new User('Paul');
compter($user->name); // 4
echo '<br>';
echo A; // 42


class Reader
{
    function __construct(public $filename)
    {
        if (file_exists($filename)) {
            $this->handle = fopen($filename, 'r');
        } else {
            echo "Le fichier n'existe pas";
        }
        echo 'construct call';
    }

    function read()
    {
        echo fread($this->handle, 10);
    }

    function __destruct()
    {
        fclose($this->handle);
        echo 'destruct call';
    }
}


$reader = new Reader(__DIR__ . '/test.txt');

$reader->read();

//****************************************************************** */


class User
{
    public bool $isAdmin = false;

    function __construct(public string $prenom, public string $nom)
    {
    }

    function direBonjour($prenom, $nom)
    {
        echo "Bonjour, je suis $prenom $nom";
    }
}

class Admin extends User
{
    public bool $isAdmin = true;
    function direBonjour($prenom, $nom)
    {
        parent::direBonjour($prenom, $nom);
        echo " et je suis un admin. <br>";
    }
}

$dupont = new Admin('Jean', 'Dupont');
$dupont->direBonjour('Jean', 'Dupont'); // Bonjour, je suis Jean Dupont.
echo $dupont->isAdmin; // 1
