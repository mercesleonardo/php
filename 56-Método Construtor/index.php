<?php

class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function __construct($postId) {
        $this->id = $postId;
        //Consultar banco de dados para pegar informações do POST $id
        $this->likes = 12 * $postId;
    }

    public function aumentarLikes() {
        echo "Likes <br/>";
        $this->likes++;
    }
}

$post1 = new Post(25);

$post2 = new Post(4);



echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";