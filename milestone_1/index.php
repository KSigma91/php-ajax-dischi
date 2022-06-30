<?php
include __DIR__ . '/db/api.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>PHP Ajax dischi</title>
</head>
<body><?php
    include __DIR__ . '/partials/header.php'; ?>

    <div id="app">  
        <main>
            <div class="card-area"><?php
                foreach ($album_list as $album) { ?>
                    <div class="card">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h2>
                                        <?= $album['title'] ?>
                                    </h2>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h3>
                                    <?= $album['author'] ?>
                                    </h3>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>
                                    <?= $album['year'] ?>
                                    </h4>
                                </a>
                            </li>
                        </ul>
                    </div><?php
                } ?>  
            </div>       
        </main>
    </div> 
    
</body>
</html>