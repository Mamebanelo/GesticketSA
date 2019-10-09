
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
            <h2>Ajout d'un nouveau référentiel</h2>
            <div class="ref">
              <legend></legend>
    <div class="champ">
      
    
            <form action="../Contrôleurs/insertRef.php" method="POST">
            
            <input type="text" placeholder="Ajouter un référentiel" name="nom"  />
          <input type="reset" value="Annuler" id="annuler">
          <input class="buttom" type="submit" value="Valider">
          </form>
      </div>
            
          </main>
          
        </div>
        
      </div>


</body>
</html>