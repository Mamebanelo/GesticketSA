<?php
   //a)  connexion au SGBD login/Mot de passe Mysql
         $dsn = 'mysql:host=localhost;dbname=GesTicket_SA;port=3306;charset=utf8';
         //b) Selectionner BD
         try {
 
            $pdo = new PDO($dsn, 'soumaiyafall' , 'Juillet2013@');
            
            }
            catch (PDOException $exception) {
             
             //mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
             exit('Erreur de connexion à la base de données');
             
            }
         

         ?>