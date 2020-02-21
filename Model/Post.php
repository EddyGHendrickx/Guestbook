<?php
class Post
{
    private $title;
    private $date;
    private $content;
    private $author;

    /**
     * Post constructor.
     * @param $title
     * @param $date
     * @param $content
     * @param $author
     */
    public function __construct($title, $date, $content, $author)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }



}