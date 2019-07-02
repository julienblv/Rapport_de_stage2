<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>

<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<head>

<body>

<h1> Bienvenue sur l'application CPAM PCA </h1>
<h3>Veuillez vous connecter avec les identifiants qui vous on été distribués au préalable</h3>

<form method="POST" action= "Login.php">

Login:
<input type = 'txtbox' name='login'>

Password:
<input type = 'password'name='mdp'>


<input type = 'submit' style='margin-top :100px'>

</form>



<?php
// ---------------------------------------------Codes D'accès---------------------------
//         User :              Login: utilisateur          Password: malade
//         Admin :             Login: administrateur       Password: guerit
// -------------------------------------------------------------------------------------


    //Partie Utilisateur 

    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    
    $req=$dbh->query("SELECT * FROM gestion_des_comptes");


    //affichage bd//

    while($resultat = $req->fetch()){
        echo "Nom: ". $resultat['id_utilisateur']."<br><br>";
        echo "batiment: ". $resultat['login_utilisateur']."<br><br>";
        echo "etage: ". $resultat['mdp_utilisateur']."<br><br>";
        echo "fixe: ". $resultat['id_cpam']."<br><br>";
        echo "portable: ". $resultat['admin_or_not']."<br><br>";
    }




        $login=$_POST['login'];
        $mdp=$_POST['mdp'];

   if($_POST['login']== "utilisateur" && $_POST['mdp'] == "malade"){
        echo"</br>";
        sleep(1);
        sleep(1);    
        sleep(1);
        include('Modification_Annuaire.php');
        //formulaire qui fera que l'utilisateur pourra voir des contacts snas les modifier//
        $uti=$_POST['mdp'];
         

        //Partie Admin

        if($_POST['login'] == "administrateur" && $_POST['mdp'] == "guerit"){
            echo"</br>";
            
            sleep(1);
            sleep(1);
            sleep(1);
            include('Modification_Annuaire.php');
            //formulaire qui fera que l'admin pourra voir des contacts snas les modifier//
            $admi=$_POST['mdp'];            
        }
    }

?>


</body>


</head>


</html>