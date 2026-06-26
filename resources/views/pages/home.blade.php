@extends('layouts.app')

@section('title', 'IMPAKT STUDIO - Agence Créative Digitale')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8">
                <div class="hero-content">
                    <p class="font-hand text-yellow fs-2 mb-2 reveal">Une agence pas comme les autres...</p>
                    <h1 class="hero-title text-white mb-4 reveal">
                        <span class="outline">Créons</span> un<br>
                        <strong class="text-yellow">Impakt</strong><br>
                        <span class="outline">Digital.</span>
                    </h1>
                    <p class="fs-5 text-white-50 mb-5 reveal">
                        Stratégies disruptives, branding audacieux et production de contenu qui convertit. 
                        Nous sommes l'arme secrète de votre croissance.
                    </p>
                    <div class="hero-buttons reveal">
                        <a href="{{ route('services') }}" class="btn-impakt hover-target text-decoration-none">Découvrir ce qu'on fait</a>
                        <span class="font-hand fs-3 text-white ms-4">
                            ou <a href="{{ route('contact') }}" class="text-yellow text-decoration-underline hover-target">parlez-nous !</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block reveal text-center">
                <div style="width: 300px; height: 300px; background: var(--c-yellow); border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; animation: pulse 6s infinite alternate; margin: auto; filter: blur(20px); opacity: 0.8;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section id="video-section" class="py-5 position-relative overflow-hidden">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="video-container position-relative reveal">
                    <div class="video-header text-center mb-5">
                        <p class="font-hand text-yellow fs-2 mb-3">Notre vision en action</p>
                        <h2 class="display-4 text-white">Créer des expériences qui marquent les esprits</h2>
                    </div>
                    
                    <div class="video-wrapper position-relative rounded-4 overflow-hidden" style="background: var(--c-dark-grey);">
                        <!-- Vidéo de présentation -->
                        <video id="showreel-video" class="w-100" poster="/images/video-poster.jpg" controls>
                            <source src="/videos/impakt-studio-showreel.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas les vidéos HTML5.
                        </video>
                        
                        <!-- Overlay avec bouton de lecture personnalisé -->
                        <div id="video-overlay" class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-black bg-opacity-50" style="cursor: pointer;">
                            <div class="play-button d-flex align-items-center justify-content-center rounded-circle bg-yellow" style="width: 80px; height: 80px;">
                                <i class="bi bi-play-fill fs-1 text-black"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-5">
                        <div class="col-md-4 text-center mb-4 mb-md-0 reveal" data-aos-delay="100">
                            <div class="stat-item">
                                <i class="bi bi-lightbulb text-yellow fs-1 mb-3"></i>
                                <h3 class="text-white">Créativité</h3>
                                <p class="text-white-50">Des idées originales qui sortent du lot pour vous démarquer de la concurrence.</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4 mb-md-0 reveal" data-aos-delay="200">
                            <div class="stat-item">
                                <i class="bi bi-gear text-yellow fs-1 mb-3"></i>
                                <h3 class="text-white">Technologie</h3>
                                <p class="text-white-50">Les dernières innovations techniques pour des expériences immersives et performantes.</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center reveal" data-aos-delay="300">
                            <div class="stat-item">
                                <i class="bi bi-graph-up text-yellow fs-1 mb-3"></i>
                                <h3 class="text-white">Résultats</h3>
                                <p class="text-white-50">Une approche data-driven pour garantir le succès de vos projets digitaux.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Élément décoratif animé -->
    <div class="position-absolute top-50 start-0 translate-middle-y d-none d-lg-block" style="width: 200px; height: 200px; background: var(--c-yellow); border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; animation: pulse 8s infinite alternate; margin-left: -100px; filter: blur(40px); opacity: 0.3;"></div>
    <div class="position-absolute bottom-0 end-0 d-none d-lg-block" style="width: 250px; height: 250px; background: var(--c-yellow); border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; animation: pulse 10s infinite alternate-reverse; margin-right: -125px; margin-bottom: -125px; filter: blur(40px); opacity: 0.3;"></div>
</section>

<!-- Stats Section Redesigned -->
<section id="stats" class="stats-section py-5 position-relative overflow-hidden">
    <div class="container py-5">
        <div class="text-center mb-5">
            <p class="font-hand text-yellow fs-2 mb-3 reveal">Nos réalisations</p>
            <h2 class="display-4 text-white reveal">Des chiffres qui parlent</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="stat-box text-center position-relative reveal">
                    <div class="stat-icon-wrapper mb-3">
                        <div class="stat-icon-bg">
                            <i class="bi bi-briefcase-fill stat-icon"></i>
                        </div>
                    </div>
                    <div class="stat-number-wrapper">
                        <span class="stat-number" data-target="50">0</span>
                        <span class="stat-plus">+</span>
                    </div>
                    <p class="stat-label">Projets livrés</p>
                    <div class="stat-glow"></div>
                </div>
            </div>
            
            <div class="col-6 col-md-3">
                <div class="stat-box text-center position-relative reveal" data-aos-delay="100">
                    <div class="stat-icon-wrapper mb-3">
                        <div class="stat-icon-bg">
                            <i class="bi bi-calendar-check-fill stat-icon"></i>
                        </div>
                    </div>
                    <div class="stat-number-wrapper">
                        <span class="stat-number" data-target="2">0</span>
                        <span class="stat-plus">+</span>
                    </div>
                    <p class="stat-label">Ans d'expérience</p>
                    <div class="stat-glow"></div>
                </div>
            </div>
            
            <div class="col-6 col-md-3">
                <div class="stat-box text-center position-relative reveal" data-aos-delay="200">
                    <div class="stat-icon-wrapper mb-3">
                        <div class="stat-icon-bg">
                            <i class="bi bi-emoji-smile-fill stat-icon"></i>
                        </div>
                    </div>
                    <div class="stat-number-wrapper">
                        <span class="stat-number" data-target="100">0</span>
                        <span class="stat-percent">%</span>
                    </div>
                    <p class="stat-label">Clients satisfaits</p>
                    <div class="stat-glow"></div>
                </div>
            </div>
            
            <div class="col-6 col-md-3">
                <div class="stat-box text-center position-relative reveal" data-aos-delay="300">
                    <div class="stat-icon-wrapper mb-3">
                        <div class="stat-icon-bg">
                            <i class="bi bi-trophy-fill stat-icon"></i>
                        </div>
                    </div>
                    <div class="stat-number-wrapper">
                        <span class="stat-number" data-target="500">0</span>
                        <span class="stat-plus">+</span>
                    </div>
                    <p class="stat-label">Heures de Création</p>
                    <div class="stat-glow"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background animated elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="stat-bg-shape stat-shape-1"></div>
        <div class="stat-bg-shape stat-shape-2"></div>
        <div class="stat-bg-shape stat-shape-3"></div>
    </div>
</section>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion de la vidéo
        const video = document.getElementById('showreel-video');
        const overlay = document.getElementById('video-overlay');
        
        if (overlay && video) {
            overlay.addEventListener('click', function() {
                video.play();
                overlay.style.display = 'none';
            });
            
            video.addEventListener('pause', function() {
                if (video.currentTime < video.duration - 1) {
                    overlay.style.display = 'flex';
                }
            });
            
            video.addEventListener('ended', function() {
                overlay.style.display = 'flex';
            });
        }
        
        // Animation des compteurs - Version améliorée
        const statNumbers = document.querySelectorAll('.stat-number');
        const animationDuration = 2000; // 2 secondes
        const frameRate = 60; // 60 fps
        const totalFrames = animationDuration / (1000 / frameRate);
        
        const animateCounter = (element) => {
            const target = parseInt(element.getAttribute('data-target'));
            const increment = target / totalFrames;
            let current = 0;
            let frame = 0;
            
            const updateCounter = () => {
                frame++;
                current += increment;
                
                if (frame < totalFrames) {
                    element.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            };
            
            updateCounter();
        };
        
        // Observer pour déclencher l'animation quand visible
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                    animateCounter(entry.target);
                    entry.target.classList.add('animated');
                    
                    // Ajouter un effet visuel quand l'animation se termine
                    setTimeout(() => {
                        entry.target.parentElement.classList.add('animation-complete');
                    }, animationDuration);
                }
            });
        }, observerOptions);
        
        // Observer chaque compteur
        statNumbers.forEach(counter => {
            observer.observe(counter);
        });
        
        // Effet de survol sur les boîtes de stats
        const statBoxes = document.querySelectorAll('.stat-box');
        statBoxes.forEach(box => {
            box.addEventListener('mouseenter', function() {
                this.querySelector('.stat-glow').style.opacity = '1';
            });
            
            box.addEventListener('mouseleave', function() {
                this.querySelector('.stat-glow').style.opacity = '0';
            });
        });
    });
</script>



<style>
/* Styles pour la section stats améliorée */
.stats-section {
    background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
    position: relative;
}

.stat-box {
    padding: 2rem 1rem;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 207, 28, 0.1);
    border-radius: 20px;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
}

.stat-box:hover {
    transform: translateY(-10px);
    background: rgba(255, 207, 28, 0.05);
    border-color: rgba(255, 207, 28, 0.3);
    box-shadow: 0 10px 30px rgba(255, 207, 28, 0.1);
}

.stat-icon-wrapper {
    position: relative;
    display: inline-block;
}

.stat-icon-bg {
    width: 60px;
    height: 60px;
    background: rgba(255, 207, 28, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    transition: all 0.3s ease;
}

.stat-box:hover .stat-icon-bg {
    background: var(--c-yellow);
    transform: rotate(360deg);
}

.stat-icon {
    font-size: 1.5rem;
    color: var(--c-yellow);
    transition: all 0.3s ease;
}

.stat-box:hover .stat-icon {
    color: var(--c-black);
}

.stat-number-wrapper {
    position: relative;
    margin: 1rem 0;
}

.stat-number {
    font-family: var(--f-heading);
    font-size: 3rem;
    font-weight: 900;
    color: white;
    display: inline-block;
    position: relative;
}

.stat-plus, .stat-percent {
    font-family: var(--f-heading);
    font-size: 1.5rem;
    color: var(--c-yellow);
    margin-left: 5px;
    font-weight: 700;
}

.stat-label {
    font-family: var(--f-body);
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.7);
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.stat-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 207, 28, 0.1) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

.animation-complete .stat-number {
    animation: numberPulse 0.5s ease;
}

@keyframes numberPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

/* Formes animées en arrière-plan */
.stat-bg-shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(40px);
    opacity: 0.1;
}

.stat-shape-1 {
    width: 300px;
    height: 300px;
    background: var(--c-yellow);
    top: 10%;
    left: 5%;
    animation: float 20s infinite ease-in-out;
}

.stat-shape-2 {
    width: 200px;
    height: 200px;
    background: var(--c-yellow);
    top: 60%;
    right: 10%;
    animation: float 15s infinite ease-in-out reverse;
}

.stat-shape-3 {
    width: 150px;
    height: 150px;
    background: var(--c-yellow);
    bottom: 10%;
    left: 30%;
    animation: float 25s infinite ease-in-out;
}

@keyframes float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(30px, -30px) rotate(120deg); }
    66% { transform: translate(-20px, 20px) rotate(240deg); }
}

/* Responsive */
@media (max-width: 768px) {
    .stat-number {
        font-size: 2.5rem;
    }
    
    .stat-box {
        padding: 1.5rem 0.5rem;
    }
}
</style>
