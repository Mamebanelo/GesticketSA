<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout de nouvelle session</title>

    <link rel="stylesheet" type="text/css" href="../Public/css/add-session.css"> 
</head>

<body>
        <div align ="center"> 
            
                <div class="imgcontainer">
                    <p align= "center"> 
                        <img src="../Public/img/sticker SA.png" style="width: 100px">
                        <img src="../public/img/icone.png" style="width: 100px; margin-left: 35px; position: absolute">
                    </p>
                
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
                    <p align= "center" style= "font-size: 15px">Bonjour cher(e) Assistant(e) Directeur, <br/> vous pouvez à partir d'ici ajouter une session <br/> (année académique ou promotion) </p>
                </div>
                <?php
                              if(isset($_GET['erreur'])){
                                  echo $_GET['erreur'];
                              }
                        ?>
                
                <form action="../Contrôleurs/insertSession.php" method="POST">
                    <div>
                        <input type="text" placeholder="Nom" name="nom"/>
                                
                    </div>
                    <div>
                        <input type="text" placeholder="Année" name="annee"/>
                    </div>
                    <div>
                       <input type="date" placeholder="Date de début" name="debut"/>     
                    </div>
                    <div>
                        <input type="date" placeholder="Date de fin" name="fin"/>
                    </div>
                    <div>
                       <input type="number" placeholder="Effectif Total" name="effectif"/>
                </div>
                    <div>
                        <button type="reset" class="cancelbtn" style="float: left; background-color: #EC7E07; margin-top: 15px;margin-bottom: 25px;">Annuler</button>
                        <button type="submit" style="float:right; background-color: #06878A; margin-top: 15px;margin-bottom: 25px;"> Créer </button>
                    </div>
                </form> 
        </div>
    
</body>
</html>