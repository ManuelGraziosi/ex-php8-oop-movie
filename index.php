<?php

require_once "./Traits/HasTimestamp.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

require_once "./db.php";


// $film1_title = "Titanic";
// $film1_description = "Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato...";
// $film1_year = 1997;

// $film1 = new Movie($film1_title, $film1_description, $film1_year, new Genre("Melodramma", ""));
// var_dump($film1);
// $film1->addGenre(new Genre("Rimantico", ""));
// var_dump($film1);

// $film2_title = "Dune";
// $film2_description = "Nell'anno 1019, la famiglia Atreides, destinata al governo del pianeta Arrakis, fondamentale per...";
// $film2_year = 1984;

// $film2 = new Movie($film2_title, $film2_description, $film2_year, new Genre("Fantascienza", ""));
// var_dump($film2);


//var_dump($movies);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>EX - PHP Classe Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>
    <!-- Header Section-->
    <section>
        <?php require_once "./Components/Header.php" ?>
    </section>
    <!-- /Header Section-->

    <!-- Main Section-->
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-6">

                <?php
                foreach ($movies as $movie) {
                    echo '<div class="col d-flex">';
                    include "./Components/MovieCard.php";
                    echo '</div>';
                }

                ?>

            </div>

    </main>
    <!-- /Main Section-->

    <!-- Footer Section-->
    <?php require_once "./Components/Footer.php" ?>
    <!-- /Footer Section-->
</body>

</html>