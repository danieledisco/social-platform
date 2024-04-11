<?php

/**
 * Funzione che si connette al database
 * @param string $db_name
 * @return object|null $connection in caso di successo|errore
 */
function connect_db($db_name)
{
    // Definizione di alcune variabili richieste per connettersi al data base
    define('DB_SERVERNAME', 'localhost:3306');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', $db_name);

    /**
     * Connessione al database
     * In caso di successo viene restituito l'oggetto $connection
     * In caso di errore viene restituito null (manca il return) e si valorizza la variabile
     *                globale $_SESSION['error'] con la descrizione dell'errore
     *                e si indirizza l'applicazione alla pagina di errore
     */
    try {
        $connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    } catch (Exception $e) {
        $_SESSION['error'] = 'The connection to the database failed' . '<br>' . 'Please check syntax and variables';
        header('Location: ./show_error.php');

        die();
    }
    return $connection;
}