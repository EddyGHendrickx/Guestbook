<?php
class Guestbook
{
    private $allPosts = [];

    public function getAllPosts()
    {
        return $this->allPosts;
    }

    public function pushToAllPosts($whatToPush)
    {
        array_push($this->allPosts, $whatToPush);
    }

    public function writeToFile($post)
    {
        file_put_contents('guestbook.json', $post);
    }

    public function convertJSON($postObject)
    {
        return json_encode($postObject, JSON_PRETTY_PRINT);

    }
}

