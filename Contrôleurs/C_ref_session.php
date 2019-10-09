<?php

if(!empty($_POST['session']) and 
!empty($_POST['referentiel']) and 
!empty($_POST['effectif'])) {

        $session= $_POST['session'];
        $referentiel= $_POST['referentiel'];
        $effectif= $_POST['effectif'];

        include_once('db_connect.php');
        $req = $pdo->exec("INSERT INTO `Posseder` VALUES ($session,$referentiel,$effectif)");   
            header("Location: ../Views/liste-ref.php?RS=Ajout bien effectué");
        }
    else{
            header("Location: ../Views/ref_session.php?RS=champs invalides");
        }
?>