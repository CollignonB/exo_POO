<?php
include "student.php";

$student = new Student();

// $student->setName("a");
// $student->setAge(1250);
try {
    $student->setName("az");
    $student->setAge(25);
  }
  catch (\Exception $e) {
    echo 'Caught exception: ', $e->getMessage(),"\n";
}

// var_dump($student);


// ~~~~~~~~~~~~~~~~~~~~~~~~~~

include "book.php";

$data = [
    "title" => "The rain",
    "pages" => 246,
  ];

$book = new Book($data);

echo "<br>" . $book->getTitle() . " has " . $book->getPages() . " pages";
// $book->setTitle("The rain");
// $book->setPages(246);
