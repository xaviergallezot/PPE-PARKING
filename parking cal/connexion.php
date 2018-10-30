<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=parking', 'root', '');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
	echo $e->getMessage();
}

if(isset($_POST["pseudo"]) && isset($_POST["motdepasse"]))
{
	$query = $bdd->prepare('SELECT motdepasse FROM membres WHERE pseudo = :pseudo');
	$query->bindParam(':pseudo', $_POST["pseudo"]);
	$query->execute();
	$result = $query->fetch();
	$hash = $result[0];
	
	$correctPassword = password_verify($_POST["motdepasse"], $hash);
	
	if($correctPassword)
	{
		header('Location: utilisateur.html');
	}else{
		header('Location: utilisateur.html');
	}
}
?>