<?php
/* Page: contact.php */
$VotreAdresseMail="axeltaine@live.fr";//mettez ici votre adresse mail
if(isset($_POST['submit'])) { // si le bouton "submit" est appuyé
    //on vérifie que le champ email est correctement rempli
    if(empty($_POST['email'])) {
        echo "Le champ email est vide";
    } else {
        //on vérifie que l'adresse est correcte
        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['email'])){
            echo "L'adresse email entrée est incorrecte";
        }
            
                //on vérifie que le champ message n'est pas vide
                if(empty($_POST['message'])) {
                    echo "Le champ message est vide";
                }else{
                    //tout est correctement renseigné, on envoi le mail
                    //on renseigne les entêtes de la fonction mail de PHP
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                    $Entetes .= 'Content-Transfer-Encoding: 8bit'."\r\n";;
                    $Entetes .= "From: Nom de votre site <".$_POST['email'].">\r\n";//de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
                    $Entetes .= "Reply-To: Nom de votre site <".$_POST['email'].">\r\n";
                    //on sécurise les champs
                    $Mail=htmlentities($_POST['email'],ENT_QUOTES,"ISO-8859-1"); //ENT_QUOTES Convertit les guillemets doubles et les guillemets simples, en entités HTML, ISO-8859-1 est la norme pour les langues occidentales
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");
                    //en fin, on envoi le mail
                    if(mail($VotreAdresseMail,nl2br($Message),$Entetes)) { //la fonction nl2br permet de conserver les sauts de ligne et la fonction urf8_encore de conserver les accents dans le titre
                        echo "Le mail à été envoyé avec succès !" . '<script type="text/javascript">setTimeout(function(){window.top.location="index.php"} , 2000);</script>';
                        
 
                    } else {
                        echo "Une erreur est survenue, le mail n'a pas été envoyé";
                    }
                }
            }
        }
    


?>