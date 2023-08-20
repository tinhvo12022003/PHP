<?php
    abstract class Book {
        protected $title;
        protected $author;
        protected $cost;
        abstract protected function display();
        public function __construct($title, $author, $cost){
            $this->title = $title;
            $this->author = $author;
            $this->cost = $cost;
        }

    }

    class Book1 extends Book {
        function __construct($title, $author, $cost){
            parent::__construct($title, $author, $cost);            
        }

        public function display(){
            echo "Title: ".$this->title."\n";
            echo "Author: ".$this->author."\n";
            echo "Cost: ".$this->cost."\n";
        }
    }

$b1 = new Book1("Title", "Author", "Cost");
$b1->display();
?>