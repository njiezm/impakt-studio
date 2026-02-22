<nav class="navbar navbar-expand-lg fixed-top w-100" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand-custom hover-target" href="{{ route('home') }}" style="color: transparent;">            <div class="logo-main-text">
                <span class="logo-dot">i</span>MP<span class="logo-dot">A</span>KT
            </div>
            <div class="logo-sub-text">
                COM DIGITALE <span>•</span> BRANDING <span>•</span> PRODUCTION
            </div>
        </a>

        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="bi bi-list fs-1 text-yellow"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->getName() === 'home' ? 'active' : '' }} hover-target" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->getName() === 'services' ? 'active' : '' }} hover-target" href="{{ route('services') }}">Nos Prestations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->getName() === 'portfolio' ? 'active' : '' }} hover-target" href="{{ route('portfolio') }}">Réalisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->getName() === 'about' ? 'active' : '' }} hover-target" href="{{ route('about') }}">L'Agence</a>
                </li>
               <li class="nav-item ms-lg-3 mt-3 mt-lg-0">

    <!-- Bouton bullet blanc -->
    <a href="#" 
       class="phone-bullet hover-target"
       onclick="openContactModal(); return false;">
       +596 696 74 22 44
    </a>

</li>
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
    <a class="btn-impakt hover-target"
       style="padding: 0.5rem 1.5rem; font-size: 0.9rem; text-decoration: none;"
       href="{{ route('contact') }}">
       Devis Gratuit
    </a>
</li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Contact -->
<div id="contactModal" class="contact-modal">
    <div class="contact-modal-content">
        <h4 class="text-white mb-4">Nous contacter</h4>

        <a href="https://wa.me/596696742244" class="contact-option whatsapp">
            <i class="bi bi-whatsapp me-2"></i>
            WhatsApp
        </a>

        <a href="tel:+596696742244" class="contact-option phone">
            <i class="bi bi-telephone-fill me-2"></i>
            Appel téléphonique
        </a>

        <button class="close-modal" onclick="closeContactModal()">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
</div>