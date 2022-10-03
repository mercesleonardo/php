<?php

class Post {
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentarLikes() {
        $this->likes++;
    }
}

$post1 = new Post();
$post1->aumentarLikes();
$post1->aumentarLikes();

$post2 = new Post();
$post2->aumentarLikes();


echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";