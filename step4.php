<?php
// Inserimento dell'header della pagina
// Richiamo elle due classi Media e Post da istanziare e visualizzare in pagina
require_once __DIR__ . '/app/layout/header.php';
require_once __DIR__ . '/app/models/Media.php';
require_once __DIR__ . '/app/models/Post.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILESTONE 4: STEP 4</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <div class="container">
            <nav>
                <!-- Menu per ritornare alla home -->
                <a href="./index.php">HOME</a>
            </nav>
            <!-- Titolo della pagina -->
            <h2>STEP 4</h2>

            <?php
            // Istanziazione di due oggetti appartenenti alla classe Media
            // Un video
            // Un immagine
            $mediaVideo = new Media(
                13,
                'http://www.example.com/waterfall-video.mp4',
                'video',
                'Waterfall'
            );
            $mediaImage = new Media(
                16,
                'https://en.wikipedia.org/wiki/Donald_Duck#/media/File:Donald_Duck_angry_transparent_background.png',
                'image',
                'Donal Duck',
                'YES'
            );

            // Istanziazione di due oggetti appartenenti alla classe Post in cui una proprietà è un oggetoo della calsse precedentemente istanziata Media
            $postVideo = new Post(
                1313,
                'The Waterfall',
                'Nature',
                $mediaVideo
            );

            $postImage = new Post(
                1616,
                'The Walt Disney World',
                'Comics',
                $mediaImage
            );
            ?>

            <!-- Tramite il metodo displatPost della classe Post si mostrano tutte le caratteristiche dei due post -->
            <div class="postCard">
                <?php $postVideo->displayPost() ?>
            </div>

            <div class="postCard">
                <?php $postImage->displayPost() ?>
            </div>




        </div>
    </main>
    <?php
    // Inserimento del footer
    require_once __DIR__ . '/app/layout/footer.php';
    ?>
</body>

</html>