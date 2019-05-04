<?php
spl_autoload_register(function ($className){
    include __DIR__."\\php\\".$className.".php";
});
    $pp = new PostProvider();
    $pp->addPost(new Post(null, $_POST['title'], $_POST['content'], null));
header('Location: admin.php ');
?>