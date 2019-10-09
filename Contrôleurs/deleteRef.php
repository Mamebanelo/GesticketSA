

<?php

if (!empty($_POST["nom"]) 
    ) 
{
                    $nom = $_POST["nom"];
                    $id = $_POST["id"];
                    

//Connexion à la base de données
include_once('db_connect.php');


$sql = "DELETE FROM `referentiel`  WHERE numref= '$id'" ;
echo $sql;

//Envoi de la requête
$reponse = $pdo->exec($sql);


//Affichage du bon déroulement de la requête à l’utilisateur
if($sql)
                    header("Location: ../Views/liste-ref.php?del=Suppression effectuée avec succès");  
                    else
                    header("Location: ../Views/liste-ref.php?del=NONE");  
 }




?>