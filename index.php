<?php
// Pagina principale che funge da home dell'applicazione.
// Tramite questa pagina è possibile raggiungere altre pagine in cui sono riportati i
// risultati relati agli STEP1, STEP3 e STEP4 (lo STEP2 è contenuto in una pagina txt)
//
// Aggiunta l'header della pagina
require_once __DIR__ . '/app/layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILESTONE 4: home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <!-- Menu di navigazione per esplorare i vari STEP della MILESTONE -->
        <nav>
            <a href="./index.php">HOME</a>
            <a href="./view_db.php">STEP 1</a>
            <a href="./step3.php">STEP 3</a>
            <a href="./step3error.php">STEP 3 with error</a>
            <a href="./step4.php">STEP 4</a>
        </nav>
    </div>
    <?php
    // Aggiunt il footer della pagina 
    require_once __DIR__ . '/app/layout/footer.php';
    ?>
</body>

</html>