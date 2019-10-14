<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/ecran2.css" media="screen" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gesticket SA</title>
</head>
<body>
    
    <div class="app-container">
  
        <nav class="nav">
          <a href="#" class="salogo">
           <img src="../Public/img/logo.png">

           
           
          </a>
          <h3 class="titre">
            GESTION DE TICKET
        </h3>
          <ul class="nav__list">
            <li class="nav__list-item">
    
              <a href="#" class="nav__item-link"><img src="../Public/img/calender.png" >Session</a>
            </li>
            <li class="nav__list-item">
              <a href="#" class="nav__item-link"><img src="../Public/img/user.png" >Utilisateur</a>
            </li>
            <li class="nav__list-item">
              <a href="http://localhost/GesTicket_SA/Views/liste-ref.php" class="nav__item-link"><img src="../Public/img/ref.png" >Référentiel</a>
            </li>
          
          </ul>
        </nav>
        
        <div class="app-view">
          
          <nav class="utility-bar">
            <div class="utility-bar__inner">
              <a href="#" class="utility-bar__account">
                  
                <span class="utility-bar__account-avatar"></span>
                <span class="utility-bar__account-name">Admin</span>
              </a>

              <a href="http://localhost/GesTicket_SA/Views/add-ref.php" class="thumb">
               Ajouter
              </a>

              <a href="http://localhost/GesTicket_SA/Views/liste-ref.php" class="thumb">
                  Nos Référentiels
              </a>

            </div>
          </nav>

          <?php
          
                    include_once('db_connect.php');
                    
                    $query = $pdo->query("SELECT session.Nom AS session ,referentiel.Nom AS referentiel, Posseder.effectif FROM Posseder, session, referentiel WHERE session.ID=Posseder.ID and referentiel.numref=Posseder.numref");
                    $PossederS= $query->fetchAll(); 
                   
        ?>

<?php
                if(isset($_GET['RS'])){
                echo $_GET['RS'];}
                ?>

<table style="width:80% ; color:#EC7E07 ; text-align:center; border-color:#06878A " >
   <tr>
       <th>SESSION</th> 
       <th>REFERENTIEL</th>
       <th>EFFECTIF</th>
   </tr>
   
   <tbody>
   <?php 
    foreach ($PossederS as $key => $Posseder)

    {
   ?>   
    <tr>
        <td><?php echo $Posseder['session'];?></td>
        <td><?php echo $Posseder['referentiel'];?></td>
        <td><?php echo $Posseder['effectif'];?></td>

    </tr>
    <?php
         }
    ?>
</table>



</body>
</html>