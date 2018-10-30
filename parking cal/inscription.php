<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=parking', 'root', 'root');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
	echo $e->getMessage();
}

if(isset($_POST["pseudo"]) && isset($_POST["mail"]) && isset($_POST["mail2"]) && isset($_POST["motdepasse"]) && isset($_POST["motdepasse2"]))
{

		$hash = password_hash($_POST["motdepasse"], PASSWORD_DEFAULT);
		$query = $bdd->prepare('INSERT INTO membres (pseudo, mail, motdepasse) VALUES (:pseudo, :mail, :motdepasse);');
		$query->bindParam(':pseudo', $_POST["pseudo"]);
		$query->bindParam(':mail', $_POST["mail"]);
		$query->bindParam(':motdepasse', $hash);
		$query->execute();
		header('Location: connexion.html');
		exit();
}
?>