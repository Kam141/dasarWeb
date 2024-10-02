<?php

$loremipsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremipsum}</p>";
echo "Panjang Karakter: ". strlen($loremipsum). "<br>";
echo "Panjang Kata: ". str_word_count($loremipsum). "<br>";
echo "<p>" . strtoupper($loremipsum) . "</p>";
echo "<p>" . strtolower($loremipsum) . "</p>";
?>