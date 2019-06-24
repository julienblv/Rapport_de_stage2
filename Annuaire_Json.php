

<!DOCTYPE html>
<html lang="fr">
<form method='POST' action= <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
</form>
<?php



echo
"<head>
   
    
</head>

<body>




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
                    <a href='Liste des contacts non modifiable.html'>modifier</a>";

                    echo
                    "<a href=".header('Location: Modification_Annuaire.php')." >signaler un probleme</a>
                </div>
            </div>
        </td>


        <td>julien</td>
        <td>informatique</td>
        
    </tr>
</table>
</div>

<!--mise en place d'un boutton action qui renvoies vers les scripts Json-->

<input type = 'submit' style='margin-top :100px' name = 'jason'>";
var_dump(isset($_POST['jason']));

    if(isset($_POST['jason'])){

//ouverture  du fichier en format JSON//
        $json= file_get_contents("Nueros_importants.json");




        var_dump(json_decode($json));



      
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





//( tentative ) affichage sous forme de tableau//
        $Tab_JSon=json_decode($monJson,true);
        echo "<table>";
            foreach($result as $R=>$D){
                echo"<tr id='Tr_".$R."'>";
            foreach($D as $key=>$Value){
                echo"<td id='Td_".$R."_".$key."'>".$Value."</td>";
            }
            echo"</tr>";
        }
        echo "</table>";



        $monJson = fopen("Numeros_importants.json","r+");
        $monJson = fclose('Numeros_importants.json');

        

      
    }



//connection à la base de données 


try {
    $user="root";
    $pass="";
    $dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);
    foreach($dbh->query('SELECT * from annuaire_comite_alerte') as $row) {
        print_r($row);
        echo "<br>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}



?>




</body>





</html>