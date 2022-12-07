<!-- Bonus 1: -->
<!-- Modificare la classe Movie in modo che accetti piú di un genere. -->

<?php
require __DIR__ . '/movie.php';
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
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row pt-5">
            <?php foreach ($MovieList as $movie) : ?>
                <div class="col">
                    <div class="card text-center">
                        <div class="title">
                            Titolo: <?php echo $movie->title ?>
                        </div>
                        <div class="description">
                            Descrizione: <?php echo $movie->description ?>
                        </div>
                        <div class="lang">
                            Lingua originale: <?php echo $movie->language ?>
                        </div>
                        <div class="genre">
                            Genere: <?php echo $movie->genre ?>
                        </div>
                        <div class="length">
                            Durata: <?php echo $movie->length ?>
                        </div>
                        <div class="rating">
                            Voto: <?php echo $movie->vote ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>