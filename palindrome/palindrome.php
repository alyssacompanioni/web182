<?php
  include('palindrome-functions.php');

  $palindromeTestOriginal = $_POST['palindrome'];
  $palindromeTest = $palindromeTestOriginal;
  $palindromeTest = removePunctuation($palindromeTest);
  $palindromeTest = strtolower($palindromeTest);

  print($palindromeTestOriginal . ' <br>' );
  print(testIfPalindrome($palindromeTest) . '<br>');

  print('<a href="index.html">Play again?</a>');
?>
