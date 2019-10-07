<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout de nouvelle session</title>

    <link rel="stylesheet" type="text/css" href="../Public/css/add-user.css"> 
</head>

<body>
        <div align ="center"> 
                <div class="imgcontainer">
                    <p align= "center"> <img src="../Public/img/sticker SA.png" style="width: 100px"></p>

                    <div class="element">
   
                            <button type="button" class="cancelbtn" style="float: left 20px; margin-right: 50px; background-color: #EC7E07;">
                                <select name="menu" style="background-color: #EC7E07;">
                                        <option> Utilisateurs </option>
                                    <option> Nouveau </option>
                                    <option>Liste</option>
                                </select></button>
                        
                            <button type="submit" style="float:right 20px; background-color: #06878A">  <select name="menu" style="background-color: #06878A;">
                                    <option> Sessions </option>
                                <option> Nouveau </option>
                                <option>Liste</option>
                            </select> </button>
                        </div>
                    <p align= "center" style= "font-size: 15px">Bonjour, <br/> vous pouvez à partir d'ici ajouter un utilisateur. </p>
                </div>
                        <?php
                              if(isset($_GET['erreur'])){
                                  echo $_GET['erreur'];
                              }
                        ?>

                <form action="../Contrôleurs/insertUser.php" method="POST">
                    <div class="container" style="display: flex">
                        <label for="nom"></label>
                        <input type="text" placeholder="Nom" name="nom" style="width: 95px"/>
                        <label for="prenom"></label>
                        <input type="text" placeholder="Prénom (s)" name="prenom" style="margin-left: 10px"/>
                                
                    </div>
                    <div>
                        <label for="Email"> </label>
                        <input type="text" placeholder="Email" name="Email"/>
                    </div>
                    <div>
                            <label for="Login"></label>
                            <input type="text" placeholder="Login" name="Login"/>     
                        </div>
                    <div>
                                <label for="Password"></label>
                                <input type="password" placeholder="Password" name="Password"/>
                    </div>
                    <div>
                            <label for="Conf_Password"></label>
                            <input type="password" placeholder="Confirmer Password" name="Conf_Password"/>
                </div>
                    <div>
                        <button type="reset" class="cancelbtn" style="float: left; background-color: #EC7E07; margin-top: 15px;margin-bottom: 25px;">Annuler</button>
                        <button type="submit" style="float:right; background-color: #06878A; margin-top: 15px;margin-bottom: 25px;"> Créer </button>
                    </div>
                </form> 
        </div>
    
</body>
</html>