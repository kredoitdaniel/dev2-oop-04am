<?php

class Book
{
    /*
        ACCESS MODIFIERS

        1. public = can be accessed inside and outside of the class.
        2. private = can be accessed ONLY within the class.
        3. protected = can be accessed within the class and inside of the subclass(inheritance) 
    */ 

    // $this->   use this to access properties and methods if currently inside of the class


    // properties
    public $title;
    public $author;
    public $price;
    public $published_date;
    private $summary;



    // constructor
    public function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }


    // methods
    public function displaySummary(){
        echo $this->summary;
    }

    private function displayAuthor(){
        echo $this->author;
    }


    // setters
    public function setDetails($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }



    // getters
    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDetails()
    {
        echo $this->msg() . "<br>";
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Price: " . $this->price . "<br>";
    }



    public function msg()
    {
        return "Welcome To School!";
    }
}



// Instantiating a class
// $prog_lang is now an object/instance of the class Book
// $prog_lang can now access properties and methods of the class
// $prog_lang = new Book;

// access public properties outside is OK
// echo "Title: " . $prog_lang->title . "<br>";
// echo "Author: " . $prog_lang->author . "<br>";
// echo "Price: " . $prog_lang->price . "<br>";
// echo "Published Date: " . $prog_lang->published_date . "<br>";

// access public methods outside is OK
// echo "Summary: " , $prog_lang->displaySummary() . "<br>";

// access private properties outside is NOT OK
// echo "Published Date: " . $prog_lang->summary . "<br>";

// access private methods outside is NOT OK
// echo "Author: " . $prog_lang->displayAuthor() . "<br>";


// echo "<br><br>";
// Instantiating a class
// $math is now an object 
// $math = new Book;
// $math->title = 'Analysis II';
// $math->author = 'David Williams';
// $math->price = 100;
// $math->summary = 'This is new summary';

// echo "Title: " . $math->title . "<br>"; 
// echo "Author: " . $math->author . "<br>"; 
// echo "Price: " . $math->price . "<br>"; 



// echo "<br><br>";
// Instantiating a class
// $book = new Book;

// setter
// $book->setTitle("English");
// $book->setAuthor("Troy Daniels");
// $book->setPrice(200);


// getter
// echo "Title: " . $book->getTitle() . "<br>";
// echo "Author: " . $book->getAuthor() . "<br>";
// echo "Price: " . $book->getPrice() . "<br>";




