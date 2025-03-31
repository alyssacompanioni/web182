<!DOCTYPE html>
<!--	Author: Alyssa Companioni
		Date:	3/20/25
		File:	job-titles1.php
		Purpose:MySQL Exercise -> Complete the code so the program displays the employee's ID, job title, and hourly wage based on the empID inputted into job-titles1.html
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php

$server = "localhost";
$user = "wbip";
$pw = "wbip12321";
$db = "test";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

$id = $_POST['id'];

$userQuery = "SELECT * FROM personnel WHERE empID = $id"; // COMPLETE THE QUERY

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>RESULTS</h1>");
	print("<table>");
	print("<tr><th>EMP ID</th><th>Job Title</th>
		 <th>Hourly Wage</th></tr>");
		 
     $row= mysqli_fetch_assoc($result);
     print("<tr><th>".$row['empID']."</th><th>".$row['jobTitle']."</th>
		 <th>".$row['hourlyWage']."</th></tr>");
	

	print ("</table>");
}

mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
