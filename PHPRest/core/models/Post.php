<?php 
    class Post {
        //post properties
        public $id;
        public $title;
        public $body;
        public $author;
        public $created_at;

        public function __construct($id, $title, $body, $author, $created_at){
            $this->id = $id;
            $this->title = $title;
            $this->body = $body;
            $this->author = $author;
            $this->created_at = $created_at;
        }
    }
?>