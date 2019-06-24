<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>

<head>

<body>

<h1> CPAM PCA </h1>
<h3>Modification_Annuaire</h3>


<form>

<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Annuaire_Json.php"> Retour à l'accueuil ?</a></li>
<br/>
<br>
</form>


    </tr>
</table>


<?php

    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    
   $req=$dbh->query("SELECT * FROM annuaire_comite_alerte");
   echo "<table border='1'>
    <tr>
    Indicateur des colonnes :
    <td>Nom</td>
    <td>Batiment</td>
    <td>Etage</td>
    <td>Portable</td>
    <td>Fixe</td>
    </tr>
    </br>
    </br>
    Indicateur des lignes: "
     ;
    while($resultat = $req->fetch()){
        
    echo "<table border='1'>
    
    <tr>
    <td>".$resultat['nom']."</td>
    <td>".$resultat['batiment']."</td>
    <td>".$resultat['etage']."</td>
    <td>".$resultat['portable']."</td>
    <td>".$resultat['fixe']."</td>
    
    
    
    
    </tr>
    </talbe>" ;
    }



?>


</body>


</head>


</html>