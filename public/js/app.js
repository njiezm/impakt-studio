// ===== DOM CONTENT LOADED =====
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser toutes les fonctionnalités
    initLoader();
    initNavbar();
    initCursor();
    initScrollReveal();
    initSmoothScroll();
    initThemeManager();
    initMobileMenu();
    initFormValidation();
    initAnimations();
    initPortfolioFilter();
});

// ===== LOADER =====
function initLoader() {
    const loader = document.getElementById('loader');
    if (loader) {
        window.addEventListener('load', () => {
            setTimeout(() => {
                loader.classList.add('hidden');
                // Déclencher les animations après le chargement
                revealElements();
            }, 1000);
        });
    }
}

// ===== NAVBAR =====
function initNavbar() {
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Gestion des liens actifs
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.page-view, section[id]');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').slice(1) === current) {
                link.classList.add('active');
            }
        });
    });
}

// ===== CURSOR PERSONNALISÉ =====
function initCursor() {
    // Ne pas initialiser sur mobile
    if (window.innerWidth <= 768) return;

    const cursor = document.createElement('div');
    cursor.className = 'cursor';
    document.body.appendChild(cursor);

    const cursorFollower = document.createElement('div');
    cursorFollower.className = 'cursor-follower';
    document.body.appendChild(cursorFollower);

    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;
    let followerX = 0, followerY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    // Animation du curseur
    function animateCursor() {
        cursorX += (mouseX - cursorX) * 0.5;
        cursorY += (mouseY - cursorY) * 0.5;
        
        followerX += (mouseX - followerX) * 0.1;
        followerY += (mouseY - followerY) * 0.1;

        cursor.style.left = cursorX + 'px';
        cursor.style.top = cursorY + 'px';
        
        cursorFollower.style.left = followerX + 'px';
        cursorFollower.style.top = followerY + 'px';

        requestAnimationFrame(animateCursor);
    }
    animateCursor();

    // Effet hover sur les éléments interactifs
    const interactiveElements = document.querySelectorAll('a, button, .hover-target, .service-card, .portfolio-item');
    
    interactiveElements.forEach(element => {
        element.addEventListener('mouseenter', () => {
            cursor.classList.add('hover');
            cursorFollower.classList.add('hover');
        });
        
        element.addEventListener('mouseleave', () => {
            cursor.classList.remove('hover');
            cursorFollower.classList.remove('hover');
        });
    });
}

// ===== SCROLL REVEAL ANIMATION =====
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal');
    
    const revealOnScroll = () => {
        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight - 100) {
                element.classList.add('active');
            }
        });
    };

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Vérifier au chargement
}

function revealElements() {
    const revealElements = document.querySelectorAll('.reveal');
    revealElements.forEach((element, index) => {
        setTimeout(() => {
            element.classList.add('active');
        }, index * 100);
    });
}

// ===== SMOOTH SCROLL =====
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            
            if (href !== '#' && document.querySelector(href)) {
                e.preventDefault();
                
                const target = document.querySelector(href);
                const offsetTop = target.offsetTop - 80;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
                
                // Fermer le menu mobile si ouvert
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                }
            }
        });
    });
}

// ===== THEME MANAGER =====
function initThemeManager() {
    const pageViews = document.querySelectorAll('.page-view');
    
    const updateTheme = () => {
        const scrollY = window.scrollY;
        
        pageViews.forEach(view => {
            const viewTop = view.offsetTop;
            const viewHeight = view.offsetHeight;
            const viewBottom = viewTop + viewHeight;
            
            if (scrollY >= viewTop - 100 && scrollY < viewBottom) {
                const theme = view.getAttribute('data-theme');
                applyTheme(theme);
            }
        });
    };

    function applyTheme(theme) {
        const body = document.body;
        const navbar = document.querySelector('.navbar');
        
        // Supprimer toutes les classes de thème
        body.classList.remove('theme-dark', 'theme-light', 'theme-yellow');
        
        // Appliquer le nouveau thème
        switch(theme) {
            case 'light':
                body.classList.add('theme-light');
                if (navbar) navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                break;
            case 'yellow':
                body.classList.add('theme-yellow');
                if (navbar) navbar.style.backgroundColor = 'rgba(255, 215, 0, 0.95)';
                break;
            default:
                body.classList.add('theme-dark');
                if (navbar) navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.95)';
        }
    }

    window.addEventListener('scroll', updateTheme);
    updateTheme(); // Appliquer le thème au chargement
}

// ===== MOBILE MENU =====
function initMobileMenu() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener('click', () => {
            navbarCollapse.classList.toggle('show');
        });
        
        // Fermer le menu en cliquant à l'extérieur
        document.addEventListener('click', (e) => {
            if (!navbarToggler.contains(e.target) && !navbarCollapse.contains(e.target)) {
                navbarCollapse.classList.remove('show');
            }
        });
    }
}

// ===== FORM VALIDATION =====
function initFormValidation() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            // Validation HTML5 déjà gérée par Laravel
            // Ajouter des animations de soumission si nécessaire
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Envoi en cours...';
            }
        });
    });
}

// ===== ANIMATIONS SPÉCIFIQUES =====
function initAnimations() {
    // Animation des nombres
    const animateNumbers = () => {
        const numbers = document.querySelectorAll('.animate-number');
        
        numbers.forEach(number => {
            const target = parseInt(number.getAttribute('data-target'));
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;
            
            const updateNumber = () => {
                current += increment;
                if (current < target) {
                    number.textContent = Math.floor(current);
                    requestAnimationFrame(updateNumber);
                } else {
                    number.textContent = target;
                }
            };
            
            // Démarrer l'animation quand l'élément est visible
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateNumber();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            observer.observe(number);
        });
    };

    // Animation des barres de progression
    const animateProgress = () => {
        const progressBars = document.querySelectorAll('.progress-bar');
        
        progressBars.forEach(bar => {
            const width = bar.getAttribute('data-width');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        bar.style.width = width;
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            observer.observe(bar);
        });
    };

    animateNumbers();
    animateProgress();
}

// ===== PORTFOLIO FILTER =====
function initPortfolioFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    if (filterButtons.length > 0 && portfolioItems.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Mettre à jour le bouton actif
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                const filter = button.getAttribute('data-filter');
                
                // Filtrer les éléments
                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }
}

// ===== UTILITAIRES =====
// Débouncer pour optimiser les événements scroll
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Optimiser les événements scroll
const optimizedScroll = debounce(() => {
    // Événements scroll optimisés
}, 10);

window.addEventListener('scroll', optimizedScroll);

// ===== PREVENT CONTEXT MENU ON IMAGES =====
document.addEventListener('contextmenu', (e) => {
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
    }
});

// ===== LAZY LOADING FOR IMAGES =====
const lazyImages = document.querySelectorAll('img[data-src]');
const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.remove('lazy');
            imageObserver.unobserve(img);
        }
    });
});

lazyImages.forEach(img => imageObserver.observe(img));

// ===== CONSOLE EASTER EGG =====
console.log('%c IMPAKT STUDIO ', 'background: #FFD700; color: #000; font-size: 20px; font-weight: bold;');
console.log('%c Créativité • Impact • Résultats ', 'background: #000; color: #FFD700; font-size: 14px;');