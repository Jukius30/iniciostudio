@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ================= 1. GLOBAL SETTINGS & SCROLL FIX ================= */
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
        }

        .bg-main {
            background-color: #D0C1A7;
            width: 100%;
        }

        /* Reset padding khusus konten agar header lebar penuh */
        .ahpek-page-wrapper .container-fluid {
            padding: 0 !important;
            margin: 0 !important;
        }

        /* ================= 2. HERO HEADER (100vh SAMA DENGAN GWS) ================= */
        .ahpek-header {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), 
                              url("{{ asset('assets/totebag_mockup.png') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
        }

        .ahpek-header-title {
            font-size: clamp(3.5rem, 8vw, 6rem);
            font-weight: 800;
            letter-spacing: 0.02em;
            text-shadow: 2px 4px 12px rgba(0, 0, 0, 0.45);
        }

        /* ================= 3. SECTION: INTRO ================= */
        .ahpek-intro-section {
            padding: 100px 0 60px;
            text-align: center;
            background-color: #D0C1A7;
        }

        .ahpek-intro-pill {
            display: inline-flex;
            padding: 10px 24px;
            border-radius: 999px;
            background: #8A9165;
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        /* ================= 4. CORE LAYOUT (IDENTIK DENGAN GWS) ================= */
        .ahpek-main-container {
            max-width: 1100px;
            margin: 0 auto 100px;
            padding: 0 20px;
        }

        .flex-layout-wrapper {
            display: flex;
            align-items: center; /* Membuat Logo Berada di Tengah Vertikal */
            justify-content: space-between;
            gap: 40px;
        }

        .text-side {
            flex: 1.2;
            display: flex;
            flex-direction: column;
        }

        .logo-side {
            flex: 0.8;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Kotak About (Hijau Gelap) */
        .box-about {
            background-color: #394428; 
            color: white;
            padding: 50px 40px;
        }

        /* Kotak Target Market (Cokelat Muda / Krem) */
        .box-market {
            background-color: #E2D5BE;
            padding: 50px 40px;
            color: #394428;
        }

        .ahpek-logo-img {
            max-width: 320px;
            width: 100%;
            height: auto;
        }

        .ahpek-section-title {
            font-weight: 700; 
            font-size: 2.8rem; 
            margin-bottom: 15px;
        }

        .ahpek-section-p {
            text-align: justify; 
            line-height: 1.7;
            font-size: 1rem;
        }

        /* ================= 5. GALLERY SECTION ================= */
        .ahpek-gallery-grid {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .gallery-item img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            display: block;
        }

        /* ================= 6. NAVIGATION BUTTON ================= */
        .next-portfolio-wrapper {
            text-align: center;
            padding: 100px 0;
        }

        .btn-next-portfolio {
            display: inline-block;
            padding: 12px 50px;
            border: 2px solid #394428;
            border-radius: 15px;
            color: #394428;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.2rem;
            transition: 0.3s ease;
        }

        .btn-next-portfolio:hover {
            background-color: #394428;
            color: white;
            text-decoration: none;
            transform: translateY(-5px);
        }

        @media (max-width: 991px) {
            .flex-layout-wrapper { flex-direction: column; }
            .logo-side { order: -1; margin-bottom: 30px; }
            .ahpek-header { min-height: 60vh; }
        }
    </style>

    <div class="ahpek-page-wrapper">
        
        {{-- Section 1: Hero Header --}}
        <section class="ahpek-header">
            <h1 class="ahpek-header-title" data-aos="zoom-out">Ah Pek Kopitiam</h1>
        </section>

        {{-- Section 2: Intro --}}
        <section class="ahpek-intro-section">
            <div class="container" data-aos="fade-up">
                <div class="ahpek-intro-pill">Restaurant</div>
                <p class="ahpek-intro-text" style="max-width: 800px; margin: 0 auto;">
                    A collaboration that brings nostalgic warmth through exclusive merchandise, combining local Surabaya icons with modern aesthetic designs.
                </p>
            </div>
        </section>

        {{-- SECTION 3: CORE CONTENT (LAYOUT PERSIS GWS) --}}
        <section class="ahpek-main-container">
            <div class="flex-layout-wrapper">
                
                <div class="text-side">
                    <div class="box-about" data-aos="fade-right">
                        <h2 class="ahpek-section-title">About Company</h2>
                        <p class="ahpek-section-p">
                            Ah Pek Kopitiam adalah kedai kopi bergaya kopitiam modern yang menyajikan kopi, teh, roti bakar, dan makanan sederhana dalam suasana nyaman bernuansa tradisional, cocok untuk sarapan atau nongkrong santai dengan harga terjangkau.
                        </p>
                    </div>

                    <div class="box-market" data-aos="fade-right" data-aos-delay="200">
                        <h2 class="ahpek-section-title">Target Market</h2>
                        <p class="ahpek-section-p">
                            Kolaborasi ini menghadirkan 5 merchandise eksklusif yang menggabungkan nuansa hangat dan nostalgic khas Ah Pek Kopitiam dengan elemen visual ikonik kota Surabaya. Target pasarnya mencakup anak muda yang menyukai desain estetik, pelanggan setia Ah Pek, hingga wisatawan yang mencari oleh-oleh unik.
                        </p>
                    </div>
                </div>

                <div class="logo-side" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('assets/ahpek_logo_main.png') }}" class="ahpek-logo-img" alt="Ah Pek Logo">
                </div>

            </div>
        </section>

        {{-- Section 4: Galeri --}}
        <section class="ahpek-gallery-grid">
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('assets/ahpek_illustration.png') }}">
            </div>
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('assets/ahpek_tshirt.png') }}">
            </div>
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('assets/ahpek_all_merch.png') }}">
            </div>
        </section>

        {{-- SECTION 5: NAVIGATION --}}
        <section class="next-portfolio-wrapper">
            <a href="{{ url('/hutaraja-coffee-shop') }}" class="btn-next-portfolio" data-aos="fade-up">
                See next portfolio
            </a>
        </section>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ 
                once: true, 
                duration: 800 
            });
        });
    </script>
@endsection