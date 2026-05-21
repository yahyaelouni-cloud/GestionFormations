<?php
$pageTitle = 'Mes Cours';
require __DIR__ . '/partials/header.php';
?>

<section>
    <h1>📚 Accès aux cours</h1>

    <?php if ($inscription): ?>
        <p>Bienvenue
           <strong><?= htmlspecialchars($inscription['prenom']) ?></strong> !
           Vous accédez à la formation
           <strong><?= htmlspecialchars($inscription['formation_titre']) ?></strong>.
        </p>
    <?php endif; ?>

    <div class="cards">
        <div class="card">
            <h2>Chapitre 1 — Introduction</h2>
            <p>Présentation générale du programme et des objectifs.</p>
            <a class="btn" href="#">Commencer</a>
        </div>
        <div class="card">
            <h2>Chapitre 2 — Fondamentaux</h2>
            <p>Les bases théoriques et pratiques essentielles.</p>
            <a class="btn" href="#">Commencer</a>
        </div>
        <div class="card">
            <h2>Chapitre 3 — Mise en pratique</h2>
            <p>Exercices et projets guidés.</p>
            <a class="btn" href="#">Commencer</a>
        </div>
    </div>

    <p style="margin-top:24px;">
        <a href="index.php">← Retour à l'accueil</a>
    </p>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>