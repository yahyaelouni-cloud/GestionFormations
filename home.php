<?php
$pageTitle = 'Accueil';
require __DIR__ . '/partials/header.php';
?>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <span class="hero-badge">🎓 Plateforme de Formation</span>
        <h1>Développez vos <span class="highlight">compétences</span> numériques</h1>
        <p>Des formations professionnelles conçues par des experts pour vous préparer aux métiers de demain.</p>
        <div class="hero-btns">
            <a class="btn btn-hero-primary" href="index.php?page=formations">Voir toutes les formations</a>
            <a class="btn btn-hero-orange" href="index.php?page=inscription">S'inscrire maintenant</a>
        </div>
    </div>
    <div class="hero-stats">
        <div class="stat"><span class="stat-num">4+</span><span class="stat-label">Formations</span></div>
        <div class="stat"><span class="stat-num">100%</span><span class="stat-label">En ligne</span></div>
        <div class="stat"><span class="stat-num">3</span><span class="stat-label">Niveaux</span></div>
    </div>
</section>

<!-- POURQUOI NOUS CHOISIR -->
<section class="features-section">
    <div class="features-banner">
        <img src="/gestion.formation/capture.png"
             alt="Notre équipe de formateurs"
             class="features-img">
    </div>
    <div class="features-bottom">
        <h2>Pourquoi nous choisir ?</h2>
        <p class="features-subtitle">Des atouts concrets pour vous accompagner vers la réussite.</p>
        <div class="features">
            <div class="feature">
                <div class="feature-icon">🏆</div>
                <h3>Formateurs experts</h3>
                <p>Des professionnels du secteur avec une expérience terrain solide.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">📱</div>
                <h3>100% flexible</h3>
                <p>Apprenez à votre rythme, depuis n'importe quel appareil.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🎯</div>
                <h3>Certifié & reconnu</h3>
                <p>Des attestations valorisées sur le marché du travail tunisien.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">💬</div>
                <h3>Suivi personnalisé</h3>
                <p>Un accompagnement individuel tout au long de votre formation.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <h2>Prêt à commencer votre formation ?</h2>
    <p>Inscrivez-vous dès aujourd'hui et accédez à vos cours immédiatement.</p>
    <a class="btn btn-white" href="index.php?page=formations">Découvrir les formations →</a>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>