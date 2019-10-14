


       <?php
          
          $id=$_GET['id'];
                    include_once('db_connect.php');
                    $query = $pdo->query("SELECT * FROM session");
                    $sessions= $query->fetchAll(); 
                    $query = $pdo->query("SELECT * FROM referentiel");
                    $referentiels= $query->fetchAll();       
        ?>

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


          
          <main class="content">
            <h2> Référentiels d'une session</h2>
     <div class="ref">
     <?php
                if(isset($_GET['RS'])){
                echo $_GET['RS'];}
                ?>     
        <div class="champ">
                
            <div class="session">

            <form action="../Contrôleurs/C_ref_session.php" method="POST">
                <label for="session">Session</label>
                <select style="width: 300px" name="session" id="session">
                        <option value=""> </option> 
                        <?php 
                          foreach ($sessions as $key => $session) {  
                        ?>
                        <option value="<?php echo $session['ID'];?>"><?php echo $session['Nom'];?></option> 
                        <?php
                        }
                        ?> 
                </select>
            </div>
                <br>
            
            <div class="referentiel">
                <label for="Nom">Réferentiel</label>
                <select style="width: 300px" name="referentiel" id="referentiel">
                        <option value=""> </option>
                        <?php 
                          foreach ($referentiels as $key => $referentiel) {  
                        ?>
                       <option value="<?php echo $referentiel['numref'];?>"><?php echo $referentiel['Nom'];?></option> 
                       <?php
                        }
                       ?>
                </select>
                         
                </select>
              </div>
             <br>
             <div class="effectif">
                 <label  for="effectif">Effectif</label>
                <input style="width: 300px" type="text" placeholder="" name="effectif" />
             </div>

            <br>
            <button type="reset" class="cancelbtn" style=" background-color: #EC7E07; margin-top: 15px;margin-bottom: 25px;">Annuler</button>
                        <button type="submit" style="background-color: #06878A; margin-top: 15px;margin-bottom: 25px;"> Ajouter </button>

            </form>
         </div>
            
          </main>
          
     </div>
        
      </div>


</body>
</html>