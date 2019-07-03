
<?php 
session_save_path();
session_start();
$_SESSION['id']=$_POST['id'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php"> Modifier le contact ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modification_Annuaire.php"> Retour à la liste ?</a></li>
</head>



<body>

<h1> CPAM PCA </h1>
<h3>Modification du contact</h3>




<?php
//partie récupération 

//passage en paramètre a voir plus tard 
//la page show va afficer un contact avec un id en dûr dans un premier temps 

$_SESSION['id'];

//récup d'un formulaire qui permet de voir si c'est un admin ou user connecté


print_r($_SESSION);

$user="root";
$pass="";
$dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);

$req=$dbh->query("SELECT * FROM annuaire_comite_alerte WHERE id like '$id'");

while($resultat = $req->fetch()){
    echo "<br>";
    echo "<br>";
    echo "nom :";
    echo "<input type='txtbox' name='". $resultat['nom']."'/><br><br>";
    echo "batiment :";
    echo "<input type='txtbox' name=' ". $resultat['batiment']."'/><br><br>";
    echo "etage :";
    echo "<input type='txtbox' name=' ". $resultat['etage']."'/><br><br>";
    echo "fixe :";
    echo "<input type='txtbox' name=' ". $resultat['fixe']."'/><br><br>";
    echo "portable :";
    echo "<input type='txtbox' name=' ". $resultat['portable']."'/><br><br>";
    echo "niveau :";
    echo "<input type='txtbox' name=' ". $resultat['niveau']."'/><br><br>";
    echo "fonction :";
    echo "<input type='txtbox' name=' ". $resultat['fonction']."'/><br><br>";
    echo "type :";
    echo "<input type='txtbox' name=' ". $resultat['type']."'/><br><br>";
}

?>

<?php 

// $id=$_GET['id'];
// echo "id: ".$id."<br>";

?>






<input type="Submit" value="modifier le contact">
</form>




</body>
</html>