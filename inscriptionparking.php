<!Doctype HTML>
<HTML>
	<HEAD>
		<TITLE>InscriptionParking</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="cssForum2.css" />
	</HEAD>
	<BODY>
		<h1 align=center >Dans cette page vous allez pouvoir saisir vos coordonnées pour vous inscrire.</h1>
		<h2 align=center >
		<form method="POST" action="inscriptionP.php">
		<p> Mel :</p>
		<input type="text" placeholder= "Mel" name="mel" required>
		<p> Mot de Passe (10 caractères max):</p>
		<input type="password" placeholder="Mot de passe" name="password" required>
		<p> Verification:</p>
		<input type="password" placeholder="Mot de passe" name="verif" required>
		<p>  Adresse (Postal):</p>
		<input type="text" placeholder= "Adresse" name="adress" required>
		<p> Ville:</p>
		<input type="text" placeholder= "Ville" name="ville" required>
		<p> Code Postal :</p>
		<input type="text" placeholder= "CP" name="CP" required>
		
		
		<?php
		include_once 'GESTIONBDD.php' ;
		$mel=$_POST ['mel'] echo $mel;
		$mdp=$_POST ['password'] echo $mdp ;
		$verif=$_POST['verif'] echo $verif;
		$ville=$_POST['ville'] echo $ville;
		$CP=$_POST['CP'] echo $CP;
		
		?>
		</br> </br>
		<input type="submit"  value="S'incrire" required>
		</form>
		</h2>
	
		

		
				
		
	</BODY>
</HTML>
