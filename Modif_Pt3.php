
<?php 
session_save_path();
session_start();
if(isset($_POST) && !empty($_POST['id']))
{
    extract($_POST);
}

// notre session ci dessus qui nous permet de récupérer l'id //
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta http-equiv="Content-type" content="text/html"/>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php"> Modifier le contact ?</a></li>
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modification_Annuaire.php"> Retour à la liste ?</a></li>
</head>



<body>

<h1> CPAM PCA </h1>
<h3>Modification du contact</h3>




<?php



$_SESSION['id'];

//récup d'un formulaire qui permet de voir si c'est un admin ou user connect

$id=$_SESSION['id'];
print_r($id);

$user="root";
$pass="";
$dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);

$req=$dbh->query("SELECT * FROM annuaire_comite_alerte WHERE id like '$id'");


while($resulta = $req->fetch()){
    echo "<br>";
    echo "<br>";
    echo "nom :";
    echo "<input type='txtbox' value='". $resulta['nom']."'/><br><br>";
    echo "batiment :";
    echo "<input type='txtbox' value=' ". $resulta['batiment']."'/><br><br>";
    echo "etage :";
    echo "<input type='txtbox' value=' ". $resulta['etage']."'/><br><br>";
    echo "fixe :";
    echo "<input type='txtbox' value=' ". $resulta['fixe']."'/><br><br>";
    echo "portable :";
    echo "<input type='txtbox' value=' ". $resulta['portable']."'/><br><br>";
    echo "niveau :";
    echo "<input type='txtbox' value=' ". $resulta['niveau']."'/><br><br>";
    echo "fonction :";
    echo "<input type='txtbox' value=' ". $resulta['fonction']."'/><br><br>";
    echo "type :";
    echo "<input type='txtbox' value=' ". $resulta['type']."'/><br><br>";
}
?>

<form method="POST" action="Modif_Pt3.php">


<?php

$button=$_POST['button'];

$nom=$resulta['nom'];
$batiment=$resulta['batiment'];
$etage=$resulta['etage'];
$fixe=$resulta['fixe'];
$portable=$resulta['portable'];
$niveau=$resulta['niveau'];
$fonction=$resulta['fonction'];
$type=$resulta['type'];




?>


<input type="Submit" value="modifier le contact" name ="push">

</form>

<?php 

//insertion dans la database :
if($_POST['button']=="push"){

    try {
        $conn = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO annuaire_comite_alerte (nom, batiment, etage, fixe, portable, niveau, fonction, type)
        VALUES ('$nom', '$batiment', '$etage','$fixe','$niveau','$fonction','$type')";
        // on utilise  exec() car la variable ne retourne rien 
    
        $conn->exec($sql);
        echo "New record created successfully";
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
        }

else{
        echo"insertion failed";
    }
?>
</form>

</body>
</html>