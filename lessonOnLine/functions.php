<?php
include_once 'config.php';
function connectToDatabase()
            {           
                try {
                    $pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            
                    return $pdo;
                } catch (PDOException $e) {
                    exit("Erreur de connexion à la base de données : " . $e->getMessage());
                }
            }