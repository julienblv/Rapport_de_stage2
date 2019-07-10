<?php 
session_save_path();
session_start();
$_SESSION['id']=$_POST['id'];
?>

<!DOCTYPE html>
<html lang="fr">


<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <link rel ="stylesheet" href="http://localhost/Dossier%20Php/Cpam_CPA/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"  href="Style.css" type="text/css">
</head>



<body>

<div class="container-fluid">
    <h1 class="txttitre2"> CPAM PCA </h1>
    <br/>

    <div class="liens">
        <li id='liens'><a class="colotxttab" href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
        <li id='liens'><a class="colotxttab" href="http://localhost/Dossier%20Php/Cpam_CPA/Modif_Pt3.php"> Modifier le contact ?</a></li>
        <li id='liens'><a class="colotxttab" href="http://localhost/Dossier%20Php/Cpam_CPA/Modification_Annuaire.php"> Retour à la liste ?</a></li>
        <br/>
    </div>


</div>



<form method="POST" action="Modif_Pt3.php?id='<?php $_POST['id']?>'"> 



<?php
//partie récupération 

//passage en paramètre a voir plus tard 
//la page show va afficer un contact avec un id en dûr dans un premier temps 
//récup d'un formulaire qui permet de voir si c'est un admin ou user connecté

$id=$_POST['id'];



$user="root";
$pass="";
$dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);

$req=$dbh->query("SELECT * FROM annuaire_comite_alerte WHERE id like '$id'");

while($resultat = $req->fetch()){
    echo "<div class='txtblock'>";
    echo "<b class='txtalin'><br/><p>Nom : </b>". $resultat['nom']."</p>";
    echo "<p><b>batiment : </b>". $resultat['batiment']."</p>";
    echo "<p><b>etage : </b>". $resultat['etage']."</p>";
    echo "<p><b>fixe : </b>". $resultat['fixe']."</p>";
    echo "<p><b>portable : </b>". $resultat['portable']."</p>";
    echo "<p><b>niveau : </b>". $resultat['niveau']."</p>";
    echo "<p><b>fonction : </b>". $resultat['fonction']."</p>";
    echo "<p><b>type : ". $resultat['type']."</p></div>";
}

?>


<div class="button_center">
    <input type="Submit" value="modifier le contact">
</div>

</form>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>