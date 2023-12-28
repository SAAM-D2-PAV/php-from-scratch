<?php
trait Trait1
{
    function faireUnCafé()
    {
    }
    function faireLaVaisselle()
    {
    }
}

trait Trait2
{
    public $compteur2 = 0;

    function compter()
    {
        $this->compteur2++;
        echo $this->compteur2, '<br>';
    }
}

class User
{
    use Trait1, Trait2;
}

class Admin
{
    use Trait2;
}

$user = new User();
$admin = new Admin();

$user->compter(); // 1
$user->compter(); // 2
$admin->compter(); // 1