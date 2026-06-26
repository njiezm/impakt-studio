<footer class="footer py-5 bg-black text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h4 class="font-hand fs-2 text-yellow mb-3">Restons connectés</h4>
                <p class="mb-3">Prêts à créer l'IMPACT ?</p>
                <div class="d-flex gap-3">
                    <a href="https://www.instagram.com/impakt.studio.mq/" class="social-icon hover-target">
                        <i class="bi bi-instagram text-white fs-5"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/impakt-studio-martinique/" class="social-icon hover-target">
                        <i class="bi bi-linkedin text-white fs-5"></i>
                    </a>
                    <a href="#" class="social-icon hover-target">
                        <i class="bi bi-youtube text-white fs-5"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <h4 class="font-hand fs-2 text-yellow mb-3">Navigation</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none hover-target">Accueil</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}" class="text-white-50 text-decoration-none hover-target">Prestations</a></li>
                    <li class="mb-2"><a href="{{ route('portfolio') }}" class="text-white-50 text-decoration-none hover-target">Réalisations</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-white-50 text-decoration-none hover-target">L'Agence</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none hover-target">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4">
                <h4 class="font-hand fs-2 text-yellow mb-3">Contact</h4>
                <p class="mb-2">
                    <i class="bi bi-geo-alt text-yellow me-2"></i>
                    <a href="https://www.google.com/maps?q=97231+Le+Robert+Martinique"
                    target="_blank"
                    class="text-white-50 text-decoration-none hover-target">
                        97231 Le Robert, Martinique
                    </a>
                </p>

                <p class="mb-2">
                    <i class="bi bi-telephone text-yellow me-2"></i>
                    <a href="tel:+596696742244"
                    class="text-white-50 text-decoration-none hover-target">
                        +596 696 74 22 44
                    </a>
                </p>

                <p class="mb-2">
                    <i class="bi bi-envelope text-yellow me-2"></i>
                    <a href="mailto:impakt.studio@gmail.com"
                    class="text-white-50 text-decoration-none hover-target">
                        impakt.studio@gmail.com
                    </a>
                </p>
 </div>
        </div>
        <hr class="my-4 border-secondary">

        <div class="text-center">

            <p class="mb-2">
                &copy; {{ date('Y') }} IMPAKT STUDIO - Tous droits réservés
            </p>

            <a href="{{ route('rgpd') }}"
                class="text-white-50 text-decoration-none hover-target">
                    Mentions légales & RGPD
                </a>

        </div>
    </div>
</footer>