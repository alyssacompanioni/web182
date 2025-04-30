<?php
include 'functions/utility-functions.php';
include 'functions/names-functions.php';

$fileName = 'names.txt';

//Get all full names
$fullNames = getFullNames($fileName);

// Get all first names
$firstNames = getFirstNames($fullNames);

// Get all last names
$lastNames = getLastNames($fullNames);

// $findMe = ',';
// echo $fullNames[0] . '<br>';
// echo strpos($fullNames[0], $findMe) . '<br>';
// echo substr($fullNames[0], 0, strpos($fullNames[0], $findMe));
// exit();

// Get all valid names
[$validFullNames, $validFirstNames, $validLastNames] = getValidNames($fullNames, $firstNames,  $lastNames);

// ~~~~~~~~~~~~ Display results ~~~~~~~~~~~~ //
?> 
<head>
  <link href="styles.css" rel="stylesheet">
</head>
<?php

echo '<h1>Names - Results</h1>';

displayAllNames($fullNames);

displayAllValidNames($validFullNames);

displayAllUniqueNames($validFullNames);

displayAllUniqueFirstNames($validFirstNames);

displayAllUniqueLastNames($validLastNames);

echo '<h2>Most Common First Names</h2>';
displayNameCounts($validFirstNames);

echo '<h2>Most Common Last Names</h2>';
displayNameCounts($validLastNames);
?>
