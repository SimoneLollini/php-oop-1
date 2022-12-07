<!-- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<!-- Bonus 1: -->
<!-- Modificare la classe Movie in modo che accetti piú di un genere. -->
<!-- Bonus 2: -->
<!-- Creare un layout completo per stampare a schermo una lista di movies. -->

<?php
class Movie
{
    public $title;
    public $description;
    public $language;
    public $genre;
    public $length;
    public $vote;
    function __construct($title, $description, $language, $genre, $length, $vote)
    {
        $this->title = $title;
        $this->description = $description;
        $this->language = $language;
        $this->genre = $genre;
        $this->length = $length;
        $this->vote = $vote;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }
}


$matrix = new Movie('matrix', 'Lorem ipsum matrix...', 'en', 'science fiction', '200', '7');
// var_dump($matrix);
$avatar = new Movie('Avatar', 'Lorem ipsum avatar...', 'en', 'fantasy', '190', '8');
// var_dump($avatar);

// var_dump($avatar);
$MovieList = [
    $matrix,
    $avatar
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <?php foreach ($MovieList as $movie) : ?>
        <div class="card">
            <div class="title">
                <?php echo $movie->title ?>
            </div>
            <div class="description">
                <?php echo $movie->description ?>

            </div>
            <div class="lang">
                <?php echo $movie->language ?>

            </div>
            <div class="genre">
                <?php echo $movie->genre ?>

            </div>
            <div class="length">
                <?php echo $movie->length ?>

            </div>
            <div class="rating">
                <?php echo $movie->vote ?>

            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>