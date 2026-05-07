<?php
require "includes/fonctions.php";
require "includes/validation.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom = nettoyer($_POST["nom"]);
$prenom = nettoyer($_POST["prenom"]);
$email = nettoyer($_POST["email"]);
// Validation
$erreur = validerFormulaire($nom, $prenom, $email);
// Affichage
if (!empty($erreur)) {
echo afficherErreur($erreur);
} else {
echo afficherSucces($nom, $prenom, $email);
}
}
?>
