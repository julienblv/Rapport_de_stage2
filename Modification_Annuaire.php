<?php 
session_save_path();
session_start();
//$_SESSION['id']=$_POST['id'];
?>

<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html"/>
<!-- mettre une condition si session null ou pas -->
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<head>
</head>

<body>

<h1> CPAM PCA </h1>
<h3>Modification_Annuaire</h3>


<a href="http://localhost/Dossier%20Php/Cpam_CPA/Numeros_importants.json" download>Téléchargez le Json ici</a>

<?php



    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    
   $req=$dbh->query("SELECT * FROM annuaire_comite_alerte");
?>



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
    <td>modification</td>
    </tr>
    </br>
    </br>
    Indicateur des lignes: 

    </table>" ;

    //initialisation de resultat dans la boucle + Affichage de la requête avec fetch()//
    while($resultat = $req->fetch()){

?>
        <form method="POST" action="Show.php?id='<?php $resultat['id']?>'"> 

<?php   

    $_POST['id']=$resultat['id'];
        
    $_POST['nom']=$resultat['nom'];
        
    echo "<table border='1'>
    <tr>  
    <td><input type='submit' value='".$_POST['id']."' name='id'/></td>";
    
?>
    </form>

<?php
    echo 
    "<form method='POST' action='Modif_Pt3.php?id='".$_POST['id']."'>
    <input type='submit' value='Modifier le contact".$_POST['id']." ?'/></td></a>
    </form>
    <td>".$resultat['nom']."</td></a>
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


var_dump($_POST['nom']);
print_r($_POST['nom']);
var_dump($resultat['id']);
?>


</body>





</html>