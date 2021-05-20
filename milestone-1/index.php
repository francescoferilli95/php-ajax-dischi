<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <!-- STYLES -->
    <link rel="stylesheet" href="./css/main.css">
    <title>PHP Dischi</title>
</head>
<body>
    
    <?php include_once __DIR__ . './partials/header.php'; ?>

    <main>
        <div class="container">

            <?php include_once __DIR__ . './partials/database.php'; ?>

                <?php foreach ($database as $disc) {
                    // var_dump($disc); ?> 
                    <div class="box">
                        <img src="<?php echo $disc['poster']; ?>" alt="Disc Poster Img">
                        <h3><?php echo $disc['title']; ?></h3>
                        <h4><?php echo $disc['author']; ?></h4>
                        <h3><?php echo $disc['year']; ?></h3>
                        <h4><?php echo $disc['genre']; ?></h4>
                    </div>
               <?php } ?>
        </div>
    </main>

</body>
</html>