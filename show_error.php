<?php
/**
 * Pagina utilizzata per mostrare un errore accaduto nell'applicazione
 **********************************************************************

 * Estrazione dalla variabile globale $_SESSION[] del messaggio che descrive l'errore accaduto
 */
session_start();
if (!empty($_SESSION['error'])) {
    $message = $_SESSION['error'];
    session_unset();
}

// Inserimento dell'header della pagina
require_once __DIR__ . '/app/layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILESTORE4: Error</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <div class="container">
            <nav>
                <a href="./index.php">HOME</a>
            </nav>
            <div class="lamp">
                ERROR OCCURED!
            </div>
            <h2>Description:</h2>
            <!-- Inserimento del messaggio di errore arrivato tramite $_SESSION[] -->
            <h2><?php echo $message; ?></h2>
        </div>
    </main>
    <?php
    // Inserimento del footer della pagina 
    require_once __DIR__ . '/app/layout/footer.php';
    ?>
</body>

</html>