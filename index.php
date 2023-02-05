<?php
    include __DIR__. "/models/movie-constructor.php";
    include __DIR__. "/models/genre-constructor.php";
    
    $genre1 = new Genre(array("Sci-Fi", "Horror"));
    $genre2 = new Genre(array("Adventure", "Action", "Fantasy"));
    $genre3 = new Genre(array("Adventure", "Action", "Sci-Fi"));

    $movie1 = new Movie('Alien', 1979, 4, $genre1, "https://aforismi.meglio.it/img/film/Alien.jpg");
    $movie2 = new Movie('Stardust', 2007, 3, $genre2, "https://movieplayer.net-cdn.it/t/images/2004/02/10/la-locandina-di-stardust-41184_jpg_400x0_crop_q85.jpg");
    $movie3 = new Movie('Sky Captain And The World Of Tomorrow', 2004, 4, $genre3, "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/aa200ac7607bf1a3e78548795ebedab6f64c4e3c18edd23d2b555f52769b1174._RI_V_TTW_.jpg");

    $movie1->setStars($movie1->vote);
    $movie2->setStars($movie2->vote);
    $movie3->setStars($movie3->vote);

    $arrayFilm = array($movie1, $movie2,$movie3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primo Esercizio OOP</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($arrayFilm as $value) { ?>
                    <div class="col-4">
                        <div class="card">
                            <img class="img-top" src="<?php echo $value->image ?>" alt="">
                            <div class="card-body">
                                <h1 class="my-2"><?php echo $value->title; ?></h1>
                                <h4 class="my-2"><?php echo implode(", ", $value->genre->genre); ?></h4>
                                <h5><?php echo $value->year; ?></h5>
                                <h5 class="my-">it's from: <?php echo $value->getYearsOld(); ?> years ago</h5>
                                <h2 class="text-warning"><?php echo implode(" ", $value->star); ?></h2>
                            </div>
                        </div>
                    </div>
                <?php } ?>    
            </div>
        </div>
    </main>
</body>
</html>