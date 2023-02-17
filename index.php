<?php

include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/Genre.php';
include_once __DIR__ . '/data/db.php';


// $first_film = new Movie('Harry Potter', 'lorem ipsum dolor sit amet', 'inglese', [new Genre('fantasy'), new Genre('avventura'), new Genre('fantascienza')]);
// $second_film = new Movie('Il Signore Degli Anelli', 'lorem ipsum dolor sit amet', 'italiano', [new Genre('fantascienza'), new Genre('epico')]);

$movie_objects = [];
foreach ($movies as $movie) {
    $movie = new Movie($movie['title'], $movie['plot'], $movie['language'], $movie['genre']);
    $movie_objects[] = $movie;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>

<body>
    <section id="movies">
        <?php foreach ($movie_objects as $movie) : ?>
            <h1> <?= $movie->title ?></h1>
            <p> <?= $movie->PlotPiece() ?> </p>
            <p><?= $movie->language ?></p>
        <?php endforeach; ?>
    </section>
</body>

</html>