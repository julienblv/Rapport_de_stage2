<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Annuaire_Json.php"> Retour à l'accueuil ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Show.php"> Modifier le contact ?</a></li>
<head>
</head>



<body>

<h1> CPAM PCA </h1>
<h3>Modification_Annuaire</h3>






<?php

    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    
   $req=$dbh->query("SELECT * FROM annuaire_comite_alerte");
?>

<form method="POST" acton="Show.php">

<?php  
    echo "<table border='1'>
    <tr>
    Indicateur des colonnes :
    <td>Nom</td>
    <td>Batiment</td>
    <td>Etage</td>
    <td>Portable</td>
    <td>Fixe</td>
    <td>Fonction</td>
    <td>Niveau</td>
    <td>Type</td>
    </tr>
    </br>
    </br>
    Indicateur des lignes: 

    </table>" ;

    //initialisation de resultat dans la boucle + Affichage de la requête avec fetch()//
    while($resultat = $req->fetch()){

    $_POST['id']=$resultat['id'];
        
    echo "<table border='1'>
    <tr>
    <td><input type='submit' value='".$_POST['id']."'/></td>";?>
    </form>

    <?php
    echo "<td>".$resultat['nom']."</td></a>
    <td>".$resultat['batiment']."</td></a>
    <td>".$resultat['etage']."</td></a>
    <td>".$resultat['portable']."</td></a>
    <td>".$resultat['fixe']."</td></a>
    <td>".$resultat['fonction']."</td></a>
    <td>".$resultat['niveau']."</td></a>
    <td>".$resultat['type']."</td></a>
    </tr>";
    
    }

    echo "</table>
    ";

//partie envoi du contact





?>


</body>





</html>