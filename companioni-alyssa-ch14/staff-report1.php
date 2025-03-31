<!DOCTYPE html>
<!--	Author: Alyssa Companioni
		Date:	3/19/25
		File:	staff-report1.php
		Purpose:MySQL Exercise -> To complete the code so the program provides a table that shows the empID and job title of all employees. 
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

$userQuery = "SELECT * FROM personnel"; 

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
	print("<tr><th>ID</th><th>JOB TITLE</th></tr>");
  while($row=mysqli_fetch_assoc($result)) {
    print("<tr><td>".$row['empID']."</td><td>".$row['jobTitle']."</td></tr>");
  }

	print("</table");
}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
