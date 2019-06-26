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



<form method="POST" action= "http://localhost/phpmyadmin/db_structure.php?server=1&db=annuaire">
<h1>Entrez les informations du contact à Ajouter :</h1>
</form>


<?php
     
     //bien mais obsolete pour php5 a remplaçer avec msqli :


     mysqli_connect("127.0.0.1", "root", " ", "annuaire_comite_alerte");
     if (!$link) {
          die('Erreur de connexion : ' . mysqli_connect_error());
      }
      

     mysql_select("annuaire") or die(mysql_error());
     $UID=(int)$_GET['ID'];
     $querry=mysql_query("SELECT * FROM annuaire_comite_alerte WHERE id='$UID'")or die(mysql_error());
     
     if(mysql_num_rows($query)>=1){
          while($row = mysql_fetch_array($query>=1)) {
               $nom = $row['nom'];
               $batiment=$row['batiment'];
               $etage=$row['etage'];
               $portable=$row['portable'];
               $fixe=$row['fixe'];
     }
?>
<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">


<input type="hidden" name="ID" value="<?=$UID;?>"><br>

Nom:<input type="text" name="ud_nom" value="<?$nom;?>"><br>

Batiment:<input type="text" name="ud_batiment" value="<?$nom;?>"><br>

Etage:<input type="text" name="ud_etage" value="<?$nom;?>"><br>

Portable:<input type="text" name="ud_portable" value="<?$nom;?>"><br>

Fixe:<input type="text" name="ud_fixe" value="<?$nom;?>"><br>

<input type="Submit">


</form>

<?php
     }else{
          echo "Pas d'entrée trouvée. <a href='javascript:history.back()'>Retour en arrière ?</a>" ;
     }
?>

<?php


$ud_ID = (int)$_POST["ID"];

$ud_nom = mysql_real_escape_string($_POST["ud_nom"]);
$ud_batiment = mysql_real_escape_string($_POST["ud_batiment"]);
$ud_etage = mysql_real_escape_string($_POST["ud_etage"]);
$ud_portable= mysql_real_escape_string($_POST["ud_portable"]);
$ud_fixe= mysql_real_escape_string($_POST["ud_fixe"]);


$query="UPDATE stokesley_students
        SET nom = '$ud_nom', batiment = '$ud_batiment', etage = '$ud_etage', portable='$ud_portable', fixe = '$ud_fixe' 
        WHERE ID='$ud_ID'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
echo "<p>($ud_ID) Record Updated<p>";
}else{
echo "<p>($ud_ID) Not Updated<p>";
}
   


?>


</body>





</html>