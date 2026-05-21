<?php
$pageTitle = 'Formations';
require __DIR__ . '/partials/header.php';
?>

<section class="section">
    <div class="section-header">
        <h2>Toutes nos Formations</h2>
        <p>Filtrez par niveau et trouvez la formation qui vous correspond.</p>
    </div>

    <div class="filters">
        <a href="index.php?page=formations"
           class="<?= empty($_GET['niveau'] ?? '') ? 'active' : '' ?>">
            Toutes
        </a>
        <a href="index.php?page=formations&niveau=Débutant"
           class="<?= ($_GET['niveau'] ?? '') === 'Débutant' ? 'active' : '' ?>">
            🟢 Débutant
        </a>
        <a href="index.php?page=formations&niveau=Intermédiaire"
           class="<?= ($_GET['niveau'] ?? '') === 'Intermédiaire' ? 'active' : '' ?>">
            🟠 Intermédiaire
        </a>
        <a href="index.php?page=formations&niveau=Avancé"
           class="<?= ($_GET['niveau'] ?? '') === 'Avancé' ? 'active' : '' ?>">
            🔴 Avancé
        </a>
    </div>

    <?php if (empty($formations)): ?>
        <p style="text-align:center; color:var(--muted); padding: 40px 0;">
            Aucune formation disponible pour ce niveau.
        </p>
    <?php else: ?>
        <div class="cards">
        <?php foreach ($formations as $f):
            $niveauClass = match($f['niveau']) {
                'Débutant'      => 'badge-green',
                'Intermédiaire' => 'badge-orange',
                'Avancé'        => 'badge-red',
                default         => 'badge-gray'
            };
            $emoji = match(true) {
                str_contains($f['titre'], 'Intelligence') => '🤖',
                str_contains($f['titre'], 'Data')         => '📊',
                str_contains($f['titre'], 'Web')          => '🌐',
                str_contains($f['titre'], 'Cyber')        => '🔐',
                default                                   => '📚'
            };
        ?>
            <div class="card">
                <span class="card-emoji"><?= $emoji ?></span>
                <span class="badge <?= $niveauClass ?>">
                    <?= htmlspecialchars($f['niveau']) ?>
                </span>
                <h3><?= htmlspecialchars($f['titre']) ?></h3>
                <p class="card-desc">
                    <?= htmlspecialchars(substr($f['description'], 0, 90)) ?>...
                </p>
                <div class="card-meta">
                    <span>⏱ <?= htmlspecialchars($f['duree']) ?></span>
                </div>
                <p class="prix"><?= number_format($f['prix'], 2, ',', ' ') ?> DT</p>
                <div class="card-actions">
                    <a class="btn-sm"
                       href="index.php?page=formation_detail&id=<?= $f['id'] ?>">
                        Voir le programme
                    </a>
                    <a class="btn-sm btn-outline"
                       href="index.php?page=inscription&formation_id=<?= $f['id'] ?>">
                        S'inscrire
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>