

<?php





    try
    {
        $bdd = new PDO('mysql:host=;dbname=;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd->exec("SET CHARACTER SET utf8");
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    } 


    $req = $bdd->prepare("SELECT id, auteur, commentaire, DATE_FORMAT(date_commentaire, '%d/%m/%Y à %H:%i:%s') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire DESC ");
    $req->execute(array($_GET['billet']));

    while ($donnees = $req->fetch())
    {
        ?>
        <p><strong>
        <?php 
        echo $donnees['auteur']; 
        ?></strong><em> le 
        
        <?php 
        echo $donnees['date_commentaire_fr']."</em>"; 
        ?>
        </p>
        
        <p>
        <?php 
        echo $donnees['commentaire']; 
        ?>
        </p><br/>
        
        <?php
    }
    $req->closeCursor();
    
?>


