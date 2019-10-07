<?php

// Récupération des données saisies dans des variables
  if (!empty($_POST["nom"]) && 
      !empty($_POST["prenom"])&&
       !empty($_POST["Email"]) && 
       !empty($_POST["Login"]) && 
       !empty($_POST["Password"]) && 
       !empty($_POST["Conf_Password"])) 
{
          if($_POST["Password"]!=$_POST["Conf_Password"]){
            header("Location: ../Views/add-user.php?erreur=les mots de passe ne sont pas identiques"); 

          }
                   
                    $nom = $_POST["nom"];
                    $prenom = $_POST["prenom"];
                    $email = $_POST["Email"];
                   // $profil = $_POST["Profil"];
                   $profil='AD';
                    $login = $_POST["Login"];
                    $psw = $_POST["Password"];
                    $Cpsw = $_POST["Conf_Password"];


                    //Connexion à la base de données
                    include_once('db_connect.php');

                    //Ecriture de la requête
                    $requete="INSERT into `user` ( `Nom`, `Prenom`, `Profil`, `Login`, `Password`, `Conf_psw`) values('$nom','$prenom', '$profil', '$login', '$password', '$Cpsw')";
                    echo $requete;
                    //Envoi de la requête
                    $reponse = $pdo->exec($requete);

                    //Affichage du bon déroulement de la requête à l’utilisateur
                    if($reponse)
                    header("Location: ../Views/liste-User.php");  
                    else
                    header("Location: ../Views/add-user.php?erreur=Le login existe déja");  
 }

 else
 { // cas où les données n'ont pas été saisies
    header("Location: ../Views/add-user.php?erreur=les champs n'ont pas été remplis");  


  }
?>
