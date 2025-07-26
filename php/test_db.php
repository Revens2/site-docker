<?php
$mysqli = new mysqli('db', 'root', 'root', 'rgl');
if ($mysqli->connect_error) {
    die("❌ Connexion échouée: " . $mysqli->connect_error);
}
echo "✅ Connexion réussie à la base de données !";
?>
