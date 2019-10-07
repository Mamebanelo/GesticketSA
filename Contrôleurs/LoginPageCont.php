<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['uname']) and !empty($_POST['psw'])  ){
    $login= $_POST['uname'];
    $password=$_POST['psw'];
   //3-Traitement => Connexion dans une BD
         include_once('db_connect.php');
         $query = $pdo->query("SELECT * FROM `user` WHERE LOGIN='$login' and Password ='$password'");
         //d) Recuperer resultat
         $resultat = $query->fetch();
         if(isset($resultat['ID'])){
            header("Location: ../Views/liste-User.php");  
         }else{
            header("Location: ../Views/PageLogin.php?erreur=Login ou Mot de passe Incorrect"); 
         }

}else{
    header("Location: ../Views/PageLogin.php?erreur=Login ou Mot de passe Obligatoire");  
}


?>