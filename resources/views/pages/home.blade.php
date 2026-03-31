@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Ikon FontAwesome untuk Expertise --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* ================= FIXED LAYOUT RESET ================= */
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            font-family: 'League Spartan', sans-serif;
            scroll-behavior: smooth;
        }

        .bg-main {
            background: #D0C1A7 !important;
            width: 100%;
        }

        /* ================= 1. SECTION: HERO HOME ================= */
        .brand-section-grid {
            display: grid;
            grid-template-columns: 20% 60% 20%;
            width: 100%;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #394428;
            overflow: hidden;
        }

        .hero-side-image-left,
        .hero-side-image-right {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
        }

        .hero-side-image-left {
            background-image: url("{{ asset('assets/pngasetwebsite.png') }}");
        }

        .hero-side-image-right {
            background-image: url("{{ asset('assets/camera-image.jpg') }}");
        }

        .brand-content-middle {
            background-color: #8A9165;
            display: flex;
            align-items: center;
            padding: 60px;
            color: white;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .brand-title-main {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 5px;
        }

        .brand-subtitle-main {
            font-size: clamp(1.5rem, 3vw, 2.5rem);
            font-weight: 400;
            margin-bottom: 30px;
        }

        .brand-description-text {
            font-size: 1.1rem;
            line-height: 1.7;
            text-align: justify;
        }

        .brand-logo-hero {
            max-width: 280px;
            width: 100%;
            height: auto;
        }

        .btn-hubungi {
            display: inline-block;
            margin-top: 40px;
            padding: 12px 40px;
            border: 2px solid white;
            border-radius: 15px;
            color: white;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.5rem;
            transition: 0.3s ease;
        }

        .btn-hubungi:hover {
            background-color: white;
            color: #8A9165;
            text-decoration: none;
        }

        /* ================= SEE MORE INDICATOR ================= */
        .see-more-container {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: white;
            z-index: 10;
        }

        .see-more-icon {
            font-size: 1.5rem;
            animation: bounce-v 2s infinite;
        }

        @keyframes bounce-v {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-8px); }
            60% { transform: translateY(-4px); }
        }

        /* ================= 2. PROMO DISKON ================= */
        .promo-section {
            padding: 100px 0;
            background: #D0C1A7;
        }

        .promo-wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 550px;
        }

        .promo-circle-bg {
            width: 500px;
            height: 500px;
            background: #E2D5BE;
            border-radius: 50%;
            position: absolute;
            z-index: 1;
        }

        .promo-badge {
            background: #8A9165;
            color: white;
            padding: 45px 35px;
            border-radius: 30px;
            width: 340px;
            position: absolute;
            left: 10%;
            z-index: 4;
        }

        .promo-portrait {
            position: relative;
            z-index: 3;
            max-height: 550px;
            margin-left: 150px;
        }

        /* ================= 3. OUR CORE EXPERTISE (REVEAL ANIMATION) ================= */
        .expertise-section {
            background-color: #D0C1A7;
            padding: 100px 0;
        }

        .expertise-heading {
            font-size: 48px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 80px;
            color: #394428;
        }

        .expertise-grid-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .expertise-card-reveal {
            background-color: #394428;
            border-radius: 25px;
            width: 320px;
            height: 380px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .expertise-card-reveal:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .card-content-wrapper {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .front-reveal {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            transform: translateY(0);
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            z-index: 2;
            padding: 40px;
            background-color: #394428;
        }

        .expertise-card-reveal:hover .front-reveal {
            transform: translateY(-100%);
        }

        .icon-box-reveal {
            font-size: 4rem;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .front-reveal h3 {
            color: white;
            font-size: 1.6rem;
            font-weight: 700;
            text-align: center;
            margin: 0;
        }

        .back-reveal {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            transform: translateY(100%);
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            z-index: 1;
            padding: 35px;
            text-align: center;
            background-color: #E2D5BE; /* Warna krem saat terbuka */
        }

        .expertise-card-reveal:hover .back-reveal {
            transform: translateY(0);
        }

        .back-reveal h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #394428;
            margin-bottom: 15px;
        }

        .back-reveal p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #394428;
            text-align: justify;
        }

        /* ================= 4. WHAT WE SOLVE ================= */
        .what-solve-section-full {
            position: relative;
            min-height: 800px;
            display: flex;
            align-items: center;
            clip-path: inset(0 0 0 0);
            z-index: 5;
        }

        .fixed-bg-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('assets/kantor_office.png') }}");
            background-size: cover;
            background-position: center;
            z-index: -1;
            pointer-events: none;
        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.15);
            z-index: 1;
        }

        .what-solve-box-overlay {
            background-color: #4a5b34;
            color: white;
            padding: 80px 60px;
            text-align: center;
            position: relative;
            z-index: 2;
            min-height: 800px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 0 80px rgba(0, 0, 0, 0.3);
        }

        .btn-solve-link {
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            padding: 14px 45px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-solve-link:hover {
            background: white;
            color: #394428;
            text-decoration: none;
        }

        /* ================= 5. SECTION: VIDEO DISPLAY ================= */
        .video-section {
            background-color: #D0C1A7;
            padding: 120px 0;
            position: relative;
            z-index: 10;
        }

        .video-frame-container {
            position: relative;
            max-width: 1000px;
            width: 90%;
            margin: 0 auto;
            border: 15px solid #fff;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background-color: #394428;
            transition: transform 0.4s ease;
        }

        .video-aspect-ratio {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
        }

        .video-background-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 1;
            opacity: 0.8;
        }

        .video-content-link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            z-index: 5;
        }

        @media (max-width: 1200px) {
            .brand-section-grid { grid-template-columns: 1fr; }
            .hero-side-image-left, .hero-side-image-right, .see-more-container { display: none; }
            .brand-content-middle { padding: 40px 20px; text-align: center; }
        }
    </style>

    <div class="bg-main">

        {{-- 1. SECTION: HERO --}}
        <section class="brand-section-grid">
            <div class="hero-side-image-left" data-aos="fade-right"></div>
            <div class="brand-content-middle">
                <div class="container-fluid px-0">
                    <div class="row align-items-center g-0">
                        <div class="col-lg-6" data-aos="fade-up">
                            <h1 class="brand-title-main">Inicio Studio</h1>
                            <h2 class="brand-subtitle-main">Branding Made Simple</h2>
                            <div class="brand-description-text">
                                <p><strong>INICIO Studio</strong> membantu bisnis membangun identitas visual profesional secara sederhana dan efektif.</p>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn-hubungi">Hubungi Kami!</a>
                        </div>
                        <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/INICIOLOGOputih.png') }}" class="brand-logo-hero" alt="Logo">
                        </div>
                    </div>
                </div>
                <a href="#promo-section" class="see-more-container">
                    <span style="font-size: 0.7rem; letter-spacing: 2px;">See More</span>
                    <i class="bi bi-chevron-down see-more-icon"></i>
                </a>
            </div>
            <div class="hero-side-image-right" data-aos="fade-left"></div>
        </section>

        {{-- 2. SECTION: PROMO --}}
        <section class="promo-section" id="promo-section">
            <div class="container">
                <div class="promo-wrapper">
                    <div class="promo-circle-bg"></div>
                    <div class="promo-badge" data-aos="fade-right">
                        <h3 class="fw-bold">DISKON</h3>
                        <div style="font-size: 7rem; font-weight: 900;">20%</div>
                        <p>Setiap pembelian paket bundling melalui website ini!</p>
                    </div>
                    <img src="{{ asset('assets/kenma.png') }}" class="promo-portrait">
                </div>
            </div>
        </section>

        {{-- 3. SECTION: EXPERTISE (REVEAL ANIMATION) --}}
        <section class="expertise-section">
            <div class="container">
                <h2 class="expertise-heading" data-aos="fade-up">Our Core Expertise</h2>

                {{-- Baris Atas --}}
                <div class="expertise-grid-container mb-4">
                    <div class="expertise-card-reveal" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-content-wrapper">
                            <div class="front-reveal">
                                <div class="icon-box-reveal"><i class="fas fa-paint-brush"></i></div>
                                <h3>Visual Branding</h3>
                            </div>
                            <div class="back-reveal">
                                <h3>Visual Branding</h3>
                                <p>Membangun identitas visual melalui desain logo, palet warna, tipografi, dan tone visual yang strategis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="expertise-card-reveal" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-content-wrapper">
                            <div class="front-reveal">
                                <div class="icon-box-reveal"><i class="fas fa-camera"></i></div>
                                <h3>Photography</h3>
                            </div>
                            <div class="back-reveal">
                                <h3>Photography</h3>
                                <p>Alat yang ampuh untuk menangkap esensi brand, produk, atau pengalaman bisnis Anda.</p>
                            </div>
                        </div>
                    </div>

                    <div class="expertise-card-reveal" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-content-wrapper">
                            <div class="front-reveal">
                                <div class="icon-box-reveal"><i class="fas fa-comments"></i></div>
                                <h3>Consulting</h3>
                            </div>
                            <div class="back-reveal">
                                <h3>Consulting</h3>
                                <p>Layanan konsultasi untuk membantu bisnis memahami tantangan brand dan mengoptimalkan komunikasi.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Baris Bawah --}}
                <div class="expertise-grid-container">
                    <div class="expertise-card-reveal" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-content-wrapper">
                            <div class="front-reveal">
                                <div class="icon-box-reveal"><i class="fab fa-instagram"></i></div>
                                <h3>Social Media</h3>
                            </div>
                            <div class="back-reveal">
                                <h3>Social Media</h3>
                                <p>Dirancang untuk membangun kehadiran brand, meningkatkan engagement, dan merawat komunitas audiens.</p>
                            </div>
                        </div>
                    </div>

                    <div class="expertise-card-reveal" data-aos="fade-up" data-aos-delay="500">
                        <div class="card-content-wrapper">
                            <div class="front-reveal">
                                <div class="icon-box-reveal"><i class="fas fa-bullhorn"></i></div>
                                <h3>Brand Campaign</h3>
                            </div>
                            <div class="back-reveal">
                                <h3>Brand Campaign</h3>
                                <p>Menghidupkan pesan brand melalui storytelling yang menarik dan komunikasi strategis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 4. SECTION: WHAT WE SOLVE --}}
        <section class="what-solve-section-full">
            <div class="fixed-bg-container"></div>
            <div class="background-overlay"></div>
            <div class="container-fluid px-0">
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-4 col-md-10">
                        <div class="what-solve-box-overlay">
                            <div data-aos="fade-up" data-aos-duration="1500">
                                <h2 class="fw-bold mb-4" style="font-size: 2.8rem;">What we solve</h2>
                                <p class="mb-5" style="font-size: 1rem; line-height: 1.8; text-align: justify;">
                                    <strong>INICIO</strong> hadir membantu pebisnis membangun brand identity yang jelas dan konsisten agar tampil profesional di pasar.
                                </p>
                                <a href="/services" class="btn-solve-link">Look up our services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 5. SECTION: VIDEO DISPLAY --}}
        <section class="video-section">
            <div class="container">
                <div class="video-frame-container" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="video-aspect-ratio">
                        <div class="video-background-content">
                            <img src="{{ asset('assets/INICIOLOGOputih.png') }}" style="width:100px; filter: brightness(0) invert(1);" alt="Logo">
                            <h4 style="color:white; font-weight:700; margin-top:10px;">INÍCIO STUDIO</h4>
                        </div>
                        <a href="https://www.youtube.com/watch?v=mG5YS757YCI" target="_blank" class="video-content-link">
                            <div style="background: #6B59F2; border-radius: 15px; padding: 20px;">
                                <svg width="40" height="40" viewBox="0 0 80 80" fill="none">
                                    <path d="M55 40L32.5 52.9904L32.5 27.0096L55 40Z" fill="white" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: false,
                mirror: true
            });
        });
    </script>
@endsection