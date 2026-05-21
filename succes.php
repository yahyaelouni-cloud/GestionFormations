<?php
$pageTitle = 'Confirmation';
require __DIR__ . '/partials/header.php';
?>

<section class="form-section">
    <h1>✅ Inscription confirmée !</h1>
    <div class="card">
        <p>Bonjour
           <strong><?= htmlspecialchars($_SESSION['etudiant_prenom'] ?? '') ?></strong>,
        </p>
        <p>Votre inscription à
           <strong><?= htmlspecialchars($_SESSION['formation_titre'] ?? '') ?></strong>
           a bien été enregistrée et votre paiement validé.
        </p>
    </div>
    <a class="btn" href="index.php?page=cours">Accéder aux cours →</a>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>