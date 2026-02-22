@extends('layouts.app')

@section('title', 'Nos Réalisations - IMPAKT STUDIO')

@section('content')
<!-- Section Portfolio -->
<section class="portfolio-section py-5 position-relative overflow-hidden">
    <!-- Éléments décoratifs de fond -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="portfolio-bg-shape shape-1"></div>
        <div class="portfolio-bg-shape shape-2"></div>
    </div>

    <div class="container position-relative">
        <div class="text-center mb-5">
            <p class="font-hand text-yellow fs-2 reveal">Ce que nous avons créé</p>
            <h2 class="display-4 text-white mb-4 reveal">Nos <span class="text-yellow">Réalisations</span></h2>
            <p class="text-white-50 fs-5 reveal">Un aperçu de notre créativité en action</p>
        </div>

        <!-- Filtres améliorés -->
        <div class="text-center mb-5 reveal">
            <div class="filter-wrapper">
                <button class="filter-btn active" data-filter="all">
                    <span>Tout</span>
                </button>
                <button class="filter-btn" data-filter="branding">
                    <span>Branding</span>
                </button>
                <button class="filter-btn" data-filter="video">
                    <span>Vidéo</span>
                </button>
                <button class="filter-btn" data-filter="web">
                    <span>Web</span>
                </button>
                <button class="filter-btn" data-filter="social">
                    <span>Social</span>
                </button>
            </div>
        </div>

        <!-- Grille de portfolio -->
        <div class="portfolio-grid" id="portfolio-grid">
            <!-- Item 1 -->
            <div class="portfolio-item reveal" data-category="branding">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://picsum.photos/seed/branding1/600/400.jpg" alt="Projet Branding">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>Marque Tropical</h3>
                                <p>Identité visuelle complète</p>
                                <div class="portfolio-links">
                                    <a href="#" class="portfolio-link" data-project="1">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="portfolio-item reveal" data-category="video">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://picsum.photos/seed/video1/600/400.jpg" alt="Projet Vidéo">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>Campagne TV</h3>
                                <p>Publicité 30s</p>
                                <div class="portfolio-links">
                                    <a href="#" class="portfolio-link" data-project="2">
                                        <i class="bi bi-play-fill"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="portfolio-item reveal" data-category="web">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://picsum.photos/seed/web1/600/400.jpg" alt="Projet Web">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>E-Commerce Modern</h3>
                                <p>Site marchand complet</p>
                                <div class="portfolio-links">
                                    <a href="#" class="portfolio-link" data-project="3">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="portfolio-item reveal" data-category="social">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://picsum.photos/seed/social1/600/400.jpg" alt="Projet Social">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>Campagne Instagram</h3>
                                <p>Stratégie contenu</p>
                                <div class="portfolio-links">
                                    <a href="#" class="portfolio-link" data-project="4">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="portfolio-item reveal" data-category="branding">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://picsum.photos/seed/branding2/600/400.jpg" alt="Projet Branding">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>Startup Tech</h3>
                                <p>Branding complet</p>
                                <div class="portfolio-links">
                                    <a href="#" class="portfolio-link" data-project="5">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="portfolio-item reveal" data-category="video">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://picsum.photos/seed/video2/600/400.jpg" alt="Projet Vidéo">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>Clip Musical</h3>
                                <p>Production 4K</p>
                                <div class="portfolio-links">
                                    <a href="#" class="portfolio-link" data-project="6">
                                        <i class="bi bi-play-fill"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Notre Processus -->
<section class="process-section py-5 position-relative">
    <div class="container">
        <div class="text-center mb-5">
            <p class="font-hand text-yellow fs-2 reveal">Notre méthode</p>
            <h2 class="display-4 text-white mb-4 reveal">Notre <span class="text-yellow">Processus</span></h2>
            <p class="text-white-50 fs-5 reveal">Une approche structurée pour des résultats exceptionnels</p>
        </div>

        <div class="process-timeline">
            <!-- Étape 1 -->
            <div class="process-step reveal">
                <div class="process-number">01</div>
                <div class="process-content">
                    <h4 class="text-white">Découverte</h4>
                    <p class="text-white-50">Nous écoutons vos besoins, analysons votre marché et définissons ensemble les objectifs de votre projet.</p>
                </div>
                <div class="process-icon">
                    <i class="bi bi-search"></i>
                </div>
            </div>

            <!-- Étape 2 -->
            <div class="process-step reveal" data-aos-delay="100">
                <div class="process-number">02</div>
                <div class="process-content">
                    <h4 class="text-white">Stratégie</h4>
                    <p class="text-white-50">Nous élaborons une stratégie créative sur mesure, alignée avec vos objectifs commerciaux et votre marque.</p>
                </div>
                <div class="process-icon">
                    <i class="bi bi-lightbulb"></i>
                </div>
            </div>

            <!-- Étape 3 -->
            <div class="process-step reveal" data-aos-delay="200">
                <div class="process-number">03</div>
                <div class="process-content">
                    <h4 class="text-white">Création</h4>
                    <p class="text-white-50">Notre équipe créative donne vie à votre projet avec passion et expertise, en suivant les meilleures pratiques.</p>
                </div>
                <div class="process-icon">
                    <i class="bi bi-palette"></i>
                </div>
            </div>

            <!-- Étape 4 -->
            <div class="process-step reveal" data-aos-delay="300">
                <div class="process-number">04</div>
                <div class="process-content">
                    <h4 class="text-white">Lancement</h4>
                    <p class="text-white-50">Nous déployons votre projet et assurons une transition fluide vers sa nouvelle vie numérique.</p>
                </div>
                <div class="process-icon">
                    <i class="bi bi-rocket"></i>
                </div>
            </div>
        </div>

       <div class="text-center mb-5 mt-5">
            <p class="font-hand text-yellow fs-2 reveal">
                Ils nous ont fait confiance
            </p>
        </div>

        <!-- Logos clients -->
        <div class="clients-logos reveal">
            <div class="client-logo">
                <img src="/images/clients/logo1.png" alt="Client 1">
            </div>
            <div class="client-logo">
                <img src="/images/clients/logo2.png" alt="Client 2">
            </div>
            <div class="client-logo">
                <img src="/images/clients/logo3.png" alt="Client 3">
            </div>
            <div class="client-logo">
                <img src="/images/clients/logo4.png" alt="Client 4">
            </div>
            <div class="client-logo">
                <img src="/images/clients/logo5.png" alt="Client 5">
            </div>
        </div>

        <div class="text-center mt-5 pt-5 reveal">
            <a href="{{ route('contact') }}" class="btn-impakt hover-target" style="text-decoration: none;">Commencer votre projet</a>
        </div>
    </div>
</section>

<!-- Modal Portfolio -->
<div class="portfolio-modal" id="portfolioModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title text-white"></h3>
            <button class="modal-close" onclick="closeModal()">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="modal-image"></div>
            <div class="modal-info">
                <p class="modal-description text-white-50"></p>
                <div class="modal-details">
                    <div class="detail-item">
                        <span class="detail-label">Client:</span>
                        <span class="detail-value"></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Catégorie:</span>
                        <span class="detail-value"></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Date:</span>
                        <span class="detail-value"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filtrage du portfolio amélioré
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Mettre à jour le bouton actif
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            // Filtrer avec animation
            portfolioItems.forEach((item, index) => {
                setTimeout(() => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1) translateY(0)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8) translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                }, index * 50);
            });
        });
    });

    // Gestion de la modal
    const modalLinks = document.querySelectorAll('[data-project]');
    const modal = document.getElementById('portfolioModal');

    // Données des projets (exemple)
    const projectsData = {
        1: {
            title: 'Marque Tropical',
            image: 'https://picsum.photos/seed/branding1/800/600.jpg',
            description: 'Création complète d\'une identité visuelle pour une marque de boissons tropicales. Logo, charte graphique, packaging et stratégie de communication.',
            client: 'Tropical Drinks Co.',
            category: 'Branding',
            date: '2024'
        },
        2: {
            title: 'Campagne TV',
            image: 'https://picsum.photos/seed/video1/800/600.jpg',
            description: 'Production d\'une publicité TV de 30 secondes pour une marque automobile. Tournage en 4K, post-production complète et diffusion nationale.',
            client: 'AutoMax',
            category: 'Vidéo',
            date: '2024'
        },
        3: {
            title: 'E-Commerce Modern',
            image: 'https://picsum.photos/seed/web1/800/600.jpg',
            description: 'Développement d\'une plateforme e-commerce complète avec paiement intégré, gestion des stocks et interface administrateur moderne.',
            client: 'Fashion Store',
            category: 'Web',
            date: '2023'
        }
    };

    modalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const projectId = this.getAttribute('data-project');
            const project = projectsData[projectId];
            
            if (project) {
                document.querySelector('.modal-title').textContent = project.title;
                document.querySelector('.modal-image').innerHTML = `<img src="${project.image}" alt="${project.title}">`;
                document.querySelector('.modal-description').textContent = project.description;
                document.querySelectorAll('.detail-value')[0].textContent = project.client;
                document.querySelectorAll('.detail-value')[1].textContent = project.category;
                document.querySelectorAll('.detail-value')[2].textContent = project.date;
                
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });
});

function closeModal() {
    document.getElementById('portfolioModal').classList.remove('active');
    document.body.style.overflow = 'auto';
}

// Fermer la modal en cliquant à l'extérieur
document.getElementById('portfolioModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>

<style>
/* Section Portfolio */
.portfolio-section {
    background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%);
}

.portfolio-bg-shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    opacity: 0.1;
}

.shape-1 {
    width: 400px;
    height: 400px;
    background: var(--c-yellow);
    top: -200px;
    left: -100px;
    animation: float 20s infinite ease-in-out;
}

.shape-2 {
    width: 300px;
    height: 300px;
    background: var(--c-yellow);
    bottom: -150px;
    right: -50px;
    animation: float 15s infinite ease-in-out reverse;
}

/* Filtres */
.filter-wrapper {
    display: inline-flex;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50px;
    padding: 5px;
    backdrop-filter: blur(10px);
}

.filter-btn {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.7);
    padding: 10px 25px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
}

.filter-btn:hover {
    color: white;
}

.filter-btn.active {
    background: var(--c-yellow);
    color: var(--c-black);
}

/* Grille Portfolio */
.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.portfolio-item {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.5s ease;
}

.portfolio-item.reveal {
    opacity: 1;
    transform: translateY(0);
}

.portfolio-card {
    background: rgba(255, 255, 255, 0.02);
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.4s ease;
    border: 1px solid rgba(255, 255, 255, 0.05);
}

.portfolio-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.portfolio-card:hover .portfolio-image img {
    transform: scale(1.1);
}

.portfolio-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.7) 100%);
    display: flex;
    align-items: flex-end;
    padding: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.portfolio-card:hover .portfolio-overlay {
    opacity: 1;
}

.portfolio-content h3 {
    color: white;
    font-size: 1.3rem;
    margin-bottom: 5px;
}

.portfolio-content p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.portfolio-links {
    display: flex;
    gap: 10px;
}

.portfolio-link {
    width: 40px;
    height: 40px;
    background: var(--c-yellow);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--c-black);
    text-decoration: none;
    transition: all 0.3s ease;
}

.portfolio-link:hover {
    transform: translateY(-3px);
    background: white;
}

.portfolio-link i {
    font-size: 1.1rem;
}

/* Modal Portfolio */
.portfolio-modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.portfolio-modal.active {
    opacity: 1;
    visibility: visible;
}

.modal-content {
    background: var(--c-dark-grey);
    border-radius: 20px;
    max-width: 900px;
    width: 90%;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
    animation: modalSlideIn 0.3s ease;
}

@keyframes modalSlideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.modal-header {
    padding: 30px 30px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.modal-close {
    background: transparent;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    transition: color 0.3s ease;
}

.modal-close:hover {
    color: var(--c-yellow);
}

.modal-body {
    padding: 30px;
}

.modal-image img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 20px;
}

.modal-details {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.detail-item {
    display: flex;
    margin-bottom: 10px;
}

.detail-label {
    color: var(--c-yellow);
    font-weight: 600;
    width: 100px;
}

.detail-value {
    color: white;
}

/* Section Processus */
.process-section {
    background: linear-gradient(180deg, #1a1a1a 0%, #0a0a0a 100%);
}

.process-timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.process-timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, var(--c-yellow), transparent);
    transform: translateX(-50%);
}

.process-step {
    position: relative;
    padding: 40px 0;
    display: flex;
    align-items: center;
}

.process-step:nth-child(odd) {
    flex-direction: row-reverse;
}

.process-number {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 60px;
    background: var(--c-yellow);
    color: var(--c-black);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--f-heading);
    font-weight: 900;
    font-size: 1.5rem;
    z-index: 2;
    box-shadow: 0 0 20px rgba(255, 207, 28, 0.3);
}

.process-content {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 207, 28, 0.1);
    border-radius: 15px;
    padding: 30px;
    width: calc(50% - 40px);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.process-step:hover .process-content {
    background: rgba(255, 207, 28, 0.05);
    border-color: rgba(255, 207, 28, 0.3);
    transform: scale(1.02);
}

.process-content h4 {
    color: var(--c-yellow);
    margin-bottom: 15px;
    font-size: 1.5rem;
}

.process-icon {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 50%;
    margin-top: 30px;
    width: 40px;
    height: 40px;
    background: var(--c-dark-grey);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--c-yellow);
    font-size: 1.2rem;
    z-index: 3;
}

/* Responsive */
@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
    }
    
    .process-timeline::before {
        left: 30px;
    }
    
    .process-step {
        flex-direction: row !important;
        padding-left: 80px;
    }
    
    .process-number {
        left: 30px;
    }
    
    .process-content {
        width: calc(100% - 50px);
    }
    
    .process-icon {
        left: 30px;
    }
}

/* Section logos clients */
.clients-logos {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 60px;
    margin-bottom: 100px; /* espace avant le bouton */
}

.client-logo {
    opacity: 0.6;
    transition: all 0.4s ease;
}

.client-logo img {
    max-height: 60px;
    width: auto;
    filter: grayscale(100%);
    transition: all 0.4s ease;
}

.client-logo:hover {
    opacity: 1;
}

.client-logo:hover img {
    filter: grayscale(0%);
    transform: scale(1.1);
}
</style>
