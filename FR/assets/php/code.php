<?php
	// la function session_start() dois ce trouvé uniquement au début du fichier php
	session_start();
	// Peu Poser un probleme de niveau critique de sécurité !
	$parameters = parse_ini_file('../../db.ini');
	try {
		// Initialise la connection a la basse de donnée via la function PDO
		$connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// On vérifie si la requete ne contiens dans les parametre POST "login" et mdp
			if (!isset($_POST['login']) || !isset($_POST['mdp'])){
				/*
				// Redirection vers la page si il n'auras pas de POST login et mdp de rentré
				header('location: X.php');
				exit;
				*/
			}
		// On prepare la requete sql par la requete suivant
		$stmt = $connect->prepare('SELECT * FROM `login_admin` WHERE `pseudo` = :login AND `password` = :password');
		// On bindParam pour évité les faille SQL
		var_dump(array("login" => $_POST['login'], "password" => $_POST['mdp']));
		$stmt->execute(array(":login" => $_POST['login'], ":password" => $_POST['mdp']));

		// On récupère la ligne suivante d'un jeu de résultats PDO
		$result = $stmt->fetch();
		// Si le résulta n'es pas égal a null (donc jeu trouver) on set la session et on redirige vers la page
		if ($result != null){
			$_SESSION['login'] = $login;
			$_SESSION['pass'] = $pass;
			header('location: admin_page.php');
			exit;
		}
		// On affiche un message comme quoi le mot de passe et incorect !
		echo "<script>alert('Mot de passe incorect')</script>";
		header('location: ../../admin.php');
		/*
		// Redirection vers la page si il n'auras pas de POST login et mdp de rentré
		header('location: X.php');
		exit;
		*/
}catch(Exeption $e){
	// On affiche le message d'erreur de l'Exeption

	echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}

?>
