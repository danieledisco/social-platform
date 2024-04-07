<?php
/**
 * PRIMA FASE 
 * Ci si collega al data base: 
 * si apre un canale per poi poter interrogare il data base tramite le query in mySql
 */

// 1. Definiamo le variabili necessarie alla connessione al data base
define('DB_SERVERNAME', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db-milestone');

// 2. Effettuiamo la connessioe al data base
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// 3. Verifichiamo se la connessione è andata a buon fine, altrimenti interromiamo l'esecuzione (die)
if ($connection && $connection->connect_error) {
    echo 'Connection failed: ' . $connection->connect_error;
    die;
}

// 4. Stampiamo la connessione
var_dump($connection);
// Avendo ottenuto: public 'connect_error' => null siamo confidenti che tutto è andato a buon fine

/**
 * SECONDA FASE
 * Se definisce la query, si interroga il db e si stampa il pagina il risultato
 */

// 1. Definiamo la query
$sql = "SELECT * FROM `users`";

// 2. Interroghiamo il data base
$result = $connection->query($sql);

// 3. Stampiamo in pagina il semplice risultato
if ($result->num_rows > 0):
    while ($row = $result->fetch_assoc()):
        // array destructoring
        ['username' => $username, 'email' => $email] = $row;
        echo $username;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo "<br>";
    endwhile;
endif;

