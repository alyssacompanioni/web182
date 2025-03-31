<?php
/*
  Write a PHP script using strpos() that checks if the word "code" exists in a given string. If it exists, display the position where it was found. If not, display a message saying "Not found".
  Example Input: php $text = "Learning to code is fun!"; 
  Expected Output: The word 'code' was found at position 12.
  */
  echo "In Class Exercise 1: <br>";
  $text = "Learning code is fun!";
  
  if(strpos($text, "code"))
    echo "The string 'code' was found at position " . strpos($text, "code");
  else  
    echo "The string 'code' was not found.";

  /*
  Write a PHP script that takes a string and extracts the first 5 characters from it using 
  Example Input: php $text = "Programming is awesome!"; 
  Expected Output: Progr 
  */
  echo "<br><br> In Class Exercise 2: <br>";
  $text2 = "Programming is awesome!";
  echo substr($text2, 0,5);


  /*
   Find and Extract a Substring (using substr ) Task: strpos and substr . Write a PHP script that finds the position of the first space in a string and extracts all characters from the beginning of the string up to (but not including) the space. 
   Example Input: php $text = "Hello World!"; 
   Expected Output: Hello
  */
  echo "<br><br> In Class Exercise 3: <br>";
  $text3 = "Hello World!";
  
  // Find the position of the first space
$space_position = strpos($text3, ' ');

  // Extract the substring from the beginning up to (but not including) the space
  if ($space_position !== false) {
      $result = substr($text3, 0, $space_position);
  } else {
      $result = $text3; // If there's no space, return the full string
  }

  echo $result; // Expected Output: Hello
?>
