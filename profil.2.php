<body>
<?php
// Liste des formations
$formations = ["Développement Web", "Réseaux", "Sécurité", "Base de données"];
foreach ($formations as $formation) {
    echo $formation . "<br>";
}

// Informations utilisateur
$utilisateur = [
    "nom" => "ELOUNI",
    "prenom" => "Yahya",
    "email" => "yahya@email.com",
    "formation" => "Développement Web",
    "age" => "20",
];

// Vérification de l'âge
if (is_numeric($utilisateur["age"]) && $utilisateur["age"] > 0) {

    echo "Nom : " . $utilisateur["nom"] . "<br>";
    echo "Prénom : " . $utilisateur["prenom"] . "<br>";
    echo "Email : " . $utilisateur["email"] . "<br>";
    echo "Formation : " . $utilisateur["formation"] . "<br>";
    echo "Age : " . $utilisateur["age"] . "<br>";

    // Message de confirmation
    echo "<h3>Bienvenue " . $utilisateur["prenom"] . " " . $utilisateur["nom"] . " !</h3>";

} else {
    echo "Erreur : L'âge doit être un nombre supérieur à 0.";
}

// Tableau des formations avec durée
$formations = [
    ["nom" => "Développement Web", "duree" => "3 mois"],
    ["nom" => "Réseaux", "duree" => "2 mois"],
    ["nom" => "Sécurité", "duree" => "4 mois"]
];

foreach ($formations as $f) {
    echo "Formation : " . $f["nom"] . " - Durée : " . $f["duree"] . "<br>";
}
?>
</body>
