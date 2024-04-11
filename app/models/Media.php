<?php
/**
 * Class Media
 * Descrive i media usati nei post
 * @author Daniele Disco
 * @license Boolean s.r.l
 * @copyright 2024 Daniele Disco
 */
class Media
{
    /**
     * @param int $id: Numero identificante il media
     * @param string $url: Uniform Resource Locator del media
     * @param string $type: Tipo dio media: video or immagine
     * @param string $title: Titolo del media
     * @param string $hasRight: Se è necessario pagare dei diritti d'autore per usare il media (default='NO')
     */
    public function __construct(
        private int $id,
        private string $url,
        private string $type,
        private string $title,
        private string $hasRight = 'NO'
    ) {
        $this->id = $id;
        $this->url = $url;
        $this->type = $type;
        $this->title = $title;
        $this->hasRight = $hasRight;
    }

    // Metodi SETTER
    public function set_id(int $id)
    {
        $this->id = $id;
    }
    public function set_url(string $url)
    {
        $this->url = $url;
    }
    public function set_type(string $type)
    {
        $this->type = $type;
    }
    public function set_title(string $title)
    {
        $this->title = $title;
    }
    public function set_right(string $hasRight)
    {
        $this->hasRight = $hasRight;
    }

    // Metodi GETTER
    public function get_id()
    {
        return $this->id;
    }
    public function get_url()
    {
        return $this->url;
    }
    public function get_type()
    {
        return $this->type;
    }
    public function get_title()
    {
        return $this->title;
    }
    public function get_right()
    {
        return $this->hasRight;
    }
}

