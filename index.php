<?php

$movies = [
    [
        "title" => "Avengers - Endgame",
        "originalTitle" => "Avengers: Endgame",
        "genre" => "action",
        "year" => "2012"
    ],
    [
        "title" => "The Avengers",
        "originalTitle" => "Avengers: Infinity War",
        "genre" => "action",
        "year" => "2015"
    ],
    [
        "title" => "Captain Marvel",
        "originalTitle" => "Captain Marvel",
        "genre" => "action",
        "year" => "2019"
    ],
    [
        "title" => "The falcon and the winter soldier",
        "originalTitle" => "The falcon and the winter soldier",
        "genre" => "action",
        "year" => "2021"
    ],
];

class Movie {
    public $title = "";
    public $originalTitle = "";
    public $genre = "";
    public $year = "";


    function  __construct($movie){
        if (array_key_exists("title", $movie)) {
            $this->setTitle($movie["title"]);
        }
        if (array_key_exists("originalTitle", $movie)) {
            $this->setOriginalTitle($movie["originalTitle"]);
        }
        if (array_key_exists("genre", $movie)) {
            $this->setGenre($movie["genre"]);
        }
        if (array_key_exists("year", $movie)) {
            $this->setYear($movie["year"]);
        }
    }

    public function setTitle($_title){
        $this->title = $_title;
    }
    public function setOriginalTitle($_OriginalTitle){
        $this->originalTitle = $_OriginalTitle;
    }
    public function setGenre($_genre){
        $this->genre = $_genre;
    }
    public function setYear($_year){
        $this->year = $_year;
    }

}
?>


<?php

foreach ($movies as $movie) {
    $singleMovie = new Movie($movie);
        echo "<div>";
        echo "<h1>" . $singleMovie->title . "</h1>";
        echo "<p>" . $singleMovie->originalTitle . "</p>";
        echo "<p>" . $singleMovie->genre . "</p>";
        echo "<p>" . $singleMovie->year . "</p>";
        echo "</div>";
    }
    


?>