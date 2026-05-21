<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'GestionFormations') ?></title>
    <link rel="stylesheet" href="/gestion.formation/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="site-header-inner">
        <a class="logo" href="/gestion.formation/index.php">Edu<span>Pro</span></a>
        <nav>
            <a href="/gestion.formation/index.php">Accueil</a>
            <a href="/gestion.formation/index.php?page=formations">Formations</a>
            <a href="/gestion.formation/index.php?page=inscription" class="btn-nav">S'inscrire</a>
        </nav>
    </div>
</header>
<main>