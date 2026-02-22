@extends('layouts.app')

@section('title', 'Nos Prestations - IMPAKT STUDIO')

@section('content')
<section class="services-section py-5 position-relative overflow-hidden">
    <!-- Éléments décoratifs de fond -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="service-bg-shape shape-1"></div>
        <div class="service-bg-shape shape-2"></div>
    </div>

    <div class="container position-relative">
        <div class="text-center mb-5">
            <p class="font-hand text-yellow fs-2 reveal">Ce que nous faisons</p>
            <h2 class="display-4 text-white mb-4 reveal">Nos <span class="text-yellow">Expertises</span></h2>
            <p class="text-white-50 fs-5 reveal">Des solutions créatives sur mesure pour propulser votre marque</p>
        </div>

        <div class="row g-4 g-lg-5">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal">
                    <div class="service-icon-bg">
                        <span class="service-number">01</span>
                        <i class="bi bi-palette-fill"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="text-white">Branding & Identité</h4>
                        <p class="text-white-50">Création d'une identité visuelle forte et mémorable qui vous distingue de la concurrence.</p>
                        <a href="#" class="service-link hover-target">
                            <span>Explorer</span>
                            <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal" data-aos-delay="100">
                    <div class="service-icon-bg">
                        <span class="service-number">02</span>
                        <i class="bi bi-camera-reels-fill"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="text-white">Production Vidéo</h4>
                        <p class="text-white-50">Vidéos publicitaires, captation video, reel instagram, stories, tiktok, youtube short, montage video/sous-titrage, contenu social... Des productions qui captivent et convertissent.</p>
                        <a href="#" class="service-link hover-target">
                            <span>Explorer</span>
                            <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal" data-aos-delay="200">
                    <div class="service-icon-bg">
                        <span class="service-number">03</span>
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="text-white">Stratégie Digitale</h4>
                        <p class="text-white-50">Planification stratégique pour maximiser votre impact en ligne et atteindre vos objectifs.</p>
                                    

                        <a href="#" class="service-link hover-target">
                            <span>Explorer</span>
                            <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal" data-aos-delay="300">
                    <div class="service-icon-bg">
                        <span class="service-number">04</span>
                        <i class="bi bi-globe2"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="text-white">Web Design</h4>
                        <p class="text-white-50">Sites web modernes, responsifs et optimisés pour une expérience utilisateur exceptionnelle.</p>
                        <p class="font-hand text-yellow fs-3 mb-3">
                            by  
                            <a href="https://njiezm.fr" target="_blank" style="text-decoration: none; font-family: 'Special Elite', cursive;">
                                <span style="color: #007bff;">NJIEZM</span><span style="color: #ffc107;">.FR</span>
                            </a>
                            </p>   
                            <br>                
                        <a href="https://njiezm.fr" target="_blank" class="service-link hover-target">
                            <span>Explorer</span>
                            <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal" data-aos-delay="400">
                    <div class="service-icon-bg">
                        <span class="service-number">05</span>
                        <i class="bi bi-megaphone-fill"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="text-white">Communication</h4>
                        <p class="text-white-50">Campagnes publicitaires créatives et stratégies de communication percutantes.</p>
                        <a href="#" class="service-link hover-target">
                            <span>Explorer</span>
                            <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card reveal" data-aos-delay="500">
                    <div class="service-icon-bg">
                        <span class="service-number">06</span>
                        <i class="bi bi-instagram"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="text-white">Social Media</h4>
                        <p class="text-white-50">Gestion des réseaux sociaux et création de contenu engageant pour votre communauté.</p>
                        <a href="#" class="service-link hover-target">
                            <span>Explorer</span>
                            <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
<div class="text-center mt-5 pt-5 reveal">
    <p class="font-hand text-yellow fs-3 mb-5 px-3">
        Prêt à passer à la vitesse supérieure ?
    </p>

    <a href="{{ route('contact') }}" 
       class="btn-impakt hover-target"
       style="text-decoration: none;">
       Démarrons votre projet
    </a>
</div>
    </div>
</section>
@endsection


<style>
/* Styles pour la section Services */
.services-section {
    background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%);
}

.service-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    padding: 2.5rem 2rem;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    backdrop-filter: blur(5px);
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--c-yellow), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
}

.service-card:hover::before {
    transform: translateX(100%);
}

.service-card:hover {
    transform: translateY(-15px);
    background: rgba(255, 207, 28, 0.05);
    border-color: rgba(255, 207, 28, 0.2);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.service-icon-bg {
    width: 80px;
    height: 80px;
    background: rgba(255, 207, 28, 0.1);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-bottom: 1.5rem;
    transition: all 0.4s ease;
}

.service-card:hover .service-icon-bg {
    background: var(--c-yellow);
    transform: rotate(5deg) scale(1.1);
}

.service-icon-bg i {
    font-size: 2rem;
    color: var(--c-yellow);
    transition: all 0.4s ease;
    z-index: 2;
}

.service-card:hover .service-icon-bg i {
    color: var(--c-black);
    transform: rotate(-5deg);
}

.service-number {
    position: absolute;
    top: -5px;
    right: -5px;
    background: var(--c-dark-grey);
    color: rgba(255, 207, 28, 0.5);
    font-family: var(--f-heading);
    font-weight: 900;
    font-size: 0.8rem;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 207, 28, 0.2);
}

.service-content h4 {
    font-family: var(--f-heading);
    font-weight: 700;
    font-size: 1.4rem;
    margin-bottom: 1rem;
    transition: color 0.3s ease;
}

.service-card:hover .service-content h4 {
    color: var(--c-yellow);
}

.service-content p {
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
}

.service-link {
    display: inline-flex;
    align-items: center;
    color: var(--c-yellow);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    opacity: 0;
    transform: translateX(-10px);
    transition: all 0.3s ease;
}

.service-card:hover .service-link {
    opacity: 1;
    transform: translateX(0);
}

.service-link i {
    font-size: 1.2rem;
    margin-left: 5px;
    transition: transform 0.3s ease;
}

.service-link:hover i {
    transform: translateX(5px);
}

/* Formes de fond animées */
.service-bg-shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    opacity: 0.15;
    z-index: 0;
}

.shape-1 {
    width: 400px;
    height: 400px;
    background: var(--c-yellow);
    top: -200px;
    right: -100px;
    animation: float 20s infinite ease-in-out;
}

.shape-2 {
    width: 300px;
    height: 300px;
    background: var(--c-yellow);
    bottom: -150px;
    left: -50px;
    animation: float 15s infinite ease-in-out reverse;
}

@keyframes float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(30px, -30px) rotate(120deg); }
    66% { transform: translate(-20px, 20px) rotate(240deg); }
}

/* Responsive */
@media (max-width: 768px) {
    .service-card {
        padding: 2rem 1.5rem;
    }
    
    .service-icon-bg {
        width: 70px;
        height: 70px;
    }
    
    .service-icon-bg i {
        font-size: 1.8rem;
    }
}
</style>
