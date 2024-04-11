<?php
// Apertura e pulitura della sessione per essere pronto a recuperare il messagio di errore da inviare alla pagina di errori  
session_start();
session_unset();
/**
 * Pagina che implementa lo step tre della Milestone
 * 
 * Inserimento dell'header della pagina
 * Richiamo delle due funzioni utilizzate
 * -------> connect_db per collegarsi al data base
 * -------> extract_data_db per estrarre i dati dal data base
 * Richiamo della classe dataDb per trasportare i dati dal data base alla pagina
 */
require_once __DIR__ . '/app/layout/header.php';
require_once __DIR__ . '/app/functions/connect_db.php';
require_once __DIR__ . '/app/functions/extract_data_db.php';
require_once __DIR__ . '/app/models/dataDb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILESTONE 4: STEP 3</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>

        <div class="container">
            <nav>
                <!-- Menu di navigazione per ritornare alla home -->
                <a href="./index.php">HOME</a>
            </nav>
            <!-- Titolo della pagina -->
            <h2>STEP 3</h2>

            <!-- Riga di intestazione della tabella -->
            <div class="row">
                <div class="head_username">
                    Username
                </div>
                <div class="head_nMedias">
                    Medias Uploaded
                </div>
            </div>
            <?php

            // richiamo della funzione che si collega al data base
            // Parametro di ingresso il nome del db ed in uscita l'oggetto relativo alla connessione
            $connection = connect_db('db-milestone');

            // Definizione della query da implementare
            $sql = "SELECT
                COUNT(*) AS `number_of_medias` , `users`.`username` AS `user_name_and_surname` 
                FROM `medias` 
                JOIN `users` ON `medias`.`user_id` = `users`.`id`
                GROUP BY `medias`.`user_id`  
                ORDER BY `number_of_medias` ASC;";

            // Estrazinoe dal data base dei dati relativi alla query
            // I dati sono nell'arrei $outArray in cui gli elementi sono
            // istanziazione della classe dataDb
            $outArray = extract_data_db($connection, $sql);
            // Dimensione dell'array
            $nLines = count($outArray);
            ?>
            <!-- Riportae in pagina i nomi degli utenti ed il numero di video inviati sulla piattaforma -->
            <?php for ($i = 0; $i < $nLines; $i++): ?>
                <div class="row">
                    <div class="data_username">
                        <?= $outArray[$i]->get_userName() ?>
                    </div>
                    <div class="data_nMedias">
                        <?= $outArray[$i]->get_numMedias() ?>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </main>

    <?php
    // Inserimento del footer della pagina
    require_once __DIR__ . '/app/layout/footer.php';
    ?>
</body>

</html>