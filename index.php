<?php

$person = [
    'age' => 27,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Caylin';

unset($person['age']);

require 'index.view.php';