<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('INÍCIO STUDIO', 'INÍCIO STUDIO')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logowarna.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* ================= GLOBAL FONT ================= */
        body {
            font-family: "League Spartan", sans-serif;
        }

        /* ================= NAVBAR STYLE ================= */
        .navbar-brand-custom {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #394428 !important;
            opacity: 0.5;
            transition: opacity 0.3s ease-in-out;
        }
        .navbar-brand-custom:hover { opacity: 1; }
        .navbar-brand-custom img { width: 48px; height: 48px; margin-right: 10px; }
        .navbar-brand-text { font-weight: 800; font-size: 20px; letter-spacing: 0.05em; }

        .nav-link {
            color: #394428 !important;
            font-weight: 700;
            opacity: 0.5;
            transition: all 0.3s ease;
        }
        .nav-link:hover { opacity: 1 !important; }
        .nav-link.active {
            color: #8A9165 !important;
            opacity: 1 !important;
            font-weight: 800 !important;
            position: relative;
        }
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 28px;
            height: 3px;
            background: #8A9165;
            border-radius: 4px;
        }

        /* ================= FLOATING SOCIAL BAR (NEW) ================= */
        .floating-social-bar {
            position: fixed;
            bottom: -100px; /* Tersembunyi di bawah layar secara default */
            left: 50%;
            transform: translateX(-50%);
            background-color: #D0C1A7; /* Warna cokelat pasir */
            padding: 12px 25px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 20px;
            /* Efek Bounce saat muncul */
            transition: bottom 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }

        /* Class untuk memunculkan via JS */
        .floating-social-bar.show-bar {
            bottom: 40px;
        }

        .social-icon-btn {
            color: #394428;
            font-size: 1.6rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icon-btn:hover {
            color: #ffffff;
            transform: scale(1.2) translateY(-3px);
        }

        /* ================= MODAL CONTACT STYLE ================= */
        .contact-modal-body {
            background-color: #2D341F !important;
            border-radius: 30px !important;
            border: none;
        }
        .contact-input {
            background-color: #1F2415 !important;
            border: none !important;
            border-radius: 12px !important;
            color: white !important;
            padding: 12px 20px !important;
            width: 100%;
            font-size: 0.9rem;
        }
        .contact-input::placeholder { color: rgba(255,255,255,0.4); }
        .btn-send-message {
            background-color: #8A9165;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 20px;
            font-weight: 700;
            transition: 0.3s;
            font-size: 1.1rem;
        }
        .btn-send-message:hover { background-color: #a3ab7a; }

        /* ================= FOOTER FIGMA REPAIR ================= */
        .footer-inicio {
            background-color: #8A9165;
            color: #ffffff;
            padding: 80px 0;
            font-family: "League Spartan", sans-serif;
        }

        .footer-brand-title {
            font-weight: 800;
            font-size: 32px;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .footer-desc {
            font-size: 14px;
            line-height: 1.6;
            text-align: justify;
            font-weight: 400;
        }

        .footer-contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-contact-list li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 15px;
            font-weight: 500;
        }

        .footer-contact-list i {
            font-size: 20px;
            margin-right: 15px;
            width: 24px;
            text-align: center;
        }

        @media (max-width: 991.98px) {
            .footer-inicio { padding: 50px 20px; }
            .footer-desc { text-align: left; margin-bottom: 30px; }
            .nav-link { padding: 10px 0; }
            .floating-social-bar.show-bar { bottom: 20px; }
        }
    </style>

    @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="bg-light border-bottom sticky-top">
        <div class="container-fluid px-5">
            <div class="d-flex align-items-center justify-content-between py-2">

                <a href="{{ url('/') }}" class="navbar-brand-custom">
                    <img src="{{ asset('assets/INICIOLOGO.png') }}" alt="Logo">
                    <div class="navbar-brand-text">INÍCIO STUDIO</div>
                </a>

                <nav class="nav">
                    <a class="nav-link px-3 {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                    <a class="nav-link px-3 {{ request()->is('services') ? 'active' : '' }}" href="{{ url('/services') }}">Services</a>
                    <a class="nav-link px-3 {{ request()->is('portfolio') ? 'active' : '' }}" href="{{ url('/portfolio') }}">Portfolio</a>
                    <a class="nav-link px-3 {{ request()->is('insight') ? 'active' : '' }}" href="{{ url('/insight') }}">Insight</a>
                    
                    <a class="nav-link px-3" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
                        Contact
                    </a>
                </nav>

            </div>
        </div>
    </header>

    <main class="flex-fill">
        @yield('content')
    </main>

    <div class="floating-social-bar" id="social-bar">
        <a href="https://instagram.com/iniciostudio.id" target="_blank" class="social-icon-btn"><i class="bi bi-instagram"></i></a>
        <a href="#" target="_blank" class="social-icon-btn"><i class="bi bi-linkedin"></i></a>
        <a href="#" target="_blank" class="social-icon-btn"><i class="bi bi-youtube"></i></a>
    </div>

    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content contact-modal-body shadow-lg">
                <div class="modal-body p-4 p-md-5">
                    <button type="button" class="btn-close btn-close-white float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="fw-bold text-white mb-4" style="font-size: 2rem;">Come work with us</h2>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="mb-3"><label class="text-white small fw-bold mb-1">Name</label><input type="text" name="name" class="contact-input" placeholder="Name" required></div>
                                <div class="mb-3"><label class="text-white small fw-bold mb-1">Email Adress</label><input type="email" name="email" class="contact-input" placeholder="Email Adress" required></div>
                                <div class="mb-3"><label class="text-white small fw-bold mb-1">Subject</label><input type="text" name="subject" class="contact-input" placeholder="Subject" required></div>
                                <div class="mb-4"><label class="text-white small fw-bold mb-1">Message</label><textarea name="message" class="contact-input" rows="3" placeholder="Message" required></textarea></div>
                                <button type="submit" class="btn-send-message w-100">Send message</button>
                            </form>
                        </div>
                        <div class="col-lg-5 text-white ps-lg-5 mt-5 mt-lg-0 text-center text-lg-start">
                            <div class="text-center mb-5">
                                <img src="{{ asset('assets/logoputih.png') }}" width="85" alt="Logo">
                                <h4 class="fw-bold mt-2" style="letter-spacing: 2px;">INÍCIO STUDIO</h4>
                            </div>
                            <div class="contact-info-list text-start">
                                <p><i class="bi bi-envelope-fill me-3"></i> inicio.studioid@gmail.com</p>
                                <p><i class="bi bi-telephone-fill me-3"></i> 085103726662</p>
                                <p><i class="bi bi-instagram me-3"></i> iniciostudio.id</p>
                                <p><i class="bi bi-linkedin me-3"></i> Inicio Studio</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-inicio">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('assets/logoputih.png') }}" alt="Logo" width="60" class="me-3">
                        <div class="footer-brand-title">INÍCIO STUDIO</div>
                    </div>
                    <p class="footer-desc">
                        <strong>INICIO Studio</strong> adalah sebuah creative agency yang berfokus pada desain brand. Kami membantu bisnis baik yang baru memulai maupun yang sudah berjalan untuk membangun identitas visual dan branding yang profesional, efektif, dan mudah dikenali.
                    </p>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 d-flex align-items-end">
                    <p class="footer-desc">
                        <strong>INICIO Studio</strong> hadir sebagai solusi bagi mereka yang belum memahami dunia branding atau tidak memiliki waktu untuk mengurus desain, namun ingin mengembangkan bisnis yang terlihat lebih profesional dan memiliki citra kuat di mata pelanggan.
                    </p>
                </div>

                <div class="col-lg-4">
                    <ul class="footer-contact-list">
                        <li><i class="bi bi-envelope"></i> inicio.studioid@gmail.com</li>
                        <li><i class="bi bi-telephone"></i> 085103726662</li>
                        <li><i class="bi bi-instagram"></i> iniciostudio.id</li>
                        <li><i class="bi bi-linkedin"></i> Inicio Studio</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const socialBar = document.getElementById('social-bar');
            
            // Fungsi pengecekan scroll
            function handleScroll() {
                // Di halaman About, section 1 memiliki tinggi vh (100vh)
                // Kita munculkan bar jika scroll sudah lebih dari 300 pixel (atau sesuaikan sesuai keinginan)
                if (window.scrollY > 300) {
                    socialBar.classList.add('show-bar');
                } else {
                    socialBar.classList.remove('show-bar');
                }
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Cek saat pertama kali load
        });
    </script>

    @stack('scripts')
    @yield('scripts')
</body>
</html>