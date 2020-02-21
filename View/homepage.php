<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Guestbook</title>
        <link rel="stylesheet" href="../View/style.css">
    </head>
    <body>

    <form action="" method="post" name="form">
        <input type="text" name="title" required><label for="title">Title</label>
        </br>
        <textarea required name="message"></textarea>

        </br>
        <input type="text" name="author" required><label for="author">Author</label>
        </br>
        <button type="submit" name="button" >Post</button>
        <button type="submit" name="reset" value="reset">destroy</button>

    </form>

    <div id="container">

        <?php if (!isset($allPosts)): ?>

            <div>
                <p>No posts to show</p>
            </div>

        <?php else : ?>

            <?php
            for ($i = 0; count($allPosts) > $i; $i++) :
                ?>
                <div id="post<?php echo $i ?>" class="posts">

                    <p id="title<?php echo$i ?>"><?php echo htmlspecialchars_decode($allPosts[$i]['title'], ENT_QUOTES) ?></p>
                    <p id="date<?php echo$i ?>"><?php echo htmlspecialchars_decode($allPosts[$i]['date'], ENT_QUOTES) ?></p>
                    <p id="message<?php echo$i ?>"><?php echo htmlspecialchars_decode($allPosts[$i]['message'], ENT_QUOTES) ?></p>
                    <p id="author<?php echo$i ?>"><?php echo htmlspecialchars($allPosts[$i]['author'], ENT_QUOTES) ?></p>

                </div>
            <?php endfor; endif; ?>
    </div>

    </body>
    </html>
<?php
