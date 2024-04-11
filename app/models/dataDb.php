<?php
/**
 * Class dataDb
 * Possibile oggetti che possono contenere i vari dati estratti da un database
 * In questo caso nome utente e numero media caricati
 * @author Daniele Disco
 * @license Boolean s.r.l
 * @copyright 2024 Daniele Disco
 */
class dataDb
{
    public function __construct(
        public string $userName,
        public int $numMedias
    ) {
        $this->userName = $userName;
        $this->numMedias = $numMedias;
    }

    //Metodi GETTER
    public function get_userName()
    {
        return $this->userName;
    }
    public function get_numMedias()
    {
        return $this->numMedias;
    }

    // Metodi SETTER
    public function set_userName(string $userName)
    {
        $this->userName = $userName;
    }
    public function set_numMedias(int $numMedias)
    {
        $this->numMedias = $numMedias;
    }
}