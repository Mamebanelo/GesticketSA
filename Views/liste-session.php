<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Sessions</title>

    <link rel="stylesheet" type="text/css" href="../Public/css/liste-session.css"> 

</head>
<body>

<div id="content">
           
            
        </div>
        <div align ="center"> 
            
                <div class="imgcontainer">
                    <p align= "center"> 
                            <div class="element">

                            <?php
                            include('menu.php');
                            ?>
                            </div>
                        <img src="../Public/img/sticker SA.png" style="width: 100px"></p>
                    
                    <p align= "center" style= "font-size: 15px"> <h2> LISTE DES DIFFERENTES SESSIONS </h2> </p> 

                    <?php
                        include_once('db_connect.php');
                        $query = $pdo->query("SELECT * FROM `session` ");
                        $sessions = $query->fetchAll();
                    ?>
<table style="width:80% ; color:#EC7E07 ; text-align:center; border-color:#06878A " >
   <tr>
       <th>ID</th> 
       <th>NOM</th>
       <th>ANNEE</th>
       <th>DATE DE DEBUT</th>
       <th>DATE DE FIN</th>
       <th>EFFECTIF TOTAL</th>
   </tr>
   
   <tbody>
   <?php 
    foreach ($sessions as $key => $session) {
   ?>   
    <tr>
        <td><?php echo $session['ID'];?></td>
        <td><?php echo $session['Nom'];?></td>
        <td><?php echo $session['Annee'];?></td>
        <td><?php echo $session['Debut'];?></td>
        <td><?php echo $session['Fin'];?></td>
        <td><?php echo $session['Effectif'];?></td>

    </tr>
    <?php
         }
    ?>
</table>



</body>
</html>