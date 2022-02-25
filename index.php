<?php
require_once __DIR__.'/classes/Movie.php';

$program = [
    new Movie("Big fish", "Fantay"),
    new Movie("Old boy", "Thriller"),
    new Movie("Joker", "Thriller"),
];


$program[0]->setyear("2003");
$program[1]->setyear("2003");
$program[2]->setyear("2019");
var_dump($program);