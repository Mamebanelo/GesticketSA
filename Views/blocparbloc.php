 <div class="ref">
              <legend></legend>
                <div class="champ"><!DOCTYPE html>
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
                                <h3 class="titre"> GESTION DE TICKET </h3>
                                <ul class="nav__list">
                                            <li class="nav__list-item">
                                            <a href="#" class="nav__item-link"><img src="../Public/img/calender.png" >Session</a>
                                            </li>
                                            <li class="nav__list-item">
                                            <a href="#" class="nav__item-link"><img src="../Public/img/user.png" >Utilisateur</a>
                                            </li>
                                            <li class="nav__list-item">
                                            <a href="#" class="nav__item-link"><img src="../Public/img/ref.png" >Référentiel</a>
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

                                    <a href="#" class="thumb">Ajouter</a>

                                    <a href="#" class="thumb">Nos Référentiels</a>

                                    </div>
                            </nav>

                            <main class="content">
                                <h2>Liste de nos Référentiels</h2>
                                    <div class="champ">
                                        <?php
                                                include_once('db_connect.php');
                                                $query = $pdo->query("SELECT * FROM `referentiel` ");
                                                $refefentiels = $query->fetchAll();
                                        ?>

                                        <table>

                                                <tbody>
                                                        <?php 
                                                            foreach ($refefentiels as $key => $referentiel) {
                                                        ?>   
                                                        <tr>
                                                            <td> <?php echo $referentiel['numref'];?> </td> 
                                                            <td> <?php echo $referentiel['Nom'];?> </td>
                                                            <td><input type="text" value="Modifier" id="modifier"></td>
                                                            <td><input class="buttom" type="submit" value="Supprimer"></td>
                                                        </tr>
                                                </tbody>
                                        </table>
                                    </div>    
                           </main>
                        </div>
</div>        
</body>
                                                            
                                                            </html>