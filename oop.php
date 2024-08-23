<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    //borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    //return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    //Member borrow a book
    public function borrowBook(Book $book) {
        //$book->borrowBook();
        if ($book->borrowBook()) {
            return $this->name . " has borrowed '" . $book->getTitle() . "'.\n";
        } else {
            return "No copies available for '" . $book->getTitle() . "'.\n";
        }
    }

    //Member return a book
    public function returnBook(Book $book) {
        $book->returnBook();
        return $this->name . " has returned '" . $book->getTitle() . "'.\n";
    }
}

// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


// Members borrowing books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

//$member1->returnBook($book1);
//$member2->returnBook($book2);


echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . PHP_EOL;
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . PHP_EOL;
?>
