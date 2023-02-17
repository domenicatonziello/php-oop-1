<?php

include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/Genre.php';
include_once __DIR__ . '/data/db.php';

$movie_objects = [];
foreach ($movies as $movie) {
    $movie = new Movie($movie['title'], $movie['plot'], $movie['language'], new Genre($movie['genre']));
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
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <section id="movies">
        <?php foreach ($movie_objects as $movie) : ?>
            <div class="card text-bg-dark m-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie->title ?></h5>
                    <p class="card-text"><?= $movie->PlotPiece() ?></p>
                    <p class="card-text"><?= $movie->language ?></p>
                    <p class="card-text"><?= $movie->genres->name ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</body>

</html>