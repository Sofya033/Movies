<?php

declare(strict_types=1);

require_once __DIR__ . "../../vendor/autoload.php";

use .Public\App\Controllers\MovieController;











$movie = new MovieController('2');
$movie->addMovie();

/*foreach ($book->getAllBooks() as $key => $value) {
	$number = $key + 1; 
	echo "<h1>Книга номер " . $number . "</h1>" ;
	echo $value['name_book'] .'<br>';
	echo $value['author'] .'<br>';
	echo $value['category'] .'<br>';
	echo "<hr>";
}*/