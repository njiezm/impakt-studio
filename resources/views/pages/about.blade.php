@extends('layouts.app')

@section('title', 'L\'Agence - IMPAKT STUDIO')

@section('content')
<!-- Section Histoire et Mission -->
<section class="about-hero pt-5 pb-5 position-relative overflow-hidden">
    <!-- Éléments décoratifs de fond -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="about-bg-shape shape-1"></div>
        <div class="about-bg-shape shape-2"></div>
    </div>

    <div class="container position-relative">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <p class="font-hand text-yellow fs-2 reveal">Notre histoire</p>
                    <h2 class="display-3 text-white mb-4 reveal">L'<span class="text-yellow">Agence</span></h2>
                    <div class="text-white-50 mb-4 reveal">
                        <p class="fs-5">
                            Fondée le 25 décembre 2024, IMPAKT STUDIO est née d'une passion simple : créer des expériences 
                            digitales qui marquent les esprits et génèrent des résultats.
                        </p>
                        <p>
                            Basée en Martinique, notre équipe créative combine expertise locale et vision globale 
                            pour aider les marques à se démarquer dans un monde numérique saturé.
                        </p>
                    </div>
                    <div class="d-flex gap-3 flex-wrap reveal">
                        <a href="{{ route('portfolio') }}" class="btn-impakt hover-target" style="text-decoration: none;">Nos Projets</a>
                        <a href="{{ route('contact') }}" class="btn-impakt hover-target" style="text-decoration: none;">Nous Contacter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-visual position-relative reveal">
                    <div class="about-image-composition">
                        <img src="https://picsum.photos/seed/team1/500/600.jpg" alt="Notre équipe" class="img-main">
                        <img src="https://picsum.photos/seed/office1/300/300.jpg" alt="Notre bureau" class="img-sub img-sub-1">
                        <img src="https://picsum.photos/seed/meeting1/250/250.jpg" alt="Réunion créative" class="img-sub img-sub-2">
                        <div class="experience-badge">
                            <span class="number">1+</span>
                            <span class="text">Ans d'expérience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Nos Valeurs -->
<section class="values-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <p class="font-hand text-yellow fs-2 reveal">Ce qui nous guide</p>
            <h2 class="display-4 text-white mb-4 reveal">Nos <span class="text-yellow">Valeurs</span></h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="value-card text-center reveal">
                    <div class="value-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h4 class="text-white mt-3">Créativité</h4>
                    <p class="text-white-50">Pousser les limites pour créer des designs uniques et mémorables.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card text-center reveal" data-aos-delay="100">
                    <div class="value-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <h4 class="text-white mt-3">Excellence</h4>
                    <p class="text-white-50">Un souci du détail dans chaque projet pour garantir une qualité irréprochable.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card text-center reveal" data-aos-delay="200">
                    <div class="value-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h4 class="text-white mt-3">Collaboration</h4>
                    <p class="text-white-50">Travailler main dans la main avec nos clients pour atteindre leurs objectifs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card text-center reveal" data-aos-delay="300">
                    <div class="value-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h4 class="text-white mt-3">Impact</h4>
                    <p class="text-white-50">Créer des solutions qui génèrent des résultats mesurables et durables.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Équipe -->
<section class="team-section py-5 position-relative">
    <div class="container">
        <div class="text-center mb-5">
            <p class="font-hand text-yellow fs-2 reveal">Les talents derrière l'impact</p>
            <h2 class="display-4 text-white mb-4 reveal">Notre <span class="text-yellow">Équipe</span></h2>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="team-member reveal">
                    <div class="member-img-wrapper">
                        <img src="https://picsum.photos/seed/jean/400x400.jpg" alt="Jean Dupont" class="member-img">
                        <div class="member-overlay">
                            <div class="member-social">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info text-center mt-3">
                        <h5 class="text-white">Jean Dupont</h5>
                        <p class="text-yellow">Directeur Créatif</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member reveal" data-aos-delay="100">
                    <div class="member-img-wrapper">
                        <img src="https://picsum.photos/seed/marie/400x400.jpg" alt="Marie Martin" class="member-img">
                        <div class="member-overlay">
                            <div class="member-social">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info text-center mt-3">
                        <h5 class="text-white">Marie Martin</h5>
                        <p class="text-yellow">Directrice Stratégie</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member reveal" data-aos-delay="200">
                    <div class="member-img-wrapper">
                        <img src="https://picsum.photos/seed/paul/400x400.jpg" alt="Paul Bernard" class="member-img">
                        <div class="member-overlay">
                            <div class="member-social">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info text-center mt-3">
                        <h5 class="text-white">Paul Bernard</h5>
                        <p class="text-yellow">Réalisateur</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member reveal" data-aos-delay="300">
                    <div class="member-img-wrapper">
                        <img src="https://picsum.photos/seed/sophie/400x400.jpg" alt="Sophie Laurent" class="member-img">
                        <div class="member-overlay">
                            <div class="member-social">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info text-center mt-3">
                        <h5 class="text-white">Sophie Laurent</h5>
                        <p class="text-yellow">Web Designer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 pt-5 reveal">
            <p class="text-white-50 mb-3">Vous avez le talent pour nous rejoindre ?</p>
            <a href="#" class="btn-outline-impakt hover-target">Voir les offres</a>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="cta-section py-5 text-center">
    <div class="container">
        <div class="cta-wrapper reveal">
            <h2 class="display-4 text-white mb-4">Prêt à créer un <span class="text-yellow">impact</span> ?</h2>
            <p class="text-white-50 fs-5 mb-4">Discutons de votre prochain projet et transformons vos idées en réalité.</p>
            <a href="{{ route('contact') }}" class="btn-impakt hover-target">Démarrer un projet</a>
        </div>
    </div>
</section>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Système de révélation au scroll avec Intersection Observer
    const revealElements = document.querySelectorAll('.reveal');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                // Optionnel : arrêter d'observer l'élément après qu'il ait été révélé
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1 // 10% de l'élément doit être visible pour déclencher
    });

    revealElements.forEach(el => {
        observer.observe(el);
    });
});
</script>

<style>
/* Section Histoire */
.about-hero {
    background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
}

.about-bg-shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(70px);
    opacity: 0.08;
    animation: float 25s infinite ease-in-out;
}

.shape-1 {
    width: 500px;
    height: 500px;
    background: var(--c-yellow);
    top: -250px;
    right: -150px;
}

.shape-2 {
    width: 400px;
    height: 400px;
    background: var(--c-yellow);
    bottom: -200px;
    left: -100px;
    animation-delay: -10s;
}

/* Composition d'images */
.about-visual {
    perspective: 1000px;
}

.about-image-composition {
    position: relative;
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
}

.about-image-composition .img-main {
    width: 80%;
    height: auto;
    border-radius: 20px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.about-image-composition .img-sub {
    position: absolute;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    border: 4px solid var(--c-dark);
}

.img-sub-1 {
    width: 40%;
    top: -10%;
    left: 0;
    transform: rotate(-15deg);
}

.img-sub-2 {
    width: 35%;
    bottom: 0;
    right: 0;
    transform: rotate(10deg);
}

.experience-badge {
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--c-yellow);
    color: var(--c-black);
    padding: 15px 25px;
    border-radius: 50px;
    font-weight: 700;
    font-family: var(--f-heading);
    box-shadow: 0 10px 30px rgba(255, 207, 28, 0.4);
    text-align: center;
}

.experience-badge .number {
    display: block;
    font-size: 2rem;
    line-height: 1;
}

.experience-badge .text {
    font-size: 0.9rem;
}

/* Section Valeurs */
.values-section {
    background: var(--c-dark-grey);
}

.value-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    padding: 40px 20px;
    transition: all 0.4s ease;
    height: 100%;
}

.value-card:hover {
    transform: translateY(-10px);
    background: rgba(255, 207, 28, 0.05);
    border-color: rgba(255, 207, 28, 0.2);
}

.value-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--c-yellow), #ffb300);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2rem;
    color: var(--c-black);
    transition: transform 0.3s ease;
}

.value-card:hover .value-icon {
    transform: scale(1.1) rotate(5deg);
}

/* Section Équipe */
.team-section {
    background: linear-gradient(180deg, var(--c-dark-grey) 0%, #0a0a0a 100%);
}

.team-member {
    transition: transform 0.3s ease;
}

.team-member:hover {
    transform: translateY(-10px);
}

.member-img-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    background: var(--c-dark);
}

.member-img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}

.member-img-wrapper:hover .member-img {
    transform: scale(1.1);
}

.member-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 60%);
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding-bottom: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.member-img-wrapper:hover .member-overlay {
    opacity: 1;
}

.member-social {
    display: flex;
    gap: 15px;
}

.member-social a {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    transform: translateY(20px);
}

.member-img-wrapper:hover .member-social a {
    transform: translateY(0);
}

.member-img-wrapper:hover .member-social a:nth-child(1) { transition-delay: 0.05s; }
.member-img-wrapper:hover .member-social a:nth-child(2) { transition-delay: 0.1s; }
.member-img-wrapper:hover .member-social a:nth-child(3) { transition-delay: 0.15s; }

.member-social a:hover {
    background: var(--c-yellow);
    color: var(--c-black);
}

/* Section CTA */
.cta-section {
    background: linear-gradient(135deg, #1a1a1a 0%, #0a0a0a 100%);
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('https://www.transparenttextures.com/patterns/cubes.png');
    opacity: 0.03;
}

.cta-wrapper {
    position: relative;
    z-index: 1;
}

/* Animation de révélation */
.reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

.reveal.revealed {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive */
@media (max-width: 768px) {
    .about-image-composition .img-sub {
        display: none;
    }
    .experience-badge {
        position: static;
        transform: none;
        margin-top: 20px;
        width: fit-content;
    }
}
</style>
