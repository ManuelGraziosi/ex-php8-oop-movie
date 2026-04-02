<?php

require_once "./Traits/HasTimestamp.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";


$film1_title = "Titanic";
$film1_description = "Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato...";
$film1_year = 1997;

$film1 = new Movie($film1_title, $film1_description, $film1_year, new Genre("Melodramma", ""));
var_dump($film1);
$film1->addGenre(new Genre("Rimantico", ""));
var_dump($film1);

$film2_title = "Dune";
$film2_description = "Nell'anno 1019, la famiglia Atreides, destinata al governo del pianeta Arrakis, fondamentale per...";
$film2_year = 1984;

$film2 = new Movie($film2_title, $film2_description, $film2_year, new Genre("Fantascienza", ""));
var_dump($film2);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>EX - PHP Classe Movie</title>
</head>

<body>
    <h1>EX - PHP Classe Movie</h1>

</body>

</html>