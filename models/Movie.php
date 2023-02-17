<?php
include_once __DIR__ . '/Genre.php';
class Movie
{
    // definisco istanze
    public $title;
    public $plot;
    public $language;
    public $genres;

    // definisco costruttore
    public function __construct($_title, $_plot, $_language, Genre $_genres)
    {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->language = $_language;
        $this->genres = $_genres;
    }
    // definisco metodi
    public function PlotPiece($limit = 18)
    {
        return substr($this->plot, 0, $limit) . '...';
    }
}
