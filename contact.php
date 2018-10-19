<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="definiton" content="Pas de présentation Geoffroy Sanchez">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Geoffroy Sanchez - Contact</title>
</head>

<body>
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
        $submit = $_POST['submit'];

        $nameIsChecked = true;
        $subnameIsChecked = true;
        $mailIsChecked = true;
    ?>
    <section id="formulaire_contact" class="ocean_background">
        <div class="container-fluid pt-5 pb-5">
            <div class="container bg_container">
                <h1 class="text-center pt-5 pb-5">Formulaire de contact</h1>
                <div class="text-center mb-5">
                    <?php 
                    if (isset($submit)){
                        if  ($sexe == "" || $nom == "" || $prenom == "" || $email == "" || $naissance == "" || $monselect == "null" || $textarea == ""){
                            echo("<span style='color: red; font-size: 25px;'>Merci de compléter tous les champs obligatoires !</span>\n");
                            }
                    }
                    ?>
                </div>
                <form name="formulaire" action="contact.php" method="POST" enctype="multipart/form-data">
                    <div class="blockprincipal mb-5 row">
                        <div class="block1 col-md-12 col-lg-6">
                            <label for="sexe" class="label ml-3 mt-3 w-25 text-center">*Sexe :</label>
                            <div class="d-flex">
                                <div>
                                    <input type="radio" id="homme" name="sexe" value="Mr" class="ml-1" >
                                    <label for="homme">Homme</label>
                                </div>
                                <div>
                                    <input type="radio" id="femme" name="sexe" value="Mme" class="ml-1" >
                                    <label for="femme">Femme</label>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="nom" class="label ml-3 w-25 text-center">*Nom :</label>
                                <input type="text" name="nom" id="nom" placeholder="Ex : Dupont" class="ml-1 mb-2 w-75 rounded">
                                <label for="prenom" class="label ml-3 w-25 text-center">*Prenom :</label>
                                <input type="text" name="prenom" id="prenom" placeholder="Ex : Jean" class="ml-1 mb-2 w-75 rounded">
                                <label for="email" class="label ml-3 w-25 text-center">*Email :</label>
                                <input type="text" name="email" id="email" placeholder="Ex : email@monemail.fr" class="ml-1 mb-2 w-75 rounded">
                            </div>
                        </div>
                        <div class="block2 col-md-12 col-lg-6">
                            <div class="d-flex flex-column">
                                <label for="naissance" class="label ml-3 mt-3 width_label text-center">*Date de
                                    naissance :</label>
                                <input type="date" id="naissance" name="naissance" min="1900-01-01" max="2018-12-31"
                                    class="ml-1 w-75 rounded" >
                            </div>
                            <div>
                                <label for="interet" class="label ml-3 mt-3 width_label text-center">Centres d'intérêt
                                    :</label>
                                <div>
                                    <input type="checkbox" id="voyager" name="voyager" value="voyager" class="ml-1">
                                    <label for="voyager">Voyager</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="photographie" name="photographie" value="photographie" class="ml-1">
                                    <label for="photographie">La photographie</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="animaux" name="animaux" value="animaux" class="ml-1">
                                    <label for="animaux">Les animaux</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="balader" name="balader" value="balader" class="ml-1">
                                    <label for="balader">Se balader</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block3 m-auto d-flex flex-column">
                        <label for="monselect" class="label mt-3 margin_label_select text-center">*Type de demande :</label>
                        <select id="monselect" class="select_width mb-3 mt-3 rounded" name="monselect">
                            <option value="null" id="select1" selected>Raison de votre message...</option>
                            <option value="Passer commande">Passer commande</option>
                            <option value="Faire une réservation">Faire une réservation</option>
                            <option value="Proposer des idées">Proposer des idées</option>
                            <option value="Privatiser l'établissement">Privatiser l'établissement</option>
                            <option value="Faire une réclamation">Faire une réclamation</option>
                            <option value="Autre...">Autre...</option>
                        </select>
                        <label for="textarea"></label>
                        <textarea id="textarea" name="textarea" class="textarea_margin rounded" placeholder="Votre message..."></textarea>
                        <input type="submit" value="Envoyer" id="monBoutton" name ="submit" class="w-25 mb-2 mt-3 boutton_margin">
                        <p class="text-right pr-5">*Champs obligatoire</p>
                    </div>
                    <div class="ml-5">
                        <?php 
                        if (preg_match("/[^a-z-A-Zéèàêîëï]/", $nom)){
                            echo("<br><span style='color: red;'>Merci d'indiquer un nom sans caractères spéciaux</span>");
                            $nameIsChecked = false;

                        }
                        
                        if (preg_match("/[^a-z-A-Zéèàêîëï]/", $prenom)){
                            echo("<br><span style='color: red;'>Merci d'indiquer un prenom sans caractères spéciaux</span>");
                            $subnameIsChecked = false;
                        }
                        
                        if (preg_match("/[^a-z-A-Z@.0123456789]/", $email)){
                            echo("<br><span style='color: red;'>Merci d'indiquer une adresse email valide</span>");
                            $mailIsChecked = false;
                        }
                        ?>
                    </div>
                    <div class="ml-5 mt-2">
                        <?php
                        if (isset($submit)){
                        echo("Votre sexe : <b>".$sexe."</b><br>\n");
                        echo("Votre date de naissance : <b>".$naissance."</b><br>\n");
                        echo ("Vos centres d'intérêt : <b>".$interet1."</b><br>\n");
                        echo("Votre nom : <b>".$nom."</b><br>\n");
                        echo("Votre prénom : <b>".$prenom."</b><br>\n");
                        echo("Votre adresse email : <b>".$email."</b><br>\n");
                        echo ("Vous avez sélectionné le champ suivant : <b> ".$monselect."</b><br>\n");
                        echo( "Votre message : <b>".$textarea."</b><br>\n");
                        }
                        // Config mail 

                        ini_set( 'display_errors', 1 );

                        error_reporting( E_ALL );

                        $to = "geoffroy.c@codeur.online";

                        $subject = "Vérification PHP mail";

                        $message = "Message de : $sexe $nom $prenom\nDate de naissance : $naissance\nMail : $email\nRaison du message : $monselect\nMessage : $textarea\n";

                        $headers = "From: ostreiculture@geoffroy.sanchez";
                        ?>
                    </div>
                    <div class="text-center">
                        <?php 
                            if ($nameIsChecked == true && $subnameIsChecked == true && $mailIsChecked == true && $sexe != "" && $nom != "" && $prenom != "" && $email != "" && $naissance != "" && $monselect != "null" && $textarea != ""){
                            mail($to,$subject,$message, $headers);
                            echo "<br><span style='color: green; font-size: 25px;'>L'email a été envoyé.</span>";    
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="apps.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</body>

</html>