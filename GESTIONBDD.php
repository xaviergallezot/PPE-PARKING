<?php
function connection()
{
	$hote='mysql:host=localhost;dbname=parking';
	$mdp='secret';
	$login='parking';
	try
		{
		$connexion = new PDO($hote, $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (PDOExecption $e) //gestion d'erreur
		{
			print "Erreur !:" .$e->getMessage(). "<br/>";
			die();
		}
return $connexion;
}
?>