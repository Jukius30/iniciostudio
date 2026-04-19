@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ================= 1. GLOBAL SETTINGS ================= */
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
        }

        /* ================= 2. HERO HEADER ================= */
        .isyana-header {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url("{{ asset('assets/CD-Case-Mockup.png') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
        }

        .isyana-header-title {
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 800;
            letter-spacing: 0.05em;
            text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.5);
            text-transform: uppercase;
        }

        /* ================= 3. SEAMLESS GALLERY ================= */
        .isyana-seamless-gallery {
            background-color: #D0C1A7;
            /* Warna coklat muda sesuai background foto */
            padding: 60px 0;
            width: 100%;
        }

        .gallery-container-custom {
            max-width: 1200px;
            /* Menjaga agar konten tidak terlalu lebar ke pinggir */
            margin: 0 auto;
        }

        .seamless-item {
            height: auto;
            /* Biarkan tinggi mengikuti proporsi gambar asli */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .seamless-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /* Agar gambar tidak terpotong (crop) */
            transition: transform 0.5s ease;
        }

        .seamless-item:hover img {
            transform: scale(1.1);
        }

        /* ================= 4. SECTION: INTRO ================= */
        .isyana-intro-section {
            padding: 80px 0 60px;
            text-align: center;
        }

        .isyana-intro-pill {
            display: inline-flex;
            padding: 10px 28px;
            border-radius: 999px;
            background: #394428;
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        /* ================= 5. CORE CONTENT ================= */
        .isyana-main-container {
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

        .isyana-logo-img {
            max-width: 320px;
            width: 100%;
            height: auto;
        }

        /* ================= 6. NAVIGATION ================= */
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
            .flex-layout-wrapper {
                flex-direction: column;
            }

            .isyana-header {
                min-height: 60vh;
            }

            .seamless-item {
                height: 320px;
            }
        }
    </style>

    <div class="isyana-page-wrapper">

        {{-- Section 1: Hero --}}
        <section class="isyana-header">
            <h1 class="isyana-header-title" data-aos="zoom-out">Isyana Sarasvati</h1>
        </section>

        {{-- Section 3: Intro --}}
        <section class="isyana-intro-section">
            <div class="container" data-aos="fade-up">
            </div>
        </section>

        {{-- Section 4: About & Market --}}
        <section class="isyana-main-container">
            <div class="flex-layout-wrapper">
                <div class="text-side">
                    <div class="box-about" data-aos="fade-right" style="border-radius: 25px;">
                        <h2 style="font-weight:700; font-size:1.5rem; margin-bottom:15px;">Isyana Sarasvati - Ragu Semesta
                        </h2>
                        <h2 style="font-weight:700; font-size:2.8rem; margin-bottom:15px;">Ragu Semesta</h2>
                        <p style="text-align:justify; line-height:1.7;">
                            Di sini, kami diberi kesempatan untuk menganalisis genre, suasana, gaya, dan emosi lagu-lagu
                            karya Isyana Sarasvati. Proyek ini mencakup identifikasi genre, analisis bagaimana musik Isyana
                            sesuai dengan genre tersebut, contoh lagu tertentu, deskripsi suasana lagu tersebut, dan
                            lagu-lagu terbaik karya Isyana Sarasvati. Kita kemudian diberi tugas untuk menghasilkan album
                            dari salah satu lagu tersebut.
                        </p>
                    </div>
                </div>

                <div class="logo-side" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('assets/Coverblkng.png') }}" class="isyana-logo-img" alt="Isyana Logo">
                </div>
            </div>
        </section>

        {{-- Section 5: Gallery --}}
        <section class="isyana-seamless-gallery">
            <div class="container-fluid gallery-container-custom">
                <div class="row g-4 justify-content-center align-items-center">
                    {{-- Gambar 1: Mockup Box (Kiri) --}}
                    <div class="col-md-5 col-10 seamless-item" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('assets/CD-Case.png') }}" alt="Isyana Ragu Semesta Box">
                    </div>

                    {{-- Gambar 2: Biografi & Foto Isyana (Kanan) --}}
                    <div class="col-md-5 col-10 seamless-item" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{ asset('assets/4.png') }}" alt="Isyana Biography">
                    </div>
                </div>
            </div>
        </section>
        {{-- Section 7: Navigation --}}
        <div style="text-align:center; padding: 100px 0;">
            <a href="{{ url('/lus-adventures-de-l-art-deco') }}" class="btn-next-portfolio" data-aos="fade-up">
                Lihat portofolio berikutnya
            </a>
        </div>

        {{-- Tombol Kembali --}}
        <div style="text-align:center; padding: 30px 0 10px;">
            <a href="{{ url('/portfolio') }}" class="btn-next-portfolio" data-aos="fade-up">
            <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

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
