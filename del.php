<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Del</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf8">

</head>
<body>
<form action="delP.php" method="post">
    <div>Удалить пост #</div>
    <input type="text" name="postId">
    <button type="submit">Удалить</button>
</form>
<div class="feed">

    <?php
    spl_autoload_register(function ($className){
        include __DIR__."\\php\\".$className.".php";
    });

    $pp = new PostProvider();
    $posts = $pp->getPosts();
    foreach ($posts as $post)
        echo $post->toHTML();
    ?>
</div>
</body>
</html>
