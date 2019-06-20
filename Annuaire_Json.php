<!DOCTYPE html>
<html lang="fr">

<head>
    
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
</head>

<body>




<h1> CPAM PCA </h1>

<label>Vôtre CPAM :</label>
<select>
    <option value="">--Choisissez une option--</option>
    <option> Haute-Garonne</option>
    <option> Tarn </option>
    <option> Aveiron </option>
    <option> Picardie</option>
</select>


<!--Tableau déroulant -->
<div style="margin-top:100px">
<table border="1">
    <tr>
        <td>nom</td>
        <td>prénom</td>
        <td>secteur</td>

    </tr>
    <tr>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Blavette</button>
                <div class="dropdown-content">
                    <a href="localhost/Dossier Php/Cpam_CPA/Modification_Annuaire.php">modifier</a>
                    <a href="">signaler un probleme</a>
                </div>
            </div>
        </td>


        <td>julien</td>
        <td>informatique</td>
        
    </tr>
</table>
</div>

<!--mise en place d'un boutton action qui renvoies vers la tableau généré par le script Json-->

<input type = "submit" style="margin-top :100px" name = "jason">


</form>


<?php
var_dump(isset($_POST['jason']));
//ouverture et possibilité de modification du fichier en format JSON//
    if(isset($_POST['jason'])){
      
        $monJson = file_get_contents("Numeros_importants.json");
        $monJson = json_decode($js, true);

        $monJson = fopen('Numeros_importants.json','r+');
        fclose('Numeros_importants.json');

        echo "fck";
    }

?>



</body>





</html>