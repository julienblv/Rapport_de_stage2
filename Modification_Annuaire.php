<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

<head>

<body>

<h1> CPAM PCA </h1>
<h3>Modification_Annuaire</h3>
        
    </tr>
</table>


<?php

    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    
   $req=$dbh->query("SELECT nom FROM annuaire_comite_alerte");
   echo "<table border='1'>
    <tr>
    <td>Nom</td>
    </tr>";
    while($resultat = $req->fetch()){
        
    echo "<table border='1'>
    
    <tr>
    <td>".$resultat['nom']."</td>
    
    </tr>
    </talbe>" ;
    }



?>



</body>


</head>


</html>