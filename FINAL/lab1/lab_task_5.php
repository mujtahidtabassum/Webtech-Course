<?php

class Book {
    private $title;
    private $author;
    private $year;
    
    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    
    public function getDetails() {
        return "Title: " . $this->title . "<br>" .
               "Author: " . $this->author . "<br>" .
               "Publication Year: " . $this->year;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setAuthor($author) {
        $this->author = $author;
    }
    
    public function setYear($year) {
        $this->year = $year;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getAuthor() {
        return $this->author;
    }
    
    public function getYear() {
        return $this->year;
    }
}

$book1 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);

echo "Book Details:<br>";
echo $book1->getDetails();
echo "<br><br>";

$book1->setTitle("1984");
$book1->setAuthor("George Orwell");
$book1->setYear(1949);

echo "Updated Book Details:<br>";
echo $book1->getDetails();
echo "<br><br>";

$book2 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
echo "Another Book:<br>";
echo $book2->getDetails();

?>