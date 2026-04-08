@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ================= 1. GLOBAL SETTINGS ================= */
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
        }

        /* ================= 2. HERO HEADER ================= */
        .hutaraja-header {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                              url("{{ asset('assets/Free_Pouch_Mockup_1.png') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
        }

        .hutaraja-header-title {
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 800;
            letter-spacing: 0.05em;
            text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.5);
            text-transform: uppercase;
        }

        /* ================= 3. SEAMLESS GALLERY (4 IMAGES) ================= */
        .hutaraja-seamless-gallery {
            width: 100%;
            overflow: hidden;
            margin-top: 80px; 
            margin-bottom: 40px;
        }

        .seamless-item {
            height: 450px; 
            overflow: hidden;
            padding: 0;
        }

        .seamless-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .seamless-item:hover img {
            transform: scale(1.1);
        }

        /* ================= 4. SECTION: INTRO ================= */
        .hutaraja-intro-section {
            padding: 80px 0 60px;
            text-align: center;
        }

        .hutaraja-intro-pill {
            display: inline-flex;
            padding: 10px 28px;
            border-radius: 999px;
            background: #394428; /* Hijau Khas Inicio */
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        /* ================= 5. CORE CONTENT (ABOUT & MARKET) ================= */
        .hutaraja-main-container {
            max-width: 1100px;
            margin: 0 auto 100px;
            padding: 0 20px;
        }

        .flex-layout-wrapper {
            display: flex;
            align-items: stretch;
            justify-content: space-between;
            gap: 40px;
        }

        .text-side {
            flex: 1.2;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .logo-side {
            flex: 0.8;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box-about {
            background-color: #394428; 
            color: white;
            padding: 50px 40px;
            flex: 1;
        }

        .box-market {
            background-color: #E2D5BE;
            padding: 50px 40px;
            color: #394428;
            flex: 1;
        }

        .hutaraja-logo-img {
            max-width: 320px;
            width: 100%;
            height: auto;
        }

        /* ================= 6. SPLIT GALLERY (2 IMAGES SEJAJAR) ================= */
        .hutaraja-split-gallery {
            max-width: 1100px;
            margin: 0 auto 80px;
            padding: 0 20px;
        }

        .img-wrapper {
            width: 100%;
            height: 480px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0,0,0,0.15);
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ================= 7. FULL GALLERY ================= */
        .full-gallery-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .gallery-full-img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* ================= 8. NAVIGATION ================= */
        .btn-next-portfolio {
            display: inline-block;
            padding: 14px 60px;
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
            transform: translateY(-5px);
        }

        @media (max-width: 991px) {
            .flex-layout-wrapper { flex-direction: column; }
            .hutaraja-header { min-height: 60vh; }
            .seamless-item, .img-wrapper { height: 320px; }
        }
    </style>

    <div class="hutaraja-page-wrapper">
        
        {{-- Section 1: Hero --}}
        <section class="hutaraja-header">
            <h1 class="hutaraja-header-title" data-aos="zoom-out">Hutaraja Coffee</h1>
        </section>

        {{-- Section 3: Intro --}}
        <section class="hutaraja-intro-section">
            <div class="container" data-aos="fade-up">
                <div class="hutaraja-intro-pill">Coffee Shop</div>
            </div>
        </section>

        {{-- Section 4: About & Market --}}
        <section class="hutaraja-main-container">
            <div class="flex-layout-wrapper">
                <div class="text-side">
                    <div class="box-about" data-aos="fade-right">
                        <h2 style="font-weight:700; font-size:2.8rem; margin-bottom:15px;">About Company</h2>
                        <p style="text-align:justify; line-height:1.7;">
                            Hutaraja Coffee adalah destinasi bagi para pecinta kopi yang mencari keaslian biji kopi pilihan dari wilayah Hutaraja. Dengan fokus pada kualitas *roasting* dan penyajian yang presisi, kami menghadirkan cita rasa nusantara di setiap cangkirnya.
                        </p>
                    </div>

                    <div class="box-market" data-aos="fade-right" data-aos-delay="200">
                        <h2 style="font-weight:700; font-size:2.8rem; margin-bottom:15px;">Target Market</h2>
                        <p style="text-align:justify; line-height:1.7;">
                            Target audiens kami adalah para profesional muda, komunitas kreatif, dan penikmat kopi spesialiti yang menghargai cerita di balik setiap seduhan kopi dan mencari ruang yang inspiratif untuk berkolaborasi.
                        </p>
                    </div>
                </div>

                <div class="logo-side" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('assets/Free_coffee_Cup_Mockup_1.png') }}" class="hutaraja-logo-img" alt="Hutaraja Logo">
                </div>
            </div>
        </section>

        {{-- Section 5: Split Gallery 2 Images --}}
        <section class="hutaraja-seamless-gallery">
            <div class="row g-0">
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/Free_Coffee_Cup_Mockup_3.png') }}" alt="Merch 1">
                </div>
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/Free_Pouch_Mockup_1.png') }}" alt="Merch 2">
                </div>
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/Free_Pouch_Mockup_3.png') }}" alt="Merch 3">
                </div>
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/Free_coffee_Cup_Mockup_1.png') }}" alt="Merch 3">
                </div>
            </div>
        </section>

        {{-- Section 7: Navigation --}}
        <div style="text-align:center; padding: 100px 0;">
            <a href="{{ url('/isyana-sarasvati') }}" class="btn-next-portfolio" data-aos="fade-up">
                See next portfolio
            </a>
        </div>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ once: true, duration: 800 });
        });
    </script>
@endsection