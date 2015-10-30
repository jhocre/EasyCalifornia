

        function createXml()
        {
            var xmlhttp=null;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }

            return xmlhttp;

        }
            
        function load_commentaires(){
            var xmlhttp=createXml();
     
            var billet=document.getElementById("billet").innerHTML;

          
           xmlhttp.onreadystatechange=function()
           {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
                    document.getElementById("liste_comms").innerHTML=xmlhttp.responseText; 
              }
           }

           

            xmlhttp.open("GET","charger_comments.php?billet="+billet,true);
            xmlhttp.send();
        }    
        function envoi_form_async(){
            var xmlhttp=createXml();
     
            var auteur=document.getElementById("auteur").value;
            var id=document.getElementById("id_billet").value;
            var titre=document.getElementById("titre").value;
            var commentaire=document.getElementById("commentaire").value;

           xmlhttp.onreadystatechange=function()
           {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
                    if(parseInt(xmlhttp.responseText)==1){
                        load_commentaires();
                        /*$('#toggler').trigger( "click" );*/
                    }else{
                        alert("Commentaire non ajouté ! remplissez tous les champs SVP");
                    }
              }
           }

           

            xmlhttp.open("POST","commentaire_post.php",true);

            xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //!!!!!
            
            xmlhttp.send("id_billet=" + id+"&auteur="+auteur+"&titre=" + titre+"&commentaire="+commentaire);
            
            document.getElementById('auteur').value = '';
            document.getElementById('commentaire').value = '';



        }








    