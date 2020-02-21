<?php
class Post
{
    /**
     * @var string $title
     */
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
    public function __construct(string $title, $date, $content, $author)
    {
        $this->title = htmlspecialchars($title, ENT_QUOTES);
        $this->date = htmlspecialchars($date, ENT_QUOTES);
        $this->content = htmlspecialchars($content, ENT_QUOTES);
        $this->author = htmlspecialchars($author, ENT_QUOTES);
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