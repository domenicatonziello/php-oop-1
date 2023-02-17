<?php
class Movie
{
    // definisco istanze
    public $title;
    public $plot;
    public $language;
    public $genres;

    // definisco costruttore
    public function __construct($_title, $_plot, $_language, $_genres)
    {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->language = $_language;
        $this->genres = $_genres;
    }
    // definisco metodi
    public function PlotPiece()
    {
        return substr($this->plot, 0, 18) . '...';
    }
}

class Genre
{
    public $name;
    public function __construct($_name)
    {
        $this->name = $_name;
    }
}


$first_film = new Movie('Harry Potter', 'lorem ipsum dolor sit amet', 'inglese', [new Genre('fantasy'), new Genre('avventura'), new Genre('fantascienza')]);

$second_film = new Movie('Il Signore Degli Anelli', 'lorem ipsum dolor sit amet', 'italiano', [new Genre('fantascienza'), new Genre('epico')]);

var_dump($first_film);
var_dump($second_film);
echo $first_film->PlotPiece();

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

</body>

</html>