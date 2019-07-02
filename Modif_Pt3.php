<!DOCTYPE html>
<html lang="fr">



<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
</head>



<body>

<h1> CPAM PCA </h1>
<h3>Modification_En_cours</h3>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modification_Annuaire.php"> Retour à la liste ?</a></li>
<br/>
<br>




<h1>Entrez les informations du contact à Ajouter :</h1>


<form method="POST" action="Modif_Pt3.php?id='<?php $_POST['id']?>'"> 


Nom:<input type="text" name="nom" value="<?php $_POST['id']?>"><br>

Batiment:<input type="text" name="batiment"><br>

Etage:<input type="text" name="etage"><br>

Portable:<input type="text" name="portable"><br>

Fixe:<input type="text" name="fixe"><br>

ID (46 Disponibles):<input type="text" name="id"><br>

Niveau (titulaire ou supléant):<input type="text" name="niveau"><br>

Type (directeur/manageur/rpca/pcsecu) :<input type="text" name="type"><br>

<input type="Submit">
</form>


<?php

$_POST['id']=$resultat['id'];

print_r($_POST['id']);
print_r($_GET);
print_r($_GET['id']);
print_r($_POST);


//connexion à la base + affichage des données qui seront prises dans le formulaire + erreurs de gestion
$user="root";
$pass="";
$dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);

$req=$dbh->query("SELECT * FROM annuaire_comite_alerte WHERE id like '$id'");

while($resultat = $req->fetch()){
    echo "Nom: ". $resultat['nom']."<br><br>";
    echo "batiment: ". $resultat['batiment']."<br><br>";
    echo "etage: ". $resultat['etage']."<br><br>";
    echo "fixe: ". $resultat['fixe']."<br><br>";
    echo "portable: ". $resultat['portable']."<br><br>";
    echo "niveau: ". $resultat['niveau']."<br><br>";
    echo "fonction: ". $resultat['fonction']."<br><br>";
    echo "type: ". $resultat['type']."<br><br>";
}

?>


</body>





</html>