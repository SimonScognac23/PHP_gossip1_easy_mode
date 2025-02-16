<?php

require_once('class.php');


class Post{

    private $title;
    private $category;
    private $tag;

    public function __construct($titolo, Category $categoria, $tag)
    {

        $this->title = $titolo;
        $this->category = $categoria;
        $this->tag = $tag;
    }

    public function getTitle(){

        return $this->title;
    }

    public function getCategory(){

        return $this->category->getMyCategory(); // abbiammo accesso al metodo specifico getMyCategory, abbiamo usato come struttura la fluide interface
    }

    public function getTag(){

        return $this->tag;
    }




}


$post = new Post("Titolo", new News(), "tag 1");
$post1 = new Post("Titolo", new Gossip(), "tag 2");

echo $post->getCategory();