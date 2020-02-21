<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'Model/Guestbook.php';
require 'Model/Post.php';
require 'Controller/Controller.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
</head>
<body>

<form action="" method="post" name="form">
    <input type="text" name="title"><label for="title">Title</label>
    </br>
    <textarea name="message"></textarea>

    </br>
    <input type="text" name="author"><label for="author">Author</label>
    </br>
    <button type="submit" name="button">Post</button>
    <button type="submit" name="reset" value="reset">destroy</button>

</form>

<?php if (!isset($allPosts)): ?>

<div>
    <p>No posts to show</p>
</div>

<?php else : ?>

<?php
foreach ($allPosts as $post) :
?>
<div>
    <p>----------------------------</p>

    <p><?php echo $post['title'] ?></p>
    <p><?php echo $post['date'] ?></p>
    <p><?php echo $post['message'] ?></p>
    <p><?php echo $post['author'] ?></p>
    <p>----------------------------</p>

</div>
<?php endforeach; endif;?>


</body>
</html>
<?php



//file_put_contents('guestbook.txt', 'ello');