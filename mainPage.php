<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Feed</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf8">
</head>
<body>

    <div class="header">
        <h1>Сайт с новостями</h1>
    </div>

    <div class="button">
        <form>
             <input class="button" type="button" value="sign in as admin" style="position: fixed; left: 90%; bottom: 90%" onclick="window.location.href='admin.php'"/>
        </form>
    </div>
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
