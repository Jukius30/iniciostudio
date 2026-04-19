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
        .adventure-header {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url("{{ asset('assets/cgcoverRRR.png') }}");
            background-size: cover;
            background-position: top-center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
        }

        .adventure-header-title {
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 800;
            letter-spacing: 0.05em;
            text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.5);
            text-transform: uppercase;
        }

        /* ================= 3. SEAMLESS GALLERY ================= */
        .adventure-seamless-gallery {
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
        .adventure-intro-section {
            padding: 80px 0 60px;
            text-align: center;
        }

        .adventure-intro-pill {
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
        .adventure-main-container {
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

        .adventure-logo-img {
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

            .adventure-header {
                min-height: 60vh;
            }

            .seamless-item {
                height: 320px;
            }
        }
    </style>

    <div class="adventure-page-wrapper">

        {{-- Section 1: Hero --}}
        <section class="adventure-header">
            <h1 class="adventure-header-title" data-aos="zoom-out">Les Aventures De L'Art Deco</h1>
        </section>

        {{-- Section 3: Intro --}}
        <section class="adventure-intro-section">
            <div class="container" data-aos="fade-up">
            </div>
        </section>

        {{-- Section 4: About & Market --}}
        <section class="adventure-main-container">
            <div class="flex-layout-wrapper">
                <div class="text-side">
                    <div class="box-about" data-aos="fade-right" style="border-radius: 15px;">
                        <h2 style="font-weight:700; font-size:1.5rem; margin-bottom:15px;">Les Aventures De L'Art Deco</h2>
                        <h2 style="font-weight:700; font-size:2.8rem; margin-bottom:15px;">Tentang Picture Book ini</h2>
                        <p style="text-align:justify; line-height:1.7;">
                            Tugas kuliah untuk membuat buku bergambar berdasarkan gaya seni visual tertentu. Buku bergambar
                            ini didasarkan pada gaya Art Decoratif Prancis yang pertama kali muncul di Paris pada tahun
                            1910-an. Dalam buku ini, tokoh utamanya dipindahkan ke periode waktu ketika gaya seni visual
                            tertentu ini mulai muncul. Tokoh utamanya adalah seorang mahasiswi muda bernama "Alice" yang
                            kesulitan mengerjakan tugas kuliahnya di bidang seni. Pada malam hari dalam perjalanan pulang,
                            ia menemukan sebuah bangunan tua. Karena penasaran, ia memasuki bangunan tersebut, dan tiba-tiba
                            ia dipindahkan kembali ke tahun 1910-an.
                        </p>

                    </div>
                </div>

                <div class="logo-side" data-aos="zoom-in" data-aos-delay="300">
                    <div class="hover-image-wrap">
                        <img src="{{ asset('assets/cgcoverRtr.png') }}" class="adventure-logo-img img-default" alt="Adventure Logo">
                        <img src="{{ asset('assets/cgcharacterdesign.jpg') }}" class="adventure-logo-img img-hover" alt="Adventure Logo Hover">
                    </div>
                </div>

                <style>
                    .hover-image-wrap {
                        display: grid;
                        place-items: center;
                        width: min(320px, 100%);
                        margin: 0 auto;
                    }

                    .hover-image-wrap .adventure-logo-img {
                        grid-area: 1 / 1;
                        width: 100%;
                        height: auto;
                        object-fit: contain;
                        display: block;
                        transition: opacity 0.45s ease, transform 0.45s ease;
                        will-change: opacity, transform;
                        backface-visibility: hidden;
                    }

                    .hover-image-wrap .img-hover {
                        opacity: 0;
                    }

                    .hover-image-wrap:hover .img-hover {
                        opacity: 1;
                        transform: scale(1.02);
                    }

                    .hover-image-wrap:hover .img-default {
                        opacity: 0;
                        transform: scale(1.02);
                    }
                </style>
            </div>
        </section>
        {{-- Section 7: Navigation --}}
        <div style="text-align:center; padding: 100px 0;">
            <a href="{{ url('/cookie-up-your-day') }}" class="btn-next-portfolio" data-aos="fade-up">
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
