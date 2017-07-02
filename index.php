<?php

require 'functions.php';

$animals = ['dog', 'cat'];
$patrons = [
    'Dave' => 21,
    'Archer' => 19,
    'Bertha' => 24,
    'Derpo'  => 13,
    'Harwin' => 33,
];

foreach ($patrons as $patron => $age) {
    if (checkAge($age))
        echo 'Come on in!';
    else
        echo 'Go home, squirt!';

    echo '<br />';
}

//dd($animals);

require 'index.view.php';