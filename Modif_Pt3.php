<!DOCTYPE html>
<html lang="fr">

<form method='POST' action= <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
</form>

<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>

<head>
</head>
<body>

<h1> CPAM PCA </h1>
<h3>Modification_En_cours</h3>


<form>

<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Annuaire_Json.php"> Retour à l'accueuil ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modification_Annuaire.php"> Retour à la liste ?</a></li>
<br/>
<br>
</form>


<h1>Entrez les informations du contact à Ajouter :</h1>
<br/>
<br/>

Nom:
<input type="text" name='nom'>
<br/>
Batiment:
<input type="text" name='batiment'>
<br/>
Etage:
<input type="text" name='etage'>
<br/> 
Portable:
<input type="text" name='portable'>
<br/>
Fixe:
<input type="text" name='fixe'>
<br/>
<input type='submit' name='ajout' value="Ajouter">

<h1>Entrez les informations du contact à Supprimer :</h1>
<br/>
<br/>


Selectionnez l'id de la personne à supprimer:
<input type="text" name='idspr'>
<br/>
<input type ='submit' name='supprim' value="Supprimer">

<?php

var_dump(isset($_POST['supprim']));
    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    
   $req=$dbh->query("SELECT * FROM annuaire_comite_alerte");
  
//------------------------------------------Partie Ajout-----------------------------------------//

   if ($_POST['nom']!=''){
       $req=$dbh->query("INSERT INTO annuaire_comite_alerte (nom) VALUES ('$nom')");
   }
   if ($_POST['batiment']!=''){
        $req=$dbh->query("INSERT INTO annuaire_comite_alerte (batiment) VALUES ('$batiment')");
    }
   else if ($_POST['etage']!=''){
        $req=$dbh->query("INSERT INTO annuaire_comite_alerte (etage) VALUES ('$etage')");

   }
   else if ($_POST['portable']!=''){
        $req=$dbh->query("INSERT INTO annuaire_comite_alerte (portable) VALUES ('$portable')");
   }
   else if ($_POST['fixe']!=''){
        $req=$dbh->query("INSERT INTO annuaire_comite_alerte (fixe) VALUES ('$fixe')");
   }


//------------------------------------------Partie Supression-----------------------------------------//

   if ($_POST['idspr']!=''){
    $req=$dbh->query("DELETE FROM annuaire_comite_alerte WHERE 'id'=$idspr");

}





?>


</body>





</html>