<?php 
session_start();
//$_SESSION['id']=$_POST['id'];

print_r($_SESSION);

print_r($_POST);//contient le login et le mot de passe de celui ou celle qui s'est connecté//

?>

<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html"/>
<!-- mettre une condition si session null ou pas -->
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<head>
<link rel ="stylesheet" href="Cpam_CPA/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"  href="Cpam_CPA/style.css">
</head>

<body>

<div class="container-fluid">
    <div class>
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
    <th>Id<th>
    <th>Nom</th>
    <th>Batiment</th>
    <th>Etage</th>
    <th>Portable</th>
    <th>Fixe</th>
    <th>Fonction</th>
    <th>Niveau</th>
    <th>Type</th>
    <th>modification</th>
    </tr>
    </br>
    </br>
    Indicateur des lignes: 

    " ;

    //initialisation de resultat dans la boucle + Affichage de la requête avec fetch()//
    while($resultat = $req->fetch()){

?>
        <form method="POST" action="Show.php?id='<?php $resultat['id']?>'"> 

<?php   

    $_POST['id']=$resultat['id'];
        
    $_POST['nom']=$resultat['nom'];
        
    echo "
      
    <td><input type='submit' value='".$_POST['id']."' name='id'/></td>";
    
?>
    </form>

<?php

echo
    
"<td>".$resultat['nom']."</td></a>
<td>".$resultat['batiment']."</td></a>
<td>".$resultat['etage']."</td></a>
<td>".$resultat['portable']."</td></a>
<td>".$resultat['fixe']."</td></a>
<td>".$resultat['fonction']."</td></a>
<td>".$resultat['niveau']."</td></a>
<td>".$resultat['type']."</td></a>
<td></td></a>";


if ($_SESSION['admin']=="yes"){
    echo 
    "<td><form method='POST' action='Modif_Pt3.php?id='".$_POST['id']."'>
    <input type='submit' value='Modifier le contact".$_POST['id']." ?'/></td></a>
    </form>";
}

   
    
  
   echo "</tr>";
    
    }

    echo "</table>
    ";

//partie envoi du contact


var_dump($_POST['nom']);
print_r($_POST['nom']);
var_dump($resultat['id']);
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>





</html>