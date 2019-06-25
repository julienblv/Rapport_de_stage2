<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<form method='POST' action= <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<head>

<body>

<h1> Bienvenue sur l'application CPAM PCA </h1>
<h3>Veuillez vous connecter avec les identifiants qui vous on été distribués au préalable</h3>


<div>
Login:
<input type = 'txtbox' id='login'>
</div>

<div>
Password:
<input type = 'password'id='mdp'>
</div>

<input type = 'button' value="connexion" style='margin-top :100px' id = 'co'>

</tr>
</table>

<?php
// ---------------------------------------------Codes D'accès---------------------------
//         User :              Login: utilisateur          Password: malade
//         Admin :             Login: administrateur       Password: guerit
// -------------------------------------------------------------------------------------


var_dump(isset($_POST['co']));
$co=$_POST['co'];


if($_POST['co']){

    //Partie Utilisateur 


   if($_POST['login']== "utilisateur"){
    if($_POST['mdp'] == "malade"){
        echo"connexion en cours";
        sleep(1);
        echo"3";
        sleep(1);
        echo"2";
        sleep(1);
        echo"1";
        sleep(1);
        echo"Bravo vous êtes connecté en tant qu'Utilisateur vous pouvez maintenant accéder au site en cliquand ici :</br>
        
        
        <form>
        <li><a href='http://localhost/Dossier%20Php/Cpam_CPA/Annuaire_Json.php'> Connexion </a></li>
        <br/>
        <br>
        </form>";
        }
    }

        //Partie Admin

        if($_POST['login'] == "administrateur"){
            if($_POST['mdp'] == "guerit"){
                echo"connexion en cours";
                sleep(1);
                echo"3";
                sleep(1);
                echo"2";
                sleep(1);
                echo"1";
                sleep(1);
                echo"Bravo vous êtes connecté en tant qu'Administrateur vous pouvez maintenant accéder au site en cliquand ici :</br>
                
                
                <form>
                <li><a href='http://localhost/Dossier%20Php/Cpam_CPA/Annuaire_Json.php'> Connexion </a></li>
                <br/>
                <br>
                </form>";
            }
        }
        
      
}

echo " <form>
<li><a href='http://localhost/Dossier%20Php/Cpam_CPA/Annuaire_Json.php'> Connexion </a></li>
<br/>
<br>
</form>";

?>


</body>


</head>


</html>