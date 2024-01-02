<?php

namespace Projet;

const A = 42;

function compter(string $chaine)
{
    echo strlen($chaine);
}

class User
{
    function __construct(public string $name)
    {
    }
}
