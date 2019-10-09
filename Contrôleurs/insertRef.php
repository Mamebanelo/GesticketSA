
<?php
if (!empty($_POST["nom"])
    ) 
{
                    $nom = $_POST["nom"];
                    

                    //Connexion à la base de données
                    include_once('db_connect.php');

                    //Ecriture de la requête
                    $requete="INSERT into `referentiel` ( `Nom`) values('$nom')";
                    echo $requete;
                    


                    //Envoi de la requête
                    $reponse = $pdo->exec($requete);

                    //Affichage du bon déroulement de la requête à l’utilisateur
                    if($reponse)
                    header("Location: ../Views/liste-ref.php");  
                    else
                    header("Location: ../insertRef.php?erreur=Le nom inscrit existe déja");  
 }

 else
 { // cas où les données n'ont pas été saisies
    header("Location: ../insertRef.php?erreur=les champs n'ont pas été remplis");  


  }
?>
