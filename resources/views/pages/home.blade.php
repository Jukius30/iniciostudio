@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* ================= GLOBAL SETTINGS ================= */
        body {
            background: #D0C1A7 !important;
            overflow-x: hidden;
            font-family: 'League Spartan', sans-serif;
        }

        .bg-main {
            background: #D0C1A7;
        }

        .full-bleed {
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }

        /* ================= 1. SECTION: INICIO STUDIO ================= */
        .brand-section {
            background-color: #8A9165;
            color: white;
            padding: 100px 0;
            z-index: 10;
        }

        .brand-title-main {
            font-weight: 700;
            font-size: 3.5rem;
            line-height: 1.1;
        }

        .brand-subtitle-main {
            font-weight: 500;
            font-size: 2.2rem;
            margin-bottom: 3rem;
        }

        .brand-description-left {
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 480px;
            text-align: justify;
        }

        .brand-description-right {
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 400px;
            margin: 0 auto;
            text-align: right;
        }

        .brand-logo-img {
            max-width: 250px;
            height: auto;
            filter: brightness(0) invert(1);
            margin-bottom: 2rem;
        }

        .btn-hubungi {
            background-color: transparent;
            border: 2px solid #fff;
            color: white;
            padding: 12px 40px;
            border-radius: 15px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 4rem;
            transition: 0.3s;
        }

        .btn-hubungi:hover {
            background-color: white;
            color: #8A9165;
            text-decoration: none;
        }

        /* ================= 2. SECTION: PROMO DISKON ================= */
        .promo-section {
            padding: 100px 0;
            position: relative;
            z-index: 10;
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

        /* ================= 3. SECTION: OUR CORE EXPERTISE ================= */
        .expertise-section {
            background-color: #D0C1A7;
            padding: 100px 0;
            position: relative;
            z-index: 10;
        }

        .expertise-heading {
            font-size: 48px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 80px;
            color: #394428;
        }

        .expertise-card {
            background-color: #948f74;
            border-radius: 25px;
            padding: 50px 35px;
            text-align: center;
            color: #fff;
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            cursor: pointer;
        }

        .expertise-card h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .expertise-card p {
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 0;
            opacity: 0.95;
        }

        .expertise-card:hover {
            background-color: #394428 !important;
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        /* ================= 4. SECTION: WHAT WE SOLVE (FIXED BG) ================= */
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

        /* ================= 5. SECTION: VIDEO DISPLAY (NEW) ================= */
        .video-section {
            background-color: #D0C1A7; /* Warna background foto ke-2 */
            padding: 120px 0;
            position: relative;
            z-index: 10;
        }

        .video-frame-container {
            position: relative;
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            border: 12px solid #fff; /* Bingkai putih tebal sesuai gambar */
            border-radius: 15px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background-color: #394428; /* Warna hijau gelap di dalam bingkai */
            transition: transform 0.4s ease;
        }

        .video-frame-container:hover {
            transform: scale(1.02);
        }

        .video-aspect-ratio {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
        }

        .video-content-link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .video-overlay-text {
            text-align: center;
            z-index: 2;
        }

        .video-inner-logo {
            width: 100px;
            height: auto;
            margin-bottom: 15px;
            filter: brightness(0) invert(1);
        }

        .video-inner-title {
            color: white;
            font-weight: 700;
            font-size: 2.5rem;
            letter-spacing: 0.1em;
            margin: 0;
        }

        .video-play-btn-wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 3;
            transition: 0.3s ease;
        }

        .video-content-link:hover .video-play-btn-wrapper {
            transform: translate(-50%, -50%) scale(1.1);
        }

        @media (max-width: 991px) {
            .brand-title-main { font-size: 2.5rem; }
            .promo-badge { position: static; width: 100%; margin-left: 0; margin-bottom: 20px; }
            .promo-portrait { margin-left: 0; max-height: 350px; }
            .expertise-heading { font-size: 36px; }
            .video-inner-title { font-size: 1.5rem; }
            .video-inner-logo { width: 70px; }
            .video-frame-container { border-width: 8px; }
        }
    </style>

    <div class="bg-main">

        {{-- 1. SECTION: INICIO STUDIO --}}
        <section class="brand-section full-bleed">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="brand-title-main">Inicio Studio</h1>
                        <h2 class="brand-subtitle-main">Branding Made Simple</h2>
                        <div class="brand-description-left">
                            <p><strong>INICIO Studio</strong> adalah sebuah creative agency yang berfokus pada desain brand. Kami membantu bisnis baik yang baru memulai maupun yang sudah berjalan untuk membangun identitas visual dan branding yang profesional, efektif, dan mudah dikenali.</p>
                        </div>
                        <a href="/contact" class="btn-hubungi">Hubungi Kami!</a>
                    </div>
                    <div class="col-lg-6 text-center mt-5 mt-lg-0">
                        <img src="{{ asset('assets/INICIOLOGOputih.png') }}" class="brand-logo-img" alt="Logo">
                        <div class="brand-description-right">
                            <p><strong>INICIO Studio</strong> hadir sebagai solusi bagi mereka yang belum memahami dunia branding atau tidak memiliki waktu untuk mengurus desain, namun ingin mengembangkan bisnis yang terlihat lebih profesional dan memiliki citra kuat di mata pelanggan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 2. SECTION: PROMO DISKON --}}
        <section class="promo-section full-bleed">
            <div class="container">
                <div class="promo-wrapper">
                    <div class="promo-circle-bg"></div>
                    <div class="promo-badge" data-aos="fade-right" data-aos-duration="1200">
                        <h3 class="fw-bold">DISKON</h3>
                        <div style="font-size: 7rem; font-weight: 900;">20%</div>
                        <p>Setiap pembelian paket bundling melalui website ini!</p>
                    </div>
                    <img src="{{ asset('assets/kenma.png') }}" class="promo-portrait">
                </div>
            </div>
        </section>

        {{-- 3. SECTION: OUR CORE EXPERTISE --}}
        <section class="expertise-section">
            <div class="container">
                <h2 class="expertise-heading">Our Core Expertise</h2>
                <div class="row gx-4 gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="expertise-card">
                            <h3>Social Media Content</h3>
                            <p>Designed to build brand presence, grow engagement, and nurture audience communities across platforms.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="expertise-card">
                            <h3>Brand Campaign</h3>
                            <p>Brings a brand's message to life through compelling storytelling and strategic communication.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="expertise-card">
                            <h3>Consulting</h3>
                            <p>Our consulting services provide strategic guidance to help businesses understand their brand challenges, clarify positioning, and optimize communication efforts.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-4 gy-4 justify-content-center mt-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="expertise-card">
                            <h3>Photography</h3>
                            <p>Powerful tool for capturing the essence of a brand, product, or experience through high-quality visuals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="expertise-card">
                            <h3>Visual Branding</h3>
                            <p>The process of crafting the visual identity of a brand through strategic design elements such as logo, color palettes, typography, and icon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 4. SECTION: WHAT WE SOLVE --}}
        <section class="what-solve-section-full full-bleed">
            <div class="fixed-bg-container"></div>
            <div class="background-overlay"></div>
            <div class="container-fluid px-0">
                <div class="row g-0 justify-content-center align-items-stretch">
                    <div class="col-lg-4 d-none d-lg-block"></div>
                    <div class="col-lg-4 col-md-10">
                        <div class="what-solve-box-overlay">
                            <div data-aos="fade-up" data-aos-duration="1500">
                                <h2 class="fw-bold mb-4" style="font-size: 2.8rem;">What we solve</h2>
                                <p class="mb-5" style="font-size: 1rem; line-height: 1.8; text-align: justify;">
                                    <strong>INICIO</strong> hadir untuk membantu pebisnis startup membangun brand identity yang jelas dan konsisten. Kami menyederhanakan proses branding dengan panduan desain strategis yang terukur.
                                </p>
                                <a href="/services" class="btn-solve-link">Look up our services</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block"></div>
                </div>
            </div>
        </section>

        {{-- 5. SECTION: VIDEO DISPLAY --}}
        <section class="video-section full-bleed">
            <div class="container">
                <div class="video-frame-container" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="video-aspect-ratio">
                        <a href="https://www.youtube.com/watch?v=mG5YS757YCI" target="_blank" class="video-content-link">
                            <div class="video-play-btn-wrapper">
                                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="80" height="80" rx="15" fill="#6B59F2"/>
                                    <path d="M55 40L32.5 52.9904L32.5 27.0096L55 40Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="video-overlay-text">
                                <img src="{{ asset('assets/INICIOLOGOputih.png') }}" class="video-inner-logo" alt="Logo">
                                <h4 class="video-inner-title">INÍCIO STUDIO</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false,
            mirror: true
        });
    </script>
@endsection