<?php 
    require_once  __DIR__ .'/classes/movie.php';

    $movies = [
        new Movie('Fast And Furios', 'Gary Scott ThoMpson', 'avventura', 2001,'https://cdn.pocket-lint.com/r/s/1200x630/assets/images/148310-tv-feature-what-order-should-you-watch-the-fast-and-furious-films-in-image1-rzgajwfo2x.jpg'),
        new Movie('Il padrino', 'Francis Ford Coppola', 'crime', 1972, 'https://www.2duerighe.com/wp-content/uploads/2022/03/THE-GODFATHER-ANNIVERSARY.jpg'),
        new Movie('Inception', 'Christopher Nolan', 'avventura', 2010, 'https://mr.comingsoon.it/imgdb/locandine/big/47397.jpg') ,
        new Movie('Jurassic World ', 'Colin Trevorrow', 'avventura', 2022, 'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_JurassicWorldEvolution2_FrontierDevelopments_S6_1200x1600-56055d1e93c502852ccc0f9578094e5d'),
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin: auto; width: 1400px; text-align:center">
        <header>
            <h1>Scarpa Cinema</h1>
        </header>
        <ul>
            <?php foreach($movies as $movie) { ?>
            <li style="list-style:none;">
                <img style="width: 300px ;"  src="<?php echo $movie->image; ?>" alt="">
                <h3><?php echo $movie->title; ?></h3>
                <small> Author:<?php echo $movie->author; ?></small>
                <p>Genre:<?php echo $movie->genre; ?></p>
                <small>Year:<?php echo $movie->year; ?></small>
            </li>
            <?php } ?>
        </ul>

    </div>
   
    
</body>
</html>