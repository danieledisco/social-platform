<?php
/**
 * Class Media
 * Describe a media used in posts
 * @author Daniele Disco
 * @license Boolean s.r.l
 * @copyright 2024 Daniele Disco
 */
class Media
{
    /**
     * @param int $id: Number identifyer media
     * @param string $url: Uniform Resource Locator for the media
     * @param string $type: Type of media: video or image
     * @param string $title: The media title
     * @param string $hasRight: If you have to pay copyright to use the media (default='NO')
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

    // SET methods
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

    // GET methods
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

