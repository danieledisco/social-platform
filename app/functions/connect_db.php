<?php

/**
 * Function that establishe a connectio to a data base
 * @param string $db_name
 * @return object|null $connection in case of success|insuccess
 */
function connect_db($db_name)
{
    // Define some variables needed to connect to the data base
    define('DB_SERVERNAME', 'localhost:3306');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', $db_name);

    // Connection and verify if the connection has been established
    try {
        $connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    } catch (Exception $e) {
        $_SESSION['error'] = 'The connection to the database failed' . '<br>' . 'Please check syntax and variables';
        header('Location: ./show_error.php');

        die();
    }
    return $connection;
}