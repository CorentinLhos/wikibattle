<html>
	<head>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
	
	</head>

	<body>
		<div id="entete">
 		<h1>combar </h1>
 		</div>
 			<nav>
 				<ul>
					<li><a href="index.html">Menus.</a></li>
 				</ul>
 			</nav>
		<div id="main">
			<form action="combat.php" method="GET">
				Entrez le texte : <input type="text" name="texte" /><!--entré une valeur dans texte-->
				<input type="submit" value="valider" />
				
		



		</form> 

				<?php
				if (isset($_GET['texte']))
					{echo 'texte : <font color="purple"> '.$_GET['texte'];//ecrit la valeur de texte en rouge avec la métode GET
					}
					?>

 		

 		
		
		</div>
		//?php
				if (isset($_GET['texte']))

					{echo 'texte : font color="purple" '.$_GET['texte'];//ecrit la valeur de texte en rouge avec la métode GET
					}
					?

		


	</body>
<html>