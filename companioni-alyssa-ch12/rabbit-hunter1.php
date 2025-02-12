<?php
	session_start();
?>

<!--	Author: Alyssa Companioni
		Date:	December 2007
		File:	rabbit-hunter1.php
		Purpose: To demonstrate a simple Web session
-->
<html>
<head>
	<title>Session Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		if (isset($_SESSION['userName']) ) // game is in progress
		{
			
			print ("<h1>WELCOME BACK ".$_SESSION['userName']."!</h1>");
			
			if ($_SESSION['health'] < 1)
			{
				print ("<p>Oh No! You lost all your health points! You didn't get enough rabbits and the dragon is on his way to eat you.</p>");
				print("<p><a href = \"rabbit-hunter.html\">Start Again?</a></p>");
				session_destroy();
			}
			else if ($_SESSION['rabbits'] >=100)
			{
				print ("<p>CONGRATULATIONS! You have 100 rabbits to feed your pet dragon!</p>");
				print("<p><a href = \"rabbit-hunter.html\">Start Again?</a></p>");
				session_destroy();
			}
 			else
			{
				print ("<p>HEALTH: ".$_SESSION['health']."</p>");
				print ("<p>RABBITS: ".$_SESSION['rabbits']."</p>");
				print("<p><a href = \"rabbit-hunter2.php\">Return to the Forest?</a></p>");
			}
			
		}
		else if (empty($_POST['userName']) ) // Game not started but no input!
		{
			print("<h1>Oops! No User Name!</h1>");
			print("<p><a href = \"rabbit-hunter.html\">Click here to go to the Start Page</a></p>");
		}
		else			// game not started. Get the name and start the game
		{
			$_SESSION['userName'] = $_POST['userName'];
			$_SESSION['health'] = 10;
			$_SESSION['rabbits'] = 0;
			print("<h1>WELCOME ".$_SESSION['userName']."!</h1>");
			print ("<p>Each time you enter the forest, you may hunt rabbits or lose health points.
				Your goal is to find 100 rabbits to feed your pet dragon before you lose all your health... If you fail the mission the dragon will eat you instead.</p>");
			print ("<p>HEALTH: ".$_SESSION['health']."</p>");
			print ("<p>RABBITS: ".$_SESSION['rabbits']."</p>");
			print("<p><a href = \"rabbit-hunter2.php\">Enter the forest?</a></p>");
		}
	?>

</body>
</html>

