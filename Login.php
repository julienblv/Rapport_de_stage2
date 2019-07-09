<?php 
session_start();

if(isset($_POST) &&!empty($_POST['login']) && !empty($_POST['mdp'])){
    extract($_POST);
    
//les variables sessions qui vont communiquer via ttes les pages 
//et permettre l'affichage et gestion du site selon si un admin ou user est connecté 
$_SESSION['admin'];

}
?>

<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>


<head>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>

<link rel ="stylesheet" href="http://localhost/Dossier%20Php/Cpam_CPA/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet"  href="Style.css" type="text/css">
</head>

<body>

<h1> Bienvenue sur l'application CPAM PCA </h1>
<h3>Veuillez vous connecter avec les identifiants qui vous on été distribués au préalable</h3>

<form method="POST" action= "Login.php">

Login:
<input type = 'txtbox' name='login'>

Password:
<input type = 'password'name='mdp'>

Vôtre CPAM :
<select name="id_cpam">
    <optgroup label="id_cpam">
        <option value="id_cpam">Haute-Garonne_(31)</option>
        <option value="id_cpam">Tarn_et_Garonne_(82)</option>
        <option value="id_cpam">Loire_Atlantique_(44)</option>


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
    
    $req=$dbh->query("SELECT id,id_cpam FROM gestion_des_comptes WHERE login_utilisateur='$login' AND mdp_utilisateur='$mdp'");
    $req2=$dbh->query("SELECT id_cpam FROM gestion_des_comptes WHERE id_cpam='$id_cpam'");

    //affichage bd//

        $login=$_POST['login'];
        $mdp=$_POST['mdp'];
        $id_cpam=$_POST['id_cpam'];




 //affichage admin 
 if ($req=$dbh->query("SELECT '$login',admin_or_not FROM gestion_des_comptes WHERE admin_or_not=1")){
    echo "connecté en tant qu'admin, bienvenue employé: ".$login." ! ";
    //variable pour les autres pages qui gèrera l'affichage 
    $_SESSION['admin']="yes";
}
elseif($req=$dbh->query("SELECT '$login',admin_or_not FROM gestion_des_comptes WHERE admin_or_not=0")){
    //affichage user
    echo "connecté en tant qu'utilisateur, bienvenue employé: ".$login." ! ";
    $_SESSION['admin']="no";
}

$_POST['id_cpam'];
print_r($_POST['id_cpam']);


if($_POST['id_cpam']){

if($_POST['login'] && $_POST['mdp']){
    
        echo"</br>";
        sleep(1);
        sleep(1);    
        sleep(1);
        header('Location: Modification_Annuaire.php');
        //formulaire qui fera que l'utilisateur pourra voir des contacts snas les modifier//
        $uti=$_POST['mdp'];
        }
        
    else {
            echo"les identifiants sont corrects mais la Cpam ne corresponds pas";
        }
    
}

if($_POST['login']!=$login && $_POST['mdp']!=$mdp){
        
    echo "erreur vous devez saisir des identifiants valides, vous avez peut être fait une erreur de syntaxe";
    }      

?>


</body>


</head>


</html>