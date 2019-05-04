<?php
/**
 * Created by PhpStorm.
 * User: Stoorx
 * Date: 23.05.2019
 * Time: 22:13
 */

class PostProvider
{
    private $HOST = "stoorx.beget.tech";
    private $USERNAME = "stoorx_lab4";
    private $PASSWORD = "qwertyuiop";
    private $DBNAME = "stoorx_lab4";

    public function getPosts()
    {
        $posts = [];

        $mysqli = new mysqli($this->HOST, $this->USERNAME, $this->PASSWORD, $this->DBNAME);
        $res = $mysqli->query("SELECT * FROM posts ORDER BY ts DESC;");

        while ($row = $res->fetch_assoc()) {
            $posts[]=new Post($row['postId'], $row['title'], $row['content'], $row['ts']);
        }

        $mysqli->close();

        return $posts;
    }

    public function addPost(Post $post){
        $mysqli = new mysqli($this->HOST, $this->USERNAME, $this->PASSWORD, $this->DBNAME);
        $mysqli->query("INSERT INTO posts (title, content) VALUES ('$post->Title', '$post->Content');");
        $mysqli->close();
    }

    public function delPost(Post $post){
        $mysqli = new mysqli($this->HOST, $this->USERNAME, $this->PASSWORD, $this->DBNAME);
        $mysqli->query("DELETE FROM posts WHERE postId = '$post->Id';");
        $mysqli->close();
    }
}