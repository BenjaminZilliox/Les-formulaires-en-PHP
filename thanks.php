<?php



if (($_POST['user_lastname'] === '') || ((isset($_POST['user_lastname'])) != true)) // Vérif pour le nom de l'utilisateur
{
    echo "Erreur, vous devez donner un nom";
    die();
}

if (($_POST['user_firstname'] === '') || ((isset($_POST['user_firstname'])) != true)) // Vérif pour le prénom de l'utilisateur
{
    echo "Erreur, vous devez donner un prénom";
    die();
}

if (($_POST['user_email'] === '') || ((isset($_POST['user_email'])) != true)) // Vérif pour le mail de l'utilisateur
{
    echo "Erreur, vous devez donner un mail";
    die();
} elseif (filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) != true) // Vérif si le mail est valid
{
    echo "Erreur, mail non valide";
    die();
}

if (($_POST['phone'] === '') || ((isset($_POST['phone'])) != true)) // Vérif pour le téléphone de l'utilisateur
{
    echo "Erreur, vous devez donner un numéro de téléphone";
    die();
}

if (($_POST['subject'] === '') || ((isset($_POST['subject'])) != true)) // Vérif pour le sujet de la liste déroulante
{
    echo "Erreur, vous devez donner selectionner un sujet";
    die();
}

if (($_POST['user_message'] === '') || ((isset($_POST['user_message'])) != true)) // Vérif pour le message de l'utilisateur
{
    echo "Erreur, vous devez soumettre un message";
    die();
}



Echo 'Merci '.$_POST['user_firstname'].' '.$_POST['user_lastname'].' de nous avoir contacté à propos de '.$_POST['subject'].'.';
echo '<br/>';
echo "Un de nos conseiller vous contactera soit à l'adresse ".$_POST['user_email']." ou par téléphone au ".$_POST['phone']." dans les plus brefs délais pour traiter votre demande : ";
echo '<br/>';
echo $_POST['user_message'];
