<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="Content-type" content="text/html"/>
<!-- mettre une condition si session null ou pas -->



<head>
    <link rel ="stylesheet" href="http://localhost/Dossier%20Php/Cpam_CPA/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet"  href="Style.css" type="text/css">
</head>



<body>

<div class="container-fluid">
    <div class="txttitre">
        <h1 id="h1"><div class="littlespace">CPAM PCA</div></h1>
        <h3 id="h1">Modification_Annuaire</h3>
    </div>

<br/>
    <div class='liens'>    
    <li id='liens'><a  class="colotxttab" href="http://localhost/Dossier%20Php/Cpam_CPA/Numeros_importants.json" download>Téléchargez le Json ici</a></li>
           
            <li id='liens'><a  class="colotxttab" href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
        
    <li id='liens'><a class="colotxttab" href="http://localhost/Dossier%20Php/Cpam_CPA/convertcsv.CSV" download>Téléchargez le CSV ici</a></li>
    <br/>
    </div>


</div>

        


<?php



    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    
   $req=$dbh->query("SELECT * FROM annuaire_comite_alerte");
?>



<?php

    echo "
    <table border='1'>
    <tr class='container-fluid'>
    <th><div class='colotxttab'>Id</div></th>
    <th><div class='colotxttab'>Nom</div></th>
    <th><div class='colotxttab'>Batiment</div></th>
    <th><div class='colotxttab'>Etage</div></th>
    <th><div class='colotxttab'>Portable</div></th>
    <th><div class='colotxttab'>Fixe</div></th>
    <th><div class='colotxttab'>Fonction</div></th>
    <th><div class='colotxttab'>Niveau</div></th>
    <th><div class='colotxttab'>Type</div></th>
    <th><div class='colotxttab'>Modification</div></th>
    <th><div class='colotxttab'>Supression</div></th>
    </tr>" ;

    //initialisation de resultat dans la boucle + Affichage de la requête avec fetch()//
    while($resultat = $req->fetch()){

?>
        <form method="POST" action="Show.php?id='<?php $resultat['id']?>'"> 

<?php   

    $_POST['id']=$resultat['id'];
        
    $_POST['nom']=$resultat['nom'];
        
    echo "
      
    <td><input type='submit' class='btn btn-default btn-lg' value='".$_POST['id']."' name='id'/></td>";
    
?>
    </form>

    <div class="container-fluid">
    </div>

<?php

echo
    
"<td class='container'>".$resultat['nom']."</td></a>
<td class='container'>".$resultat['batiment']."</td></a>
<td class='container'>".$resultat['etage']."</td></a>
<td class='container'>".$resultat['portable']."</td></a>
<td class='container'>".$resultat['fixe']."</td></a>
<td class='container'>".$resultat['fonction']."</td></a>
<td class='container'>".$resultat['niveau']."</td></a>
<td class='container'>".$resultat['type']."</td></a>

";


if ($_SESSION['admin']=="yes"){
    echo 
    "<td class='container'><form method='POST' action='Modif_Pt3.php?id='".$_POST['id']."'>
    <input type='submit' class='btn btn-default btn-lg' value='Modifier ? (".$_POST['id']." )'/></td></a>
    </form>

    <td>
    <form method='POST' action='Delete.php?id='".$_POST['id']."'>
    <input type='submit' class='btn btn-default btn-lg' value='Supprimer ? (".$_POST['id']." )'/></td></a>
    </form>";
}

   
    
  
   echo "</tr>";
    
    }

    echo "</table>
    <//div>";

//partie envoi du contact

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>





</html>