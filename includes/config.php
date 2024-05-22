<?php
define('DB_SERVER', 'mysql:host=localhost;dbname=my_shop');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '1234');
define('DB_DATABASE', 'my_shop');

// Paramètres de connexion à la base de données
try {
    $bdd = new PDO(DB_SERVER, DB_USERNAME, DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
