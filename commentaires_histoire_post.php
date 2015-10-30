

<?php
	try
	{
		//$bdd = new PDO('mysql:host=localhost;dbname=blog_californie;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$bdd = new PDO('mysql:host=;dbname=;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		$bdd->exec("SET CHARACTER SET utf8");
		if ($_POST['auteur']=="" || $_POST['commentaire']=="")
		{
			echo "<h2>Vous devez renseigner tous les champs SVP !!</h2>";
		}	
		else
		{

			$req="INSERT INTO commentaires_histoire (auteur, commentaire, date_commentaire) VALUES (?, ?, NOW())";
			$resultat=$bdd->prepare($req);
			$resultat->execute(array(htmlspecialchars(trim($_POST['auteur'])), htmlspecialchars(trim($_POST['commentaire']))));
			?><script language="javascript">document.location="histoire.php"</script><?php
			//header("Location: histoire.php");
			//exit;
			//echo "1";
  			

		}

	}
	catch(Exception $e)
	{
        //die('Erreur : '.$e->getMessage());
        echo "0";
	}
?>



   


