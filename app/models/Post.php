<?php
/**
 * Class post
 * Describe post used in social platform
 * @author Daniele Disco
 * @license Boolean s.r.l
 * @copyright 2024 Daniele Disco
 */
class Post
{
    /**
     * @param int $id: Number identifyer post
     * @param string $title: The media title
     * @param string $topic: The main argument the post refer 
     * @param Media $media: A media shown in the post
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

    // GET Methods
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

    // SET Methods
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

    // Fast way to display properties of post
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

