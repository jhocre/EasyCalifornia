

<?php
	try
	{
		$bdd = new PDO('mysql:host=;dbname=;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$bdd->exec("SET CHARACTER SET utf8");
		if ($_POST['auteur']=="" || $_POST['commentaire']=="")
		{
			echo "<h2>Vous devez renseigner tous les champs SVP !!</h2>";
		}	
		else
		{

			$req="INSERT INTO commentaires (id_billet, auteur, commentaire, date_commentaire) VALUES (?, ?, ?, NOW())";
			$resultat=$bdd->prepare($req);
			$resultat->execute(array(htmlspecialchars(trim($_POST['id_billet'])), htmlspecialchars(trim($_POST['auteur'])), htmlspecialchars(trim($_POST['commentaire']))));


			//header('location:'.$_POST["titre"].'.php?billet='.$_POST["id_billet"].'&titre='.$_POST["titre"]); 
			echo "1";
		
		}

	}
	catch(Exception $e)
	{
        //die('Erreur : '.$e->getMessage());
        echo "0";
	}

	
	
	?>



   


