<?php

$action = new Genre('Action');
$fantasy = new Genre('Fantasy');
$drama = new Genre('Drama');
$thriller = new Genre('Thriller');
$sciFi = new Genre('Sci-Fi');


$movie1 = new Movie(
    'Inception',
    'Un ladro entra nei sogni per rubare segreti.',
    2010,
    $sciFi
);
$movie1->addGenre($action);
$movie1->addGenre($thriller);

$movie2 = new Movie(
    'The Shawshank Redemption',
    'Un uomo innocente trova speranza in prigione.',
    1994,
    $drama
);


$movie3 = new Movie(
    'The Dark Knight',
    'Batman affronta il caos portato dal Joker.',
    2008,
    $action
);
$movie3->addGenre($thriller);


$movie4 = new Movie(
    'Interstellar',
    'Un viaggio nello spazio per salvare l’umanità.',
    2014,
    $sciFi
);
$movie4->addGenre($drama);
$movie4->addGenre($fantasy);

$movie5 = new Movie(
    'The Matrix',
    'Un hacker scopre la vera natura della realtà.',
    1999,
    $sciFi
);
$movie5->addGenre($action);

$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5
];