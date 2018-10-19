<?php
$sexe = $_POST['sexe'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$naissance = $_POST['naissance'];
$monselect = $_POST['monselect'];
$textarea = $_POST['textarea'];
$interet1 = $_POST['voyager'];
$interet2 = $_POST['photographie'];
$interet3 = $_POST['animaux'];
$interet4 = $_POST['balader'];

echo("Votre sexe : <b>".$sexe."</b><br>\n");
echo("Votre date de naissance : <b>".$naissance."</b><br>\n");
echo ("Vos centres d intérêt : <b>".$interet1."</b><br>\n");
echo("Votre nom : <b>".$nom."</b><br>\n");
echo("Votre prénom : <b>".$prenom."</b><br>\n");
echo("Votre adresse email : <b>".$email."</b><br>\n");
echo ("Vous avez sélectionné le champ suivant : <b> ".$monselect."</b><br>\n");
echo( "Votre message : <b>".$textarea."</b><br>\n");
?>

<!-- Vérification des champs -->

<?php
if  ($sexe == ""){
    echo("<br>Merci d'indiquer votre sexe !\n");
}

if  ($nom == ""){
    echo("<br>Merci d'indiquer votre nom !\n");
}

if  ($prenom == ""){
    echo("<br>Merci d'indiquer votre prenom !\n");
}

if  ($email == ""){
    echo("<br>Merci d'indiquer votre email !\n");
}

if  ($naissance == ""){
    echo("<br>Merci d'indiquer votre date de naissance !\n");
}

if  ($monselect == "null"){
    echo("<br>Merci d'indiquer la raison pour laquelle vous nous contacté !\n");
}

if  ($textarea == ""){
    echo("<br>Merci d'écrire un message !\n");
}

// Config mail 

ini_set( 'display_errors', 1 );

error_reporting( E_ALL );

$to = "geoffroy.c@codeur.online";

$subject = "Vérification PHP mail";

$message = "Message de : $sexe $nom $prenom\nDate de naissance : $naissance\nMail : $email\nRaison du message : $monselect\nMessage : $textarea\n";

$headers = "From: ostreiculture@geoffroy.sanchez";

if ($sexe != "" && $nom != "" && $prenom != "" && $email != "" && $naissance != "" && $monselect != "null" && $textarea != ""){
    mail($to,$subject,$message, $headers);
    echo "<br><span style='color: green;'>L'email a été envoyé.</span>";    
}

// Preg_match

if (preg_match("/[^a-z-A-Zéèàêîëï]/", $nom)){
    echo("<br><span style='color: red;'>Merci d'indiquer un nom sans caractères spéciaux</span>");
}

if (preg_match("/[^a-z-A-Zéèàêîëï]/", $prenom)){
    echo("<br><span style='color: red;'>Merci d'indiquer un prenom sans caractères spéciaux</span>");
}

if (preg_match("/[^a-z-A-Z@.0123456789]/", $email)){
    echo("<br><span style='color: red;'>Merci d'indiquer une adresse email valide</span>");
}
?>
