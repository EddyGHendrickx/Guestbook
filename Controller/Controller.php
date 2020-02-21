<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

if (!isset($_POST['title'])) {
    $_POST['title'] = "";
} else {
    $titlePost = $_POST['title'];
}


if (!isset($_POST['message'])) {
    $_POST['message'] = "";

} else {
    $messagePost = $_POST['message'];
}

if (!isset($_POST['author'])) {
    $_POST['author'] = "";
} else {
    $authorPost = $_POST['author'];
}

if (!isset($_POST['reset'])){
    $_POST['reset'] = "";
} elseif ($_POST['reset'] = "reset") {
    session_destroy();
}

$guestbook = new Guestbook();

if(!isset($_SESSION['guestbook'])){
    $_SESSION['guestbook'] = $guestbook;
} else {
    $guestbook = $_SESSION['guestbook'];
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post = new Post($titlePost, date("d/m/Y h:i:sa"), $messagePost, $authorPost);
    $associativePost = array("title"=>$post->getTitle(), "date"=>$post->getDate(), "message"=>$post->getContent(), "author"=>$post->getAuthor());
    $guestbook->pushToAllPosts($associativePost);
    $guestbook->writeToFile($guestbook->convertJSON($guestbook->getAllPosts()));
    var_dump($guestbook->getAllPosts());

    $allPosts = (json_decode(file_get_contents('guestbook.json'), true));
}

