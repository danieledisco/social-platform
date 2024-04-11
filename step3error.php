<?php
// Apertura e pulitura della sessione per essere pronto a recuperare il messagio di errore da inviare alla pagina di errori  
session_start();
session_unset();
/**
 * Pagina del tutto identica a step3.php ma nella connessione al data base, è stato appositamente 
 * un errore nel nmome del data base (esatto db-milestone sbagliato dbmilestone) per poter
 * vedere come si comporta l'applicazione in caso di errore
 */
require_once __DIR__ . '/app/layout/header.php';
require_once __DIR__ . '/app/functions/connect_db.php';
require_once __DIR__ . '/app/models/dataDb.php';
require_once __DIR__ . '/app/functions/extract_data_db.php';
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
                <a href="./index.php">HOME</a>
            </nav>
            <h2>STEP 3</h2>
            <div class="row">
                <div class="head_username">
                    Username
                </div>
                <div class="head_nMedias">
                    Medias Uploaded
                </div>
            </div>
            <?php
            $connection = connect_db('dbmilestone');
            /***********************************************************************************************************/
            $sql = "SELECT
                COUNT(*) AS `number_of_medias` , `users`.`username` AS `user_name_and_surname` 
                FROM `medias` 
                JOIN `users` ON `medias`.`user_id` = `users`.`id`
                GROUP BY `medias`.`user_id`  
                ORDER BY `number_of_medias` ASC;";

            $outArray = extract_data_db($connection, $sql);
            $nLines = count($outArray);
            ?>

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
    require_once __DIR__ . '/app/layout/footer.php';
    ?>
</body>

</html>