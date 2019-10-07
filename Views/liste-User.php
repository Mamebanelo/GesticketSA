<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Sessions</title>

    <link rel="stylesheet" type="text/css" href="../Public/css/liste-User.css"> 
</head>

<body>
        <div align ="center"> 
            
                <div class="imgcontainer">
                    
                    <p align= "center">
                            <div class="element">
                            <?php
                            include('menu.php');
                            ?>
                                    
                                </div> <img src="../Public/img/sticker SA.png" style="width: 100px"></p>
                   
                    <p align= "center" style= "font-size: 15px"> <h2> LISTE DES DIFFERENTS UTILISATEURS </h2> 

                    <?php
     include_once('db_connect.php');
           $query = $pdo->query("SELECT * FROM `user` ");
           $users = $query->fetchAll();
        //var_dump($users) ;

         ?>


         <table border="1" >
                <thead>
                <tr width="100px" height="30px">
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>Login</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($users as $key => $user) {
                   
                ?>
                    <tr>
                       <td><?php echo $user['Nom'];?></td>
                       <td><?php echo $user['Prenom'];?></td>
                       <td><?php echo $user['Login'];?></td>
                    </tr>
                <?php
                     
                    }
                 ?>
                </tbody>
         </table>




