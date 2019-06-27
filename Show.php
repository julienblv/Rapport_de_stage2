<!DOCTYPE html>
<html lang="fr">



<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php"> Modifier le contact ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Annuaire_Json.php"> Retour à l'acceuil ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modification_Annuaire.php"> Retour à la liste ?</a></li>
</head>



<body>

<h1> CPAM PCA </h1>
<h3>Show</h3>




<h1>Entrez les informations du contact à Ajouter :</h1>




<form action="Modif_pt3.php" method="POST">


Nom:<input type="text" name="nom"><br>

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



//id en "dûr"
//id1
//passage en paramètre a voir plus tard 
//la page show va afficer un contact avec un id en dûr dans un premier temps 




?>



</body>
</html>