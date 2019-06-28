<!DOCTYPE html>
<html lang="fr">
<li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Login.php"> Deconnexion ?</a></li>
<head>
</head>



<body>

<form method="POST" action="Annuaire_Json.php">



<h1> CPAM PCA </h1>

<label>Vôtre CPAM :</label>
<select>
    <option value=''>--Choisissez une option--</option>
    <option> Haute-Garonne</option>
    <option> Tarn </option>
    <option> Aveyron </option>
    <option> Picardie</option>
</select>


<!--Tableau déroulant -->
<div style='margin-top:100px'>
<table border='1'>
    <tr>
        <td>nom</td>
        <td>prénom</td>
        <td>secteur</td>

    </tr>
    <tr>
        <td>
            <div class='dropdown'>
                <button class='dropbtn' name = 'redir' >Blavette</button>
                <div class='dropdown-content'>

                    <a href=''></a>
                   <li><a href="http://localhost/Dossier%20Php/Cpam_CPA/Modification_Annuaire.php">Liste Complète ?</a></li>               
               </div>
            </div>
        </td>


        <td>julien</td>
        <td>informatique</td>
        
    </tr>
</table>
</div>

<!--mise en place d'un boutton action qui renvoies vers les scripts Json-->

<input type = 'submit' style='margin-top :100px' name = 'jason' value="Modifier Via Fichier Json et observer la Base de données">
</form>


<?php

$json=$_POST['jason'];
if($_POST['jason']){

//ouverture  du fichier en format JSON//
        $json= file_get_contents("Cpam_CPA/Nueros_importants.json");
    var_dump(json_decode($json));
        $json = fopen("Numeros_importants.json","r+");
        $json = fclose('Numeros_importants.json');




//Affichage de la base de données complète :
echo "<h3>Voici la base de données sous forme de tableau Array() :</h3><br>";

        try {
            $user="root";
            $pass="";
            $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
            foreach($dbh->query('SELECT * from annuaire_comite_alerte') as $row) {
                echo "<h3>__________________________________________________________________________________________________</h3><br>";
                print_r($row);
                echo "<br>";
            }
            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

        

      
    }


      
//possibilité de modification////////////////////////////////////////////
    //     $monJson = file("Numeros_importants.json");
    //     for($i;$i<count($monJson);$i++)
    //     {
    //         $enregistrement[$i]strtok($monJson[$i]," /n/t");
    //         echo "<font color='blue'>".$enregistrement[$i]."</font><br>";
    //     }
        

    //     if(!$valeur)
    //     {
    //         echo=
    //         "<form method='post' action=''>
    //         <b>Copier/coller l'enregistrement à modifier</b> <input type='text name ='valeur' size='55'><br>
    //         <b>modifier l'enregistrement ci-dessus : </b> <input type='text' name='modif' size='55'><br>
    //         <input type = 'submit'>
    //         </form>";
    //     }

    //     if($modif){
    //         echo "<br><b>fichier modifié</b><br>";
    //             for($i=0);$i<count(($lecture));$i++)
    //             {
    //                 $enregistrement[$i]=strtok($lecture[$i],"\n");
    //                     if(prog_match("/$valeur/",$enregistrement[$i]))
    //                     {$enregistrement[$i]=$modif;}
    //                             if($enregistrement[$i] !="")
    //                             { $new_enreg.$enregistrement[$i]."\n";
    //                                 echo $enregistrement[$i]."<br>"; }
    //                     }

    //             }
    //     }

    //     $monJson=fopen("Numeros_importants.json","u+");
    //     fwrite($monJson,$new_enreg);
    //     fclose($monJson);
    // }


/////////////////////////////////////////////////////////////////////////////////:


    


?>




</body>





</html>