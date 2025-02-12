<?php
	session_start();
?>

<!--		Author: Alyssa Companioni
		Date:	1.20.25
		File:	rabbit-hunter2.php
		Purpose: To demonstrate a simple Web session
-->
<html>
<head>
	<title>Session Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		// Two arrays with scene descriptions
		
		$goodEvents = array("You fall down a rabbit hole and catch some rabbits!", 
				 			"You see something drinking from the river..",
							"Would you believe it! You trip over a something when looking at the moon!",
							"You rescue a dog and the grateful owners give you ... their pet rabbits!",
							"Climbing a mountain you find a bunch of rabbits grazing in a field");
		$badEvents = array(	"You fall down an abandoned rabbit hole and sprain your ankle",
							"You try and cross the river and get swept downstream",
							"The weather is awful! You catch a cold",
							"A bear steals your food and you wear yourself out chasing it",
							"Climbing a mountain you fall and hurt your head");
		
		if (isset($_SESSION['userName']) )  // provide a scene
		{

			print ("<h1>".$_SESSION['userName']." ENTERS THE FOREST!</h1>");
			
			$luck = rand (1, 10);
			 
			 if ($luck < 4) // bad event will be chosen
			 {
				$_SESSION['health'] = $_SESSION['health'] - $luck;
				
				$event = rand (0, 4); // to select one of the badEvents array elements
				
				print("<p>".$badEvents[$event]."</p>");
				print("<p>You lose $luck health points!</p>");
			}
			else  // good event will be chosen
			{
				$_SESSION['rabbits'] = $_SESSION['rabbits'] + $luck;
				
				$event = rand (0, 4); // to select one of the goodEvents array elements
				
				print("<p>".$goodEvents[$event]."</p>");
				print("<p>You found $luck rabbits!</p>");
			}
			print("<p><a href = \"rabbit-hunter1.php\">Return home</a></p>");
		}
		else 			// user did not begin the game on the right page 
		{
			print("<h1>Oops! No User Name!</h1>");
			print("<p><a href = \"rabbit-hunter.html\">Click here to go to the Start Page</a></p>");
		}
	?>

</body>
</html>

