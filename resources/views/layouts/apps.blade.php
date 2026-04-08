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

        .navbar-brand-custom:hover {
            opacity: 1;
        }

        .navbar-brand-custom img {
            width: 48px;
            height: 48px;
            margin-right: 10px;
        }

        .navbar-brand-text {
            font-weight: 800;
            font-size: 20px;
            letter-spacing: 0.05em;
        }

        .nav-link {
            color: #394428 !important;
            font-weight: 700;
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            opacity: 1 !important;
        }

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

        /* ================= FLOATING SOCIAL BAR ================= */
        .floating-social-bar {
            position: fixed;
            bottom: 30px;
            right: 30px;
            left: auto !important;
            display: flex;
            gap: 15px;
            z-index: 9999;
            background: rgba(226, 213, 190, 0.8);
            padding: 10px 20px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }

        .floating-social-bar.show-bar {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
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

        .contact-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

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

        .btn-send-message:hover {
            background-color: #a3ab7a;
        }

        /* ================= FOOTER STYLE ================= */
        .footer-inicio {
            background-color: #8A9165;
            color: white;
            padding: 80px 0;
            font-family: 'League Spartan', sans-serif;
        }

        .footer-brand-title {
            font-size: 1.8rem;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .footer-desc {
            font-size: 0.95rem;
            line-height: 1.6;
            text-align: justify;
            margin-bottom: 0;
            max-width: 100%;
        }

        .align-with-text {
            margin-top: 72px;
        }

        .footer-contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-contact-list li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            font-size: 0.95rem;
        }

        .footer-contact-list i {
            font-size: 1.2rem;
            width: 35px;
        }

        .footer-contact-list a {
            color: white;
            text-decoration: none;
        }

        .equal-gap-row {
            --bs-gutter-x: 5rem;
        }

        /* ================= RESPONSIVE (HP) ================= */
        @media (max-width: 991.98px) {
            /* Header / Navbar Mobile */
            header .d-flex {
                flex-direction: column;
                padding: 15px 0;
            }

            .navbar-brand-custom {
                margin-bottom: 15px;
            }

            .nav {
                justify-content: center;
                gap: 5px;
            }

            .nav-link {
                padding: 8px 10px !important;
                font-size: 14px;
            }

            .nav-link.active::after {
                width: 20px;
                bottom: 2px;
            }

            /* Floating Bar Mobile */
            .floating-social-bar {
                bottom: 20px;
                right: 20px;
                padding: 8px 15px;
                gap: 10px;
            }

            .social-icon-btn {
                font-size: 1.3rem;
            }

            /* Footer Mobile */
            .footer-inicio {
                padding: 50px 20px;
                text-align: center;
            }

            .footer-brand-title {
                font-size: 1.5rem;
            }

            .footer-desc {
                text-align: center;
                margin-bottom: 30px;
            }

            .align-with-text {
                margin-top: 0;
            }

            .footer-contact-list li {
                justify-content: center;
            }

            .equal-gap-row {
                --bs-gutter-x: 1.5rem;
            }

            .d-flex.align-items-center.mb-3 {
                justify-content: center;
            }

            /* Modal Mobile */
            .contact-modal-body {
                padding: 20px !important;
            }

            .contact-info-list {
                text-align: center !important;
                margin-top: 30px;
            }

            .contact-info-list p {
                justify-content: center;
                display: flex;
                align-items: center;
            }
        }
    </style>

    @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="bg-light border-bottom sticky-top">
        <div class="container-fluid px-md-5">
            <div class="d-flex align-items-center justify-content-between py-2">

                <a href="{{ url('/') }}" class="navbar-brand-custom">
                    <img src="{{ asset('assets/INICIOLOGO.png') }}" alt="Logo">
                    <div class="navbar-brand-text">INÍCIO STUDIO</div>
                </a>

                <nav class="nav">
                    <a class="nav-link px-3 {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ url('/about') }}">About</a>
                    <a class="nav-link px-3 {{ request()->is('services') ? 'active' : '' }}"
                        href="{{ url('/services') }}">Services</a>
                    <a class="nav-link px-3 {{ request()->is('portfolio') ? 'active' : '' }}"
                        href="{{ url('/portfolio') }}">Portfolio</a>
                    <a class="nav-link px-3 {{ request()->is('insight') ? 'active' : '' }}"
                        href="{{ url('/insight') }}">Insight</a>

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
        <a href="https://instagram.com/iniciostudio.id" target="_blank" class="social-icon-btn"><i
                class="bi bi-instagram"></i></a>
        <a href="#" target="_blank" class="social-icon-btn"><i class="bi bi-linkedin"></i></a>
        <a href="#" target="_blank" class="social-icon-btn"><i class="bi bi-youtube"></i></a>
    </div>

    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content contact-modal-body shadow-lg">
                <div class="modal-body p-4 p-md-5">
                    <button type="button" class="btn-close btn-close-white float-end" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="fw-bold text-white mb-4" style="font-size: 2rem;">Come work with us</h2>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="text-white small fw-bold mb-1">Name</label>
                                    <input type="text" name="name" class="contact-input" placeholder="Name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="text-white small fw-bold mb-1">Email Adress</label>
                                    <input type="email" name="email" class="contact-input" placeholder="Email Adress" required>
                                </div>
                                <div class="mb-3">
                                    <label class="text-white small fw-bold mb-1">Subject</label>
                                    <input type="text" name="subject" class="contact-input" placeholder="Subject" required>
                                </div>
                                <div class="mb-4">
                                    <label class="text-white small fw-bold mb-1">Message</label>
                                    <textarea name="message" class="contact-input" rows="3" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn-send-message w-100">Send message</button>
                            </form>
                        </div>
                        <div class="col-lg-5 text-white ps-lg-5 mt-5 mt-lg-0 text-center text-lg-start">
                            <div class="text-center mb-5 d-none d-lg-block">
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
            <div class="row equal-gap-row">

                {{-- KOLOM 1 --}}
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('assets/logoputih.png') }}" alt="Logo" width="45" class="me-3">
                        <div class="footer-brand-title">INÍCIO STUDIO</div>
                    </div>
                    <p class="footer-desc">
                        <strong>INICIO Studio</strong> adalah sebuah creative agency yang berfokus pada desain brand.
                        Kami membantu bisnis baik yang baru memulai maupun yang sudah berjalan untuk membangun identitas
                        visual dan branding yang profesional, efektif, dan mudah dikenali.
                    </p>
                </div>

                {{-- KOLOM 2 --}}
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="align-with-text">
                        <p class="footer-desc">
                            <strong>INICIO Studio</strong> hadir sebagai solusi bagi mereka yang belum memahami dunia
                            branding atau tidak memiliki waktu untuk mengurus desain, namun ingin mengembangkan bisnis
                            yang terlihat lebih profesional dan memiliki citra kuat di mata pelanggan.
                        </p>
                    </div>
                </div>

                {{-- KOLOM 3 --}}
                <div class="col-12 col-lg-4">
                    <div class="align-with-text">
                        <ul class="footer-contact-list">
                            <li>
                                <i class="bi bi-envelope-fill"></i>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=iniciostudioid@gmail.com"
                                    target="_blank">inicio.studioid@gmail.com</a>
                            </li>
                            <li><i class="bi bi-telephone-fill"></i> 085103726662</li>
                            <li><i class="bi bi-instagram"></i> iniciostudio.id</li>
                            <li><i class="bi bi-linkedin"></i> Inicio Studio</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const socialBar = document.getElementById('social-bar');

            function handleScroll() {
                if (window.scrollY > 300) {
                    socialBar.classList.add('show-bar');
                } else {
                    socialBar.classList.remove('show-bar');
                }
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); 
        });
    </script>

    @stack('scripts')
    @yield('scripts')
</body>

</html>