
<?php

if (!empty($_POST["nom"]) 
    ) 
{
                    $nom = $_POST["nom"];
                   
                    $id = $_POST["id"];
                    

//Connexion à la base de données
include_once('db_connect.php');


$sql = "UPDATE `referentiel` SET `Nom`='$nom' WHERE numref=$id";
echo $sql;

//Envoi de la requête
$reponse = $pdo->exec($sql);


//Affichage du bon déroulement de la requête à l’utilisateur
if($sql)
                    header("Location: ../Views/liste-ref.php?good=Modification effectuée avec succès");  
                    else
                    header("Location: ../Views/modifRef.php?erreur=Le nom inscrit existe déja");  
 }




?>