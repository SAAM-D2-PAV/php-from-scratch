<?php
abstract class User
{
    public function __construct(public string $nom)
    {
    }

    abstract public function greeting(): string;
}

class Admin extends User
{
    public function greeting(): string
    {
        return "Je suis un admin et je m'appelle $this->nom !";
    }
}

class Moderator extends User
{
    public function greeting(): string
    {
        return "Je suis un modérateur et je m'appelle $this->nom !";
    }
}

class Registered extends User
{
    public function greeting(): string
    {
        return "Je suis un utilisateur et je m'appelle $this->nom !";
    }
}

$admin = new Admin("Jean"); // Je suis un admin et je m'appelle Jean !
echo $admin->greeting();
echo "<br>";

$modo = new Moderator("Paul"); // Je suis un modérateur et je m'appelle Paul !
echo $modo->greeting();
echo "<br>";

$user = new Registered("Bob"); // Je suis un utilisateur et je m'appelle Bob !
echo $user->greeting();
