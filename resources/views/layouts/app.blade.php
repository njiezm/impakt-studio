<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IMPAKT STUDIO - Agence de Communication Digitale')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Fredoka:wght@600;700&family=Inter:wght@300;400;600&family=Space+Grotesk:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles personnalisés -->
    <style>
        :root {
            --c-yellow: #ffcf1c;
            --c-black: #0a0a0a;
            --c-dark-grey: #1a1a1a;
            --c-text-light: #f0f0f0;
            --c-text-dark: #0a0a0a;
            
            --f-heading: 'Space Grotesk', sans-serif;
            --f-body: 'Inter', sans-serif;
            --f-hand: 'Caveat', cursive;
            --f-logo: 'Fredoka', sans-serif;
        }

        /* Loading Screen */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--c-black);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        .loading-screen.hide {
            opacity: 0;
            visibility: hidden;
        }
        .loading-content {
            text-align: center;
        }
        .loading-logo {
            font-family: var(--f-logo);
            font-size: 3rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
        }
        .loading-bar {
            width: 200px;
            height: 4px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            overflow: hidden;
            margin: 0 auto;
        }
        .loading-progress {
            height: 100%;
            background-color: var(--c-yellow);
            width: 0;
            animation: loading 2s ease-in-out forwards;
        }
        @keyframes loading {
            0% { width: 0; }
            100% { width: 100%; }
        }

        /* Base & Reset */
        body {
            background-color: var(--c-black);
            color: var(--c-text-light);
            font-family: var(--f-body);
            overflow-x: hidden;
            cursor: none;
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        /* Thèmes dynamiques */
        body.theme-dark {
            background-color: var(--c-black);
            color: var(--c-text-light);
        }
        body.theme-yellow {
            background-color: var(--c-yellow);
            color: var(--c-text-dark);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--f-heading);
            font-weight: 700;
        }

        /* Police Manuscrite */
        .font-hand {
            font-family: var(--f-hand);
            font-size: 1.5em;
            line-height: 1;
            transform: rotate(-2deg);
            display: inline-block;
        }

        /* Custom Cursor */
        .cursor-dot, .cursor-outline {
            position: fixed;
            top: 0; left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 9999;
            pointer-events: none;
            mix-blend-mode: difference;
        }
        .cursor-dot {
            width: 8px;
            height: 8px;
            background-color: white;
        }
        .cursor-outline {
            width: 40px;
            height: 40px;
            border: 2px solid white;
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }
        .cursor-hover .cursor-outline {
            width: 70px;
            height: 70px;
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Navbar */
        .navbar {
            padding: 1rem 0;
            background: rgba(10, 10, 10, 0.98);
            border-bottom: 1px solid rgba(255, 207, 28, 0.2);
            z-index: 1000;
            transition: all 0.3s ease;
        }
        .navbar.scrolled {
            padding: 0.5rem 0;
            background: rgba(10, 10, 10, 0.99);
        }
        
        /* Logo */
        .navbar-brand-custom {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .logo-main-text {
            font-family: var(--f-logo);
            font-size: 2.2rem;
            font-weight: 700;
            color: white;
            line-height: 1;
            letter-spacing: 1px;
        }
        .logo-dot {
            color: var(--c-yellow);
        }
        .logo-sub-text {
            font-family: var(--f-body);
            font-size: 0.6rem;
            font-weight: 600;
            color: white;
            letter-spacing: 2px;
            margin-top: 5px;
        }
        .logo-sub-text span {
            color: var(--c-yellow);
        }

        /* Navigation Links */
        .nav-link {
            color: white !important;
            font-family: var(--f-heading);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            margin: 0 10px;
            position: relative;
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            opacity: 1;
            color: var(--c-yellow) !important;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--c-yellow);
            transition: width 0.3s ease;
        }
        .nav-link.active::after {
            width: 100%;
        }

        /* Boutons Custom */
        .btn-impakt {
            display: inline-block;
            padding: 1rem 2rem;
            font-family: var(--f-heading);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease;
            border: 2px solid var(--c-yellow);
            color: var(--c-yellow);
            background: transparent;
            cursor: none;
        }
        .theme-yellow .btn-impakt {
            border-color: var(--c-black);
            color: var(--c-black);
        }
        .btn-impakt:hover {
            background-color: var(--c-yellow);
            color: var(--c-black);
        }
        .theme-yellow .btn-impakt:hover {
            background-color: var(--c-black);
            color: var(--c-yellow);
        }

        /* Animations */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hero Section */
        .hero-title {
            font-size: clamp(3rem, 8vw, 6.5rem);
            line-height: 1;
            text-transform: uppercase;
        }
        .hero-title .outline {
            color: transparent;
            -webkit-text-stroke: 1px var(--c-text-light);
        }

        /* Service Cards */
        .service-box {
            background: var(--c-black);
            color: white;
            padding: 3rem 2rem;
            border-radius: 20px;
            height: 100%;
            transition: transform 0.3s ease;
            border: 2px solid transparent;
        }
        .service-box:hover {
            transform: scale(1.02);
            border-color: white;
        }
        .service-box i {
            font-size: 3.5rem;
            color: var(--c-yellow);
            margin-bottom: 1rem;
            display: block;
        }

        /* Polaroid */
        .polaroid {
            background: white;
            padding: 15px 15px 50px 15px;
            transform: rotate(3deg);
            max-width: 400px;
            margin: 0 auto;
            color: var(--c-black);
        }
        .polaroid-img {
            background: var(--c-yellow);
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }

        /* Utility Classes */
        .text-yellow { color: var(--c-yellow) !important; }
        .text-black { color: var(--c-black) !important; }
        .hover-target { cursor: none; }

        /* Animations */
        @keyframes pulse {
            0% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
            100% { border-radius: 30% 70% 40% 60% / 60% 30% 70% 40%; }
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                background: var(--c-black);
                padding: 1rem;
                margin-top: 10px;
                border-radius: 10px;
            }
            body { cursor: auto; }
            .cursor-dot, .cursor-outline { display: none; }
            .btn-impakt, .hover-target { cursor: pointer; }
        }
        .main-content {
    padding-top: 90px;
}
/* Bullet blanc */
.phone-bullet {
    background: white;
    color: black;
    padding: 8px 20px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
}

.phone-bullet:hover {
    background: var(--c-yellow);
    color: black;
}

/* Modal */
.contact-modal {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
    opacity: 0;
    transition: 0.3s ease;
    z-index: 9999;
}

.contact-modal.active {
    visibility: visible;
    opacity: 1;
}

.contact-modal-content {
    background: #1a1a1a;
    padding: 40px;
    border-radius: 20px;
    text-align: center;
    width: 300px;
}

.contact-option {
    display: block;
    margin: 15px 0;
    padding: 12px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.whatsapp {
    background: #25D366;
    color: white;
}

.phone {
    background: var(--c-yellow);
    color: black;
}

.close-modal {
    margin-top: 20px;
    background: transparent;
    border: 1px solid white;
    color: white;
    padding: 8px 15px;
    border-radius: 8px;
    cursor: pointer;
}

.contact-option {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin: 15px 0;
    padding: 14px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s ease;
    font-size: 1rem;
}

.contact-option i {
    font-size: 1.2rem;
}

.close-modal {
    margin-top: 25px;
    background: transparent;
    border: none;
    color: white;
    font-size: 1.2rem;
    cursor: pointer;
    transition: 0.3s;
}

.close-modal:hover {
    color: var(--c-yellow);
}
    </style>
</head>
<body class="theme-dark">
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-content">
            <div class="loading-logo">IMPAKT STUDIO</div>
            <div class="loading-bar">
                <div class="loading-progress"></div>
            </div>
        </div>
    </div>

    <!-- Curseur Personnalisé -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialisation AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Loading Screen
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loadingScreen').classList.add('hide');
            }, 1500);
        });

        // Custom Cursor
        document.addEventListener('DOMContentLoaded', function() {
            const cursorDot = document.querySelector('.cursor-dot');
            const cursorOutline = document.querySelector('.cursor-outline');
            
            if (window.matchMedia("(pointer: fine)").matches && cursorDot && cursorOutline) {
                window.addEventListener('mousemove', (e) => {
                    const posX = e.clientX;
                    const posY = e.clientY;

                    cursorDot.style.left = `${posX}px`;
                    cursorDot.style.top = `${posY}px`;

                    cursorOutline.animate({
                        left: `${posX}px`,
                        top: `${posY}px`
                    }, { duration: 150, fill: "forwards" });
                });

                document.addEventListener('mouseover', (e) => {
                    if (e.target.closest('.hover-target') || e.target.tagName.toLowerCase() === 'a' || e.target.tagName.toLowerCase() === 'button') {
                        document.body.classList.add('cursor-hover');
                    } else {
                        document.body.classList.remove('cursor-hover');
                    }
                });
            }

            // Reveal animations
            const revealElements = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });

            revealElements.forEach(el => revealObserver.observe(el));
        });

        
function openContactModal() {
    document.getElementById("contactModal").classList.add("active");
}

function closeContactModal() {
    document.getElementById("contactModal").classList.remove("active");
}

    </script>

    @section('scripts')
    @show
</body>
</html>