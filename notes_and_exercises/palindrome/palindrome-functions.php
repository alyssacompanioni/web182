<?php

function removePunctuation($string)  {
  $punctuation = array(",", ".", "!", " ", "?", "'", '"');

  $cleanString = str_replace($punctuation, '', $string);
  return $cleanString;
}

function testIfPalindrome($string) {
  if($string == strrev($string))
    return "IS a palindrome";
  else  
    return "is NOT a palindrome";
}

?>
