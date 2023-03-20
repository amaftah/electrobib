<?php 
            try{
              $db = new PDO("mysql:host=localhost;dbname=emprunts_douvrages;charset=utf8mb4;", 'root', ''); 
                           
            }
            catch(PDOException $e){
              echo 'Erreur : ' . $e->getMessage();
            }
            // refrech page every 10 seconds
            $sec = "40";
            header("Refresh: $sec");
    ?>