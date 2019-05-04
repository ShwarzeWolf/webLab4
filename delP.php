<?php
spl_autoload_register(function ($className){
    include __DIR__."\\php\\".$className.".php";
});

$pp = new PostProvider();
$pp->delPost(new Post($_POST['postId'], null, null, null));
header('Location: admin.php ');
