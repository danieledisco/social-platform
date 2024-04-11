<?php
// Pagina inserita per mostrare il data base "pensato" e riportato su pagina drawio
//
// Inserimento dell'header in pagina
require_once __DIR__ . '/app/layout/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILESTONE 4: STEP 1</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <nav>
                <a href="./index.php">HOME</a>
            </nav>
            <!-- Titolo della pagina -->
            <h2>STEP 1</h2>
            <!-- Inserimento dell'immagine -->
            <img src="./schema.png" alt="">
        </div>
    </div>

    <?php
    // Inserimento del footer nella pagina
    require_once __DIR__ . '/app/layout/footer.php';
    ?>
</body>

</html>