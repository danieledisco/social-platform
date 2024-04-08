<?php


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
