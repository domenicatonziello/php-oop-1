<?php
class Movie
{
    // definisco istanze
    public $title;
    public $plot;
    public $language;
    public $genre;

    // definisco costruttore
    public function __construct($_title, $_plot, $_language, $_genre)
    {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->language = $_language;
        $this->genre = $_genre;
    }
    // definisco metodi
    public function PlotPiece()
    {
        return substr($this->plot, 0, 18) . '...';
    }
}
$first_film = new Movie('Harry Potter', 'lorem ipsum dolor sit amet', 'inglese', 'fantasy');

$second_film = new Movie('Il Signore Degli Anelli', 'lorem ipsum dolor sit amet', 'italiano', 'fantascienza');
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