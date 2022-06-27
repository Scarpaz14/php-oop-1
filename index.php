<?php 
    require_once  __DIR__ .'/classes/movie.php';

    $movies = [
        new Movie('Fast And Furios', 'Gary Scott ThoMpson', 'avventura', 2001),
        new Movie('Il padrino', 'Francis Ford Coppola', 'crime', 1972),
        new Movie('Inception', 'Christopher Nolan', 'avventura', 2010) ,
        new Movie('Inception', 'Christopher Nolan', 'avventura', 2010),
        new Movie('Jurassic World ', 'Colin Trevorrow', 'avventura', 2022),
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
                <h3><?php echo $movie->title; ?></h3>
                <small><?php echo $movie->author; ?></small>
                <p><?php echo $movie->genre; ?></p>
                <small><?php echo $movie->year; ?></small>
            </li>
            <?php } ?>
        </ul>

    </div>
   
    
</body>
</html>