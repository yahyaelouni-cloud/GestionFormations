<?php
$pageTitle = 'Paiement';
require __DIR__ . '/partials/header.php';
?>

<section class="form-section">
    <h1>Paiement</h1>

    <?php if ($inscription): ?>
        <div class="card">
            <p><strong>Formation :</strong>
               <?= htmlspecialchars($inscription['formation_titre']) ?></p>
            <p><strong>Étudiant :</strong>
               <?= htmlspecialchars($inscription['prenom'] . ' ' . $inscription['nom']) ?></p>
            <p><strong>Montant :</strong>
               <?= number_format($inscription['prix'], 2, ',', ' ') ?> DT</p>
        </div>
    <?php endif; ?>

    <?php if ($erreur_paiement): ?>
        <div class="alert alert-error">Paiement refusé. Veuillez réessayer.</div>
    <?php endif; ?>

    <form method="POST" action="index.php?page=paiement&id=<?= $id ?>">
        <button type="submit" name="mode" value="ok" class="btn btn-success">
            ✅ Simuler un paiement réussi
        </button>
        <button type="submit" name="mode" value="echec" class="btn btn-danger">
            ❌ Simuler un paiement refusé
        </button>
    </form>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>