<?php

/**
 * Funzione che estrae i dati dal database selzionati mediante una query
 * @param object $connection oggetto ottenuto dalla connessione al data base
 * @param string $sql Stringa contenente la query
 * @return array $out Array contenente oggetti istanza della classe dataDb con i dati estratti dal Data base 
 */
function extract_data_db($connection, $sql)
{
    $result = $connection->query($sql);
    $out = [];
    $i = 0;
    if ($result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
            // array destructoring
            ['number_of_medias' => $number_of_medias, 'user_name_and_surname' => $user_name_and_surname] = $row;
            $out[$i] = new dataDb($user_name_and_surname, $number_of_medias);
            $i++;
        endwhile;
    endif;

    return $out;
}
