@extends('layouts.app')

@section('title', 'Contact - IMPAKT STUDIO')

@section('content')
<!-- ============================================== -->
<!-- PAGE CONTACT (Thème Jaune Dominant)             -->
<!-- ============================================== -->
<section id="view-contact" class="contact-theme-yellow py-5">
    <div class="container py-5 mt-4">
        <!-- Messages de succès/erreur -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        <div class="row justify-content-center reveal">
            <div class="col-lg-8 text-center mb-5">
                <p class="font-hand fs-1 text-black mb-0">C'est le moment de passer à l'action</p>
                <h2 class="display-2 text-uppercase text-black">Briefez-<span class="text-stroke-white">nous</span></h2>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-black p-5 rounded-4 shadow-lg reveal">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-impakt @error('name') is-invalid @enderror" 
                                           id="name" name="name" placeholder="Votre nom" value="{{ old('name') }}" required>
                                    <label for="name" class="">Votre nom</label>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control form-control-impakt @error('email') is-invalid @enderror" 
                                           id="email" name="email" placeholder="Votre email" value="{{ old('email') }}" required>
                                    <label for="email" class="">Votre email</label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control form-control-impakt @error('phone') is-invalid @enderror" 
                                           id="phone" name="phone" placeholder="Votre téléphone" value="{{ old('phone') }}">
                                    <label for="phone" class="">Votre téléphone</label>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-impakt @error('company') is-invalid @enderror" 
                                           id="company" name="company" placeholder="Votre entreprise" value="{{ old('company') }}">
                                    <label for="company" class="">Votre entreprise</label>
                                    @error('company')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-control form-control-impakt @error('project_type') is-invalid @enderror" 
                                            id="project_type" name="project_type" required>
                                        <option value="" selected disabled>Sélectionnez un service</option>
                                        <option value="branding" {{ old('project_type') == 'branding' ? 'selected' : '' }}>Branding & Identité</option>
                                        <option value="video" {{ old('project_type') == 'video' ? 'selected' : '' }}>Production Vidéo</option>
                                        <option value="web" {{ old('project_type') == 'web' ? 'selected' : '' }}>Web Design</option>
                                        <option value="strategy" {{ old('project_type') == 'strategy' ? 'selected' : '' }}>Stratégie Digitale</option>
                                        <option value="other" {{ old('project_type') == 'other' ? 'selected' : '' }}>Autre</option>
                                    </select>
                                    <label for="project_type" class="">Service intéressé</label>
                                    @error('project_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control form-control-impakt @error('message') is-invalid @enderror" 
                                              id="message" name="message" rows="5" placeholder="Décrivez votre projet" required>{{ old('message') }}</textarea>
                                    <label for="message" class="">Décrivez votre projet</label>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="newsletter" name="newsletter">
                                    <label class="form-check-label " for="newsletter">
                                        Je souhaite recevoir la newsletter d'IMPAKT Studio
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn-impakt-yellow w-100 hover-target">
                                    Envoyer le missile <i class="bi bi-rocket-takeoff ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Contact Info -->
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-lg-8">
                <div class="row g-4">
                    <div class="col-md-4 text-center reveal">
                        <div class="bg-black p-4 rounded-4 h-100">
                            <i class="bi bi-geo-alt fs-1 text-yellow mb-3"></i>
                            <h4 class="text-white">Adresse</h4>
                            <div class="mt-3">
                                <a href="https://www.google.com/mapsq=Fort-de-France" target="_blank" class="text-white  text-decoration-none">
                                    97231 Le Robert<br>Martinique
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center reveal" data-aos-delay="100">
                        <div class="bg-black p-4 rounded-4 h-100">
                            <i class="bi bi-telephone fs-1 text-yellow mb-3"></i>
                            <h4 class="text-white">Téléphone</h4>
                            <p>
                                <a href="tel:+596696742244" class="text-white text-decoration-none">
                                    +596 696 74 22 44
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center reveal" data-aos-delay="200">
                        <div class="bg-black p-4 rounded-4 h-100">
                            <i class="bi bi-envelope fs-1 text-yellow mb-3"></i>
                            <h4 class="text-white">Email</h4>
                            <p>
                                <a href="mailto:contact@impaktstudio.com" class="text-white  text-decoration-none">
                                    contact@impaktstudio.com
                                </a><br>
                                <a href="mailto:hello@impaktstudio.com" class="text-white  text-decoration-none">
                                    hello@impaktstudio.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
/* Thème de la page contact */
.contact-theme-yellow {
    background-color: var(--c-yellow);
    min-height: 100vh;
}

/* Effet de texte sur le titre */
.text-stroke-white {
    color: transparent;
    -webkit-text-stroke: 2px white;
}

/* Style pour les champs du formulaire */
.form-control-impakt {
    background-color: transparent !important;
    color: white !important;
    border: 1px solid #6c757d !important; /* border-secondary */
    border-radius: 0 !important;
    padding-top: 1.6rem !important; /* Ajustement pour les floating labels */
    padding-bottom: 1.6rem !important;
}

.form-control-impakt:focus {
    color: white;
    background-color: transparent;
    border-color: var(--c-yellow);
    box-shadow: 0 0 0 0.25rem rgba(255, 207, 28, 0.25);
}

.form-control-impakt::placeholder {
    color: #6c757d; /* Couleur du placeholder */
}

/* Style pour les labels des floating labels */
.form-floating > .form-control-impakt ~ label {
    color: #6c757d; /* Couleur du label par défaut */
}

.form-floating > .form-control-impakt:focus ~ label,
.form-floating > .form-control-impakt:not(:placeholder-shown) ~ label {
    color: var(--c-yellow); /* Couleur du label quand le champ est actif ou rempli */
}

/* Style pour le select */
.form-floating > .form-control-impakt {
    padding-top: 1.6rem !important;
    padding-bottom: 1.6rem !important;
    line-height: 1.5;
}

/* Bouton spécial pour la page contact */
.btn-impakt-yellow {
    background-color: var(--c-yellow);
    color: var(--c-black);
    border: 2px solid var(--c-yellow);
    padding: 12px 30px;
    font-size: 1.25rem; /* fs-5 */
    font-weight: 700;
    border-radius: 50px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-impakt-yellow:hover {
    background-color: transparent;
    color: var(--c-yellow);
    border-color: var(--c-black);
    transform: translateY(-3px);
}

/* Assurer que les cartes aient la même hauteur */
.contact-theme-yellow .h-100 {
    height: 100%;
}

/* Responsive */
@media (max-width: 768px) {
    .display-2 {
        font-size: 3rem;
    }
    .text-stroke-white {
        -webkit-text-stroke: 1.5px white;
    }
}

.form-control-impakt {
    height: 80px !important;
    padding: 2rem 1rem 1rem 1rem !important;
}
</style>
