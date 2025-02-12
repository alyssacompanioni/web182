<!DOCTYPE html>
<!--Author: Alyssa Companioni
	Date: 1/13/25
	File:	  city-survey.php
	Purpose: To count the number of instances either London, Paris, or Rome was selected in a survey and display the results in a table. 

-->

<html>
<head>
	<title>CITY SURVEY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$citySurvey = array("London", "Paris", "Rome", "Rome", "Paris",
		"Paris", "Paris", "London", "Rome", "Rome",
		"Paris", "London", "Paris", "London", "London",
		"London", "Paris", "London", "Paris", "Rome");

		// Add the code needed to count the number of times that each city occurs in the array
    $london = 0;
    $paris = 0;
    $rome = 0;
    for ($i = 0; $i < sizeof($citySurvey); $i++)
    {
      if($citySurvey[$i] == "London")
      {
        $london++;
      }
      elseif($citySurvey[$i] == "Paris")
      {
        $paris++;
      }
      else {
        $rome++;
      }
    }
		
		// display the results in a table
		print ("<h1>CITY SURVEY RESULTS</h1>");
    print("<table>");
    print("<tr><th>London</th><td>" .$london ."</td>");
    print("<tr><th>Paris</th><td>" .$paris ."</td>");
    print("<tr><th>Rome</th><td>" .$rome ."</td>");

		?>
</body>
</html>
