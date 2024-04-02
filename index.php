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
    $movie1 = new Movie("Super Mario Bros", "Animazione", "2023", "92 min.");
    // var_dump($movie1);

    $movie2 = new Movie("Oppenheimer", "Suspense", "2023", "180 min.");
    // var_dump($movie2);

    $movie3 = new Movie("1922", "Terrore", "2017", "101 min.");
    // var_dump($movie3);

    $movies = [
        $movie1,
        $movie2,
        $movie3,
    ];
    // var_dump($movies);

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
    <ul>
        <?php 
            foreach ($movies as $movie) {
                echo "
                <li>
                    ". $movie->titolo ." <br> ". $movie->genero ." <br> ". $movie->anno ." <br> ". $movie->durata ."
                </li> <br> ";
            }
        ?>
    </ul>
</body>
</html>