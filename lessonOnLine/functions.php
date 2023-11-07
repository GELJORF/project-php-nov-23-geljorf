<?php
function connectToDatabase()
            {
            
                try {
                    $pdo = new PDO(
                        $dsn = "mysql:host=host.docker.internal;port=3306;dbname=lessons;charset=utf8mb4",
                        $username = 'Gazi',
                        $password = 'C6UvGSR/M_XFDcP@'
                    );
            
                    return $pdo;
                } catch (PDOException $e) {
                    exit("Erreur de connexion à la base de données : " . $e->getMessage());
                }
            }