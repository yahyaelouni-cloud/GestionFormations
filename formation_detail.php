<?php
$pageTitle = htmlspecialchars($formation['titre']);
require __DIR__ . '/partials/header.php';
?>

<div class="detail-hero">
    <div class="detail-hero-left">
        <a href="index.php?page=formations" class="back-link">← Retour aux formations</a>
        <span class="badge <?= $niveauClass ?>"><?= htmlspecialchars($formation['niveau']) ?></span>
        <h1><?= htmlspecialchars($formation['titre']) ?></h1>
        <p class="detail-desc"><?= htmlspecialchars($formation['description']) ?></p>
        <div class="detail-meta-row">
            <span>⏱ Durée : <strong><?= htmlspecialchars($formation['duree']) ?></strong></span>
            <span>🎯 Niveau : <strong><?= htmlspecialchars($formation['niveau']) ?></strong></span>
        </div>
        <a class="btn" href="index.php?page=inscription&formation_id=<?= $formation['id'] ?>">
            ✏️ S'inscrire à cette formation
        </a>
    </div>
    <div class="detail-hero-right">
        <div class="detail-price-card">
            <p class="prix-big"><?= number_format($formation['prix'], 2, ',', ' ') ?> DT</p>
            <p class="prix-label">Prix total de la formation</p>
            <a class="btn btn-full" href="index.php?page=inscription&formation_id=<?= $formation['id'] ?>">
                S'inscrire maintenant →
            </a>
            <ul class="price-includes">
                <li>✅ Accès illimité aux cours</li>
                <li>✅ Exercices pratiques</li>
                <li>✅ Attestation de réussite</li>
                <li>✅ Support formateur</li>
            </ul>
        </div>
    </div>
</div>

<div class="detail-body">

    <div class="detail-section">
        <h2>🎯 Objectifs de la formation</h2>
        <div class="objectifs-grid">
            <?php foreach ($prog['objectifs'] as $obj): ?>
                <div class="objectif-item">✔ <?= htmlspecialchars($obj) ?></div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="detail-section">
        <h2>📋 Programme détaillé</h2>
        <div class="modules">
            <?php foreach ($prog['modules'] as $mod): ?>
                <div class="module-item">
                    <div class="module-num"><?= $mod['num'] ?></div>
                    <div class="module-content">
                        <div class="module-header">
                            <h3><?= htmlspecialchars($mod['titre']) ?></h3>
                            <span class="module-duree">⏱ <?= $mod['duree'] ?></span>
                        </div>
                        <p><?= htmlspecialchars($mod['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="detail-two-col">
        <div class="detail-section">
            <h2>📌 Prérequis</h2>
            <p><?= htmlspecialchars($prog['prerequis']) ?></p>
        </div>
        <div class="detail-section">
            <h2>💼 Débouchés</h2>
            <p><?= htmlspecialchars($prog['debouches']) ?></p>
        </div>
    </div>

    <div class="detail-cta">
        <h2>Prêt à commencer ?</h2>
        <p>Rejoignez cette formation et développez vos compétences dès aujourd'hui.</p>
        <a class="btn" href="index.php?page=inscription&formation_id=<?= $formation['id'] ?>">
            S'inscrire à <?= htmlspecialchars($formation['titre']) ?> →
        </a>
    </div>

</div>

<?php require __DIR__ . '/partials/footer.php'; ?>