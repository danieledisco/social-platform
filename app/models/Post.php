<?php
/**
 * Class post
 * Descrive il post usato nel social platform
 * @author Daniele Disco
 * @license Boolean s.r.l
 * @copyright 2024 Daniele Disco
 */
class Post
{
    /**
     * @param int $id: NUmero identificante il post
     * @param string $title: Titolo del post
     * @param string $topic: Argomento principale cui si riferisce il post 
     * @param Media $media: Il media mostrato nel post
     */
    public function __construct(
        private int $id,
        private string $title,
        private string $topic,
        private Media $media
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->topic = $topic;
        $this->media = $media;
    }

    // Metodi GETTER
    public function get_id()
    {
        return $this->id;
    }
    public function get_title()
    {
        return $this->title;
    }
    public function get_topic()
    {
        return $this->topic;
    }
    public function get_media()
    {
        return $this->media;
    }

    // Metodi SETTER
    public function set_id(int $id)
    {
        $this->id = $id;
    }
    public function set_title(string $title)
    {
        $this->title = $title;
    }
    public function set_topic(string $topic)
    {
        $this->topic = $topic;
    }

    public function set_media(Media $media)
    {
        $this->media = $media;
    }

    // Metodo per stampare velocemente le caratteristiche del post
    public function displayPost()
    {
        echo "Post ID: " . $this->id . "<br>";
        echo "Title: " . $this->title . "<br>";
        echo "Topic: " . $this->topic . "<br>";
        echo "Media ID: " . $this->get_media()->get_id() . '<br>';
        echo "Media Title: " . $this->get_media()->get_title() . '<br>';
        echo "Media URL: " . $this->get_media()->get_url() . "<br>";
        echo "Media Type: " . $this->get_media()->get_type() . "<br>";
        echo "Media Right: " . $this->get_media()->get_right() . "<br>";
    }
}

