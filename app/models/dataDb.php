<?php

class dataDb
{
    public function __construct(
        public string $userName,
        public int $numMedias
    ) {
        $this->userName = $userName;
        $this->numMedias = $numMedias;
    }
    public function get_userName()
    {
        return $this->userName;
    }
    public function get_numMedias()
    {
        return $this->numMedias;
    }
}