@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ================= 1. GLOBAL SETTINGS & SCROLL FIX ================= */
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Hanya mengunci scroll horizontal */
            overflow-y: auto;   /* Memastikan scroll vertikal aktif */
            background-color: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
            height: auto;       /* Menghindari lock pada tinggi layar */
        }

        .gws-page-wrapper {
            background-color: #D0C1A7;
            width: 100%;
            position: relative;
        }

        /* Reset padding khusus konten agar header lebar penuh */
        .gws-page-wrapper .container-fluid {
            padding: 0 !important;
            margin: 0 !important;
        }

        /* ================= 2. HERO HEADER ================= */
        .gws-header {
            position: relative;
            width: 100%;
            min-height: 100vh; /* Menggunakan min-height agar tidak mengunci scroll */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                              url("{{ asset('assets/Macbook_Air_M2_Mockup_2.png') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
        }

        .gws-header-title {
            font-size: clamp(4rem, 10vw, 7rem);
            font-weight: 800;
            letter-spacing: 0.05em;
            text-shadow: 2px 4px 12px rgba(0, 0, 0, 0.45);
        }

        /* ================= 3. SECTION: INTRO ================= */
        .gws-intro-section {
            padding: 100px 0 60px;
            text-align: center;
            background-color: #D0C1A7;
        }

        .gws-intro-pill {
            display: inline-flex;
            padding: 10px 24px;
            border-radius: 999px;
            background: #8A9165;
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .gws-intro-text {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
        }

        /* ================= 4. CORE LAYOUT ================= */
        .gws-main-container {
            max-width: 1100px;
            margin: 0 auto 100px;
            padding: 0 20px;
        }

        .flex-layout-wrapper {
            display: flex;
            align-items: center; 
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

        .green-box-about {
            background-color: #394428; 
            color: white;
            padding: 50px 40px;
        }

        .brown-box-market {
            background-color: #E2D5BE;
            padding: 50px 40px;
            color: #394428;
        }

        .gws-logo-v-img {
            max-width: 320px;
            width: 100%;
            height: auto;
        }

        .social-icons-wrapper {
            margin-top: 20px;
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        
        .social-icons-wrapper i {
            font-size: 1.5rem;
            color: #394428;
            opacity: 0.7;
        }

        /* ================= 5. GALLERY ================= */
        .gws-gallery-grid {
            max-width: 1100px;
            margin: 60px auto 0;
            padding: 0 20px;
            display: grid;
            gap: 30px;
        }

        .gallery-item img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            display: block;
        }

        /* ================= 6. NEXT PORTFOLIO BUTTON ================= */
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
            transition: all 0.3s ease;
        }

        .btn-next-portfolio:hover {
            background-color: #394428;
            color: white;
            text-decoration: none;
            transform: translateY(-5px);
        }

        /* Responsive */
        @media (max-width: 991px) {
            .flex-layout-wrapper { flex-direction: column; }
            .logo-side { order: -1; margin-bottom: 30px; }
            .gws-header { min-height: 60vh; }
        }
    </style>

    <div class="gws-page-wrapper">
        
        {{-- Section 1: Hero Header --}}
        <section class="gws-header">
            <h1 class="gws-header-title" data-aos="zoom-out">GasWaraS</h1>
        </section>

        {{-- Section 2: Intro --}}
        <section class="gws-intro-section">
            <div class="container" data-aos="fade-up">
                <div class="gws-intro-pill">Design Agency</div>
                <p class="gws-intro-text">
                    This agency is particularly appealing to content creators as its primary target market by focusing on segments needed by content creators, such as editing, logos, mascots, or merchandise.
                </p>
            </div>
        </section>

        {{-- Section 4: CORE CONTENT --}}
        <section class="gws-main-container">
            <div class="flex-layout-wrapper">
                <div class="text-side">
                    <div class="green-box-about" data-aos="fade-right">
                        <h2 style="font-weight: 700; font-size: 2.5rem; margin-bottom: 15px;">About Company</h2>
                        <p style="text-align: justify; line-height: 1.7;">
                            Explore our collaboration with GasWaraS, a design agency that shares our passion for creative problem-solving and simplified design solutions.
                        </p>
                    </div>

                    <div class="brown-box-market" data-aos="fade-right" data-aos-delay="200">
                        <h2 style="font-weight: 700; font-size: 2.5rem; margin-bottom: 15px;">Target Market</h2>
                        <p style="text-align: justify; line-height: 1.7;">
                            Our mission is to empower content creators with professional-grade design. We ensure their visual identity reflects the quality of their work, helping them stand out and succeed.
                        </p>
                    </div>
                </div>

                <div class="logo-side" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('assets/LOGODESIGNAGENCY.png') }}" class="gws-logo-v-img" alt="GWS Logo">
                </div>
            </div>
        </section>

        {{-- Section 5: Gallery --}}
        <section class="gws-gallery-grid">
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('assets/teater.png') }}">
            </div>
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('assets/mockupoffice.png') }}">
            </div>
        </section>

        {{-- SECTION 6: NAVIGATION BUTTON --}}
        <section class="next-portfolio-wrapper">
            <a href="{{ url('/ah-pek-kopitiam') }}" class="btn-next-portfolio" data-aos="fade-up">
                See next portfolio
            </a>
        </section>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ 
                once: true, 
                duration: 800,
                disable: 'mobile' // Opsional: matikan AOS di mobile jika masih terasa berat
            });
        });
    </script>
@endsection