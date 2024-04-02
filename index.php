<?php 

class Movie {
    public $titolo;
    public $genero;
    public $anno;
    public $durata;

    function __construct($titolo, $genero, $anno, $durata) {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genero = $genero;
        $this->durata = $durata;
    }

}
    $movie = new Movie("Super Mario Bros", "Animazione", "2023", "92 min.");
    var_dump($movie);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP</title>
</head>
<body>

    <h1>Movies</h1>
    
</body>
</html>