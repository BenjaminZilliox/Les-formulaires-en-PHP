<?php

var_dump($_POST);

Echo 'Merci '.$_POST['user_firstname'].' '.$_POST['user_lastname'].' de nous avoir contacté à propos de '.$_POST['subject'].'.';
echo '<br/>';
echo "Un de nos conseiller vous contactera soit à l'adresse ".$_POST['user_email']." ou par téléphone au ".$_POST['phone']." dans les plus brefs délais pour traiter votre demande : ";
echo '<br/>';
echo $_POST['user_message'];
