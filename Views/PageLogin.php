<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="../Public/css/Login.css"> 
</head>

<body>



        <div align ="center"> 
                <div class="imgcontainer">
                    <p align= "center"> <img src="../Public/img/sticker SA.png" style="width: 100px"></p>
                    <p align= "center" style= "font-size: 15px">Bienvenue dans votre espace de connexion!</p>
                </div>
                

                <form action="../Contrôleurs/LoginPageCont.php" method="POST">

                <div>
    <?php 
        if(isset($_GET['erreur'])){
             echo $_GET['erreur'];

         }
         
?>
    </div>
                    <div class="">
                        
                        <input type="text" placeholder="Login" name="uname" required>
                                
                    </div>
                    <div>
                      
                        <input type="password" placeholder="Password" name="psw"  />
                    </div>
                    <div class="element">
   
                        <button type="button" class="cancelbtn" style="float: left; background-color: #EC7E07;">Annuler</button>
                        <button type="submit" style="float:right; background-color: #06878A"> Se connecter </button>
                    </div>
                    
                </form> 
        </div>
    
</body>
</html>