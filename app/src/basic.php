<?php

declare(strict_types=1);
$a = 'Hello World </br>';
//copie par valeur
$b = $a;
//copie par référence
$b2 = &$a;

//echo $b;
$b = "Bonjour le monde";
//echo $b;

//echo gettype($a);

function test($value)
{
    return 'Bonjour ' . $value . '</br>';
}

// echo match ($a) {
//     //valeur => retour / exec une fonction,
//     'Hello World' => test($a),
//     'Hello World 2' => 'Coucou le monde',
//     default => '</br>default'
// };

//opérateur de fusion
$d = null;
$b = 2;
//echo $c = $d ?? $b ?? 'inconnu';


function my_min(...$rest)
{
    static $count = 0; //garde dans la mémoire globale et non pas seulement dans le scope de la fonction
    global $b; //2
    print_r($rest);
    $count++;
}

//my_min(1, 2, 3);


//callback
function func($callback)
{
    $callback(6);
}

func(function ($e) use ($b) {
    //global $b;
    echo $b + $e;
});

$greetWord = "Bonjour";

$direBonjour = function ($name) use ($greetWord) {
    echo "$greetWord $name <br>";
};

$direBonjour("Paul"); // Bonjour Paul
$direBonjour("Jean"); // Bonjour Jean


//typage de fonction
$test = 42;
$addition = fn (int | float $a, int $b): int | float => $a + $b + $test;

echo $addition(2, 3); // 47

// array_splice ( array &$array , int $offset , int|null $length = null , mixed $replacement = [] ) : array
$tableau = [1, 2, 3, 4];
array_splice($tableau, -2);

print_r($tableau);

/* Array
(
  [0] => 1
  [1] => 2
) */