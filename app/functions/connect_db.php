<?php
/**
 * Function that establishe a connectio to a data base
 * @param string $db_name
 * @return object $connection in case of succecc null in case of insuccess
 */
function connect_db($db_name)
{
    // Define some variables needed to connect to the data base
    define('DB_SERVERNAME', 'localhost:3306');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', $db_name);

    // Connectio to the data base
    $connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Verify if the connection has been established
    if ($connection && $connection->connect_error) {
        echo 'Connection failed: ' . $connection->connect_error;
        $connection = null;
    }

    return $connection;

}