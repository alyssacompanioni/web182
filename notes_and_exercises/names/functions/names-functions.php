<?php

function getFullNames($fileName) {
  $lineNumber = 0;

  // Load up the array
  $FH = fopen("$fileName", "r");
  $nextName = fgets($FH);

  while(!feof($FH)) {
      if($lineNumber % 2 == 0) {
          $fullNames[] = trim(substr($nextName, 0, strpos($nextName, " --")));
      }

  $lineNumber++;
  $nextName = fgets($FH);
  }
  return $fullNames;
}

// Get all first names
function getFirstNames($fullNames){
  foreach($fullNames as $fullName) {
    $startHere = strpos($fullName, ",") + 1;
    $firstNames[] = trim(substr($fullName, $startHere));
  }
  return $firstNames;
}

// Get all last names
function getLastNames($fullNames) {
  foreach ($fullNames as $fullName) {
    $stopHere = strpos($fullName, ",");
    $lastNames[] = substr($fullName, 0, $stopHere);
  }
  return $lastNames;
}

// Get valid names
 function getValidNames($fullNames, $firstNames, $lastNames) {
  for($i = 0; $i < sizeof($fullNames); $i++) {
    // jam the first and last name together without a comma, then test for alpha-only characters
    if(preg_match('/^[a-zA-Z\']+$/', $lastNames[$i] . $firstNames[$i])) {
        $validFirstNames[$i] = $firstNames[$i];
        $validLastNames[$i] = $lastNames[$i];
        $validFullNames[$i] = $validLastNames[$i] . ", " . $validFirstNames[$i];
    }
    //ctype_alpha will also get rid of the apostrophe in names such as O'Connor. Use a regular expression instead
  }
  return [$validFullNames, $validFirstNames, $validLastNames];
}

// Get Unique Full Names 
// function getUniqueFullNames($fullNames) {
//   $uniqueFullNames = [];
//   for($i = 0; $i < sizeof($fullNames); $i++) {
//     if
//   }
  
// }

function displayAllNames($fullNames) {
  echo '<h2>All Names</h2>';
  echo "<p>There are " . sizeof($fullNames) . " total names</p>";
  echo '<ul class="scroll-list">';    
      foreach($fullNames as $fullName) {
          echo "<li>$fullName</li>";
      }
  echo "</ul>";
}

function displayAllValidNames($validFullNames) {
  echo '<h2>All Valid Names</h2>';
  echo "<p>There are " . sizeof($validFullNames) . " valid names</p>";
  echo '<ul class="scroll-list">';        
      foreach($validFullNames as $validFullName) {
          echo "<li>$validFullName</li>";
      }
  echo "</ul>";
}

function displayAllUniqueNames($validFullNames) {
  echo '<h2>Unique Names</h2>';
  $uniqueValidNames = (array_unique($validFullNames));
  echo ("<p>There are " . sizeof($uniqueValidNames) . " unique names</p>");
  echo '<ul class="scroll-list">';       
      foreach($uniqueValidNames as $uniqueValidName) {
          echo "<li>$uniqueValidName</li>";
      }
  echo "</ul>";
}

function displayAllUniqueFirstNames($validFirstNames) {
  echo '<h2>Unique First Names</h2>';
  $uniqueValidFirstNames = (array_unique($validFirstNames));
  echo ("<p>There are " . sizeof($uniqueValidFirstNames) . " unique first names</p>");
  echo '<ul class="scroll-list">';        
      foreach($uniqueValidFirstNames as $uniqueValidFirstName) {
          echo "<li>$uniqueValidFirstName</li>";
      }
  echo "</ul>";
}

function displayAllUniqueLastNames($validLastNames) {
  echo '<h2>Unique Last Names</h2>';
  $uniqueValidLastNames = (array_unique($validLastNames));
  echo ("<p>There are " . sizeof($uniqueValidLastNames) . " unique last names</p>");
  echo '<ul class="scroll-list">';        
      foreach($uniqueValidLastNames as $uniqueValidLastName) {
          echo "<li>$uniqueValidLastName</li>";
      }
  echo "</ul>";
}

function displayNameCounts($names) {
  $nameCounts = array_count_values($names);

  arsort($nameCounts);

  echo '<ul class="scroll-list">';    
      foreach($nameCounts as $name => $count) {
        echo "<li>$name: $count</li>";
      }
  echo"</ul>";
}
