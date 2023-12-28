
<?php
//Accesseurs, mutateurs et méthodes magiques


class User2
{

    private string $nomComplet;

    function __construct(private string $prenom, private string $nom)
    {
        $this->nomComplet = $prenom . ' ' . $nom;
    }

    function __isset($prop)
    {
        return isset($this->$prop);
    }

    function __get(string $prop)
    {
        if (isset($this->$prop)) {
            return $this->$prop;
        } else {
            echo "La propriété n'existe pas !";
        }
    }

    function __set(string $prop, string $val)
    {
        $this->$prop = $val;
        if ($prop === 'prenom' || $prop === 'nom') {
            $this->nomComplet = $this->prenom . ' ' . $this->nom;
        }
    }
}

$user1 = new User('Jean', 'Dupont');
echo  $user1->nom, '<br>'; // 1