<?php
/* Confifurer le destinataire */
$destinataire = 'c.servieres@simplon-charleville.fr';
/* Préciser si on souhaite envoyer une copie au visiteur */
$copie = 'non';
/* Afficher un message de confirmation à l'envoi du mail */
$message_envoye = "Votre message a bien été envoyé !";
$message_non_envoye = "Echec de l'envoi, merci de ré-essayer !";
/* En cas de formulaire non envoyé */
$message_erreur_formulaire = "Echec de l'envoi veuillez essayer <a href=\"contact.php\">
une nouvelle fois</a>.";
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis
et que l'email ne comporte aucune erreur !";

/* On teste si le formulaire a été soumis */
if (!isset($_POST['envoi']))
{
  /* Formulaire non envoyé */
  echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
} else {
  /* Nettoyer et enregister le texte */
  function Rec($text)
  {
    $text = htmlspecialchars((trim($text)), ENT_QUOTES);
    if (1 === get_magic_quotes_gpc()){
      $text = stripslashes($text);
    }
      //$text = n12br ($text);
      return $text;
  };
  /* Vérifier la syntaxe d'un email */
  function IsEmail($email)
  {
    $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
    return (($value === 0) || ($value ===false)) ? false : true;
  };
  /* Formulaire envoyé, on récupère tous les champs*/
  $nom = (isset($_POST['name'])) ? Rec($_POST['name']) : '';
  $email = (isset($_POST['email'])) ? Rec($_POST['email']) : '';
  $objet = (isset($_POST['object'])) ? Rec($_POST['object']) : '';
  $message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
  /* Puis on vérifie les variables et l'email */
  $email = (IsEmail($email)) ? $email : ''; //soit l'email est vide ou erroné, soit il vaut l'email entré
  if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
  {
    /* Les 4 variables sont remplies, on génère puis on envoie le mail */
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers = 'From'.$nom.'<'.$email.'>'."\r\n".
                    'Reply-To:'.$email."\r\n" .
                    'Content-Type : text/plain; charset="utf-8"; DelSp="Yes"; format=flowed'."\r\n" .
                    'Content-Disposition: inline'. "\r\n" .
                    'Content-Transfer-Encoding: 7bit'." \r\n" .
                    'X-Mailer: PHP'.phpversion();
    /* envoyer une copie ou non au visiteur */
    if ($copie == 'oui')
    {
      $cible = $destinataire.';'.$email;
    }
    else
    {
      $cible = $destinataire;
    };
    /* Remplacement de certains caractères spéciaux */
    $caracteres_speciaux = array('&#039;', '&#8217;', '&quot;', '<br>', '<br />', '&lt;', '&gt;', '&amp;', '…',   '&rsquo;', '&lsquo;');
    $caracteres_remplacement = array("'",      "'",        '"',      '',    '',       '<',    '>',    '&',     '...', '>>',      '<<'     );

    $objet = html_entity_decode($objet);
    $objet = str_replace($caracteres_speciaux, $caracteres_remplacement, $message);
    /* Envoi du mail */
    $num_emails = 0;
    $tmp = explode(';', $cible);
    foreach ($tmp as $email_destinataire)
    {
      if (mail($email_destinataire, $objet, $message, $headers)){
        $num_emails++;
      }
      if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
      {
        echo '<p>'.$message_envoye.'</p>';
      }
      else {
        echo '<p>'.$message_non_envoye.'</p>';
      };
    };
    } else {
      /* Une ou plusieurs des trois variables est/sont vide(s) */
      echo '<p>'.$message_formulaire_invalide.'<a href="contact.php">Retour au formulaire</a></p>'."\n";
  };
};
?>
