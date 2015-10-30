


 <h2 style="margin-top:60px;">Ajoutez votre commentaire</h2>

 <form action="commentaire_post.php" method="post">  
    
     <p class="centre"><label>Pseudo :<br> <input type="text" id="auteur" name="auteur"/></label></p>
     Commentaire :<br> <textarea style="width:70%;" rows=10 id="commentaire" name="commentaire"></textarea><br/>
    <input type="hidden" id="id_billet"  name="id_billet" value="<?php echo $_GET['billet'];?>"/>
     <input type="hidden" id="titre" name="titre" value="<?php echo $_GET['titre'];?>"/>
     <input id="envoyer" type="button" name="envoyer" value="envoyer" onclick="envoi_form_async()"/><br/>

 </form>
 <br/>


<h2>Commentaires</h2><br/>

<br/>
<!--code slide-->
<!--          -->
<div id="toggle" style="display:none;max-height:400px;overflow:auto;">

<div id="liste_comms" >
</div>
<br/>

   
</div>                
 <!-- code slide -->
 
 <a href="#" id="toggler">Afficher les commentaires</a>
 <!-- -->

<br/>

 

 <p class="centre" style="margin-top:20px;margin-bottom:-20px;"><a href="../conseil.php">Retour à la liste des conseils</a></p>



<!-- code slide -->
  <script type='text/javascript'>

// On attend que la page soit chargée 
$(function()
{
   // On cache la zone de texte
    $('#toggle').hide();
   
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   
    $('a#toggler').click(function()
    {
      $('#toggle').toggle(600);
       return false;
    });
});

</script>

