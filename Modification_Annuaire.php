<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>

<head>
</head>
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
    Indicateur des lignes: 
    
    </table>" ;
    while($resultat = $req->fetch()){
        
    echo "<table border='1'>
    <tr>
    <td><a href='http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php'>".$resultat['nom']."</td></a>
    <td><a href='http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php'>".$resultat['batiment']."</td></a>
    <td><a href='http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php'>".$resultat['etage']."</td></a>
    <td><a href='http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php'>".$resultat['portable']."</td></a>
    <td><a href='http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php'>".$resultat['fixe']."</td></a>
    </tr>";
    
    }

    echo "</table>";


?>


</body>





</html>