<?php
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
                <a href="./index.php">HOME</a>
            </nav>
            <h2>STEP 4</h2>

            <?php
            // Creiamo 2 media, uno immagine uno video
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

            // Creiao adesso i due post
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

            <div class="postCard">
                <?php $postVideo->displayPost() ?>
            </div>

            <div class="postCard">
                <?php $postImage->displayPost() ?>
            </div>




        </div>
    </main>
    <?php require_once __DIR__ . '/app/layout/footer.php'; ?>
</body>

</html>