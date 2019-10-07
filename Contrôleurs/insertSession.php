<?php

// Récupération des données saisies dans des variables
  if (!empty($_POST["nom"]) && 
      !empty($_POST["annee"])&&
       !empty($_POST["debut"]) && 
       !empty($_POST["fin"]) && 
       !empty($_POST["effectif"])
    ) 
{
                    $nom = $_POST["nom"];
                    $annee = $_POST["annee"];
                    $debut = $_POST["debut"];
                    $fin=$_POST["fin"];
                    $effectif = $_POST["effectif"];

                    //Connexion à la base de données
                    include_once('db_connect.php');

                    //Ecriture de la requête
                    $requete="INSERT into `session` ( `Nom`, `Annee`, `Debut`, `Fin`, `Effectif`) values('$nom','$annee', '$debut', '$fin', '$effectif')";
                    echo $requete;
                    
                    //Envoi de la requête
                    $reponse = $pdo->exec($requete);

                    //Affichage du bon déroulement de la requête à l’utilisateur
                    if($reponse)
                    header("Location: ../Views/liste-session.php");  
                   /* else
                    header("Location: ../Views/add-user.php?erreur=Le login existe déja");  */
 }

 else
 { // cas où les données n'ont pas été saisies
    header("Location: ../Views/add-session.php?erreur=les champs n'ont pas été remplis");  


  }
?>
