<!DOCTYPE html>
<html lang="fr">



<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
</head>



<body>

<h1> CPAM PCA </h1>
<h3>Modification_En_cours</h3>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Annuaire_Json.php"> Retour à l'accueuil ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modification_Annuaire.php"> Retour à la liste ?</a></li>
<br/>
<br>




<h1>Entrez les informations du contact à Ajouter :</h1>




<form action="Modif_pt3.php" method="POST">


Nom:<input type="text" name="nom"><br>

Batiment:<input type="text" name="batiment"><br>

Etage:<input type="text" name="etage"><br>

Portable:<input type="text" name="portable"><br>

Fixe:<input type="text" name="fixe"><br>

<input type="Submit">
</form>


<?php
try{
     $user = "root";
     $password= "";
     $dbh= new PDO('mysql:host=localhost;dbname=annuaire',$user,$password);
     $requete='SELECT * FROM annuaire_commite_alerte';
     foreach($dbh->query($requete) as $row){
          print_r($row);
     }

     $dbh = null;
}catch(PDOException $e){
     print"Erreur!: " . $e->getmessage() ."</br>";
     die();
}


function afficher_lignes($row){
     echo 'nom : ' . $row['nom'];
     echo"</br>";
     echo 'nom : ' . $row['prenom'];
     echo"</br>";
}
?>

<?php

$nom=$_GET["name"];
$prenom=$_GET["prenom"];
echo'Bonjour'.$nom.' - '.$prenom.'!';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "annuaire";

try {


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>


</body>





</html>