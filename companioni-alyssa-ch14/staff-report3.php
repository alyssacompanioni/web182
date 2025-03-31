<!DOCTYPE html>
<!--	Author: Alyssa Companioni
		Date:	3/20/25
		File:	staff-report3.php
		Purpose:MySQL Exercise -> Complete the code so the program provides a table that shows the first names, last names, and job titles of managers and sales people ordered by job title then last name. 
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
$userQuery = "SELECT firstName, lastName, jobTitle FROM personnel WHERE jobTitle = 'manager' OR jobTitle = 'sales' ORDER BY jobTitle, lastName";
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
	print("<h1>LIST OF EMPLOYEES</h1>");

	print("<table>");
	print("<tr><th>First Name</th><th>Last Name</th><th>Job Title</th></tr>");
  while($row = mysqli_fetch_assoc($result)) {
    print("<tr><th>".$row['firstName']."</th><th>".$row['lastName']."</th><th>".$row['jobTitle']."</th></tr>");
  }

	
	print("</table");
}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
