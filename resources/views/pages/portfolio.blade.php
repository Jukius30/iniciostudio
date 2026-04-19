@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* ================= GLOBAL SETTINGS ================= */
        body {
            background: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .bg-main {
            background: #D0C1A7;
            width: 100%;
        }

        /* ========== HERO PORTFOLIO (UKURAN SAMA DENGAN ABOUT) ========== */
        .portfolio-hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            /* Mengikuti tinggi page About */
            min-height: 500px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
            /* Memasukkan background image langsung di sini agar bisa menggunakan overlay gradient */
            background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),
                url("{{ asset('assets/shirt.png') }}");
            background-size: cover;
            background-position: center;
        }

        .portfolio-hero-content {
            z-index: 2;
            width: 90%;
            max-width: 850px;
        }

        .portfolio-hero-title {
            /* Menggunakan clamp agar ukuran font adaptif seperti di page About */
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 800;
            margin-bottom: 24px;
            text-shadow: 0 4px 14px rgba(0, 0, 0, 0.45);
            letter-spacing: 0.05em;
        }

        .portfolio-hero-subtitle {
            font-size: clamp(1rem, 2vw, 1.25rem);
            line-height: 1.6;
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }

        /* ========== INTRO TEXT / PERIODE ========== */
        .portfolio-intro {
            background: #D0C1A7;
            text-align: center;
            padding: 100px 0 60px;
            /* Padding lebih besar agar transisi hero ke grid lebih lega */
            color: #333333;
        }

        .portfolio-intro-text {
            font-size: 1.1rem;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .portfolio-period {
            display: inline-block;
            padding: 10px 30px;
            border-radius: 999px;
            background: #8A9165;
            color: #ffffff;
            font-weight: 700;
            font-size: 1rem;
            letter-spacing: 0.04em;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* ========== GRID PORTFOLIO (3x2 Layout) ========== */
        .portfolio-grid-wrapper {
            background: #D0C1A7;
            padding-bottom: 120px;
        }

        .portfolio-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: #C4C4C4;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s ease;
            aspect-ratio: 4 / 3;
        }

        .portfolio-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease;
        }

        .portfolio-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent 70%);
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 25px;
            color: #ffffff;
            text-align: center;
            transition: background 0.3s ease;
        }

        .portfolio-card-title {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .portfolio-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .portfolio-card:hover .portfolio-card-img {
            transform: scale(1.08);
        }

        .portfolio-card:hover .portfolio-card-overlay {
            background: linear-gradient(to top, rgba(57, 68, 40, 0.95), transparent 90%);
        }

        /* Responsive */
        @media (max-width: 991.98px) {
            .portfolio-hero-section {
                height: 70vh;
            }
        }

        @media (max-width: 767.98px) {
            .portfolio-hero-section {
                height: 60vh;
            }

            .portfolio-intro {
                padding: 60px 20px;
            }

            .portfolio-card-title {
                font-size: 15px;
            }
        }
    </style>

    <div class="bg-main">

        {{-- ================= HERO (100vh Sesuai About) ================= --}}
        <section class="portfolio-hero-section" data-aos="fade-in">
            <div class="portfolio-hero-content">
                <h1 class="portfolio-hero-title" data-aos="fade-up" data-aos-duration="1000">Portofolio</h1>
                <p class="portfolio-hero-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    Perjalanan kami telah mempertemukan kami dengan merek-merek terkemuka di industri mereka. Setiap
                    kolaborasi telah memperkuat pemahaman kami tentang strategi khusus yang dibutuhkan untuk meningkatkan
                    setiap jenis bisnis.
                </p>
            </div>
        </section>

        {{-- ================= INTRO / PERIODE ================= --}}
        <section class="portfolio-intro">
            <div class="container" data-aos="fade-up">
                <p class="portfolio-intro-text">
                    Berikut adalah beberapa karya pilihan kami yang dibuat dalam periode ini
                </p>
            </div>
        </section>

        {{-- ================= GRID PORTFOLIO (3x2) ================= --}}
        <section class="portfolio-grid-wrapper">
            <div class="container">
                <div class="row g-4">

                    {{-- Card 1 --}}
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('inicioxgaswaras') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/IGArtboard 1@4x.png') }}" alt="GasWaroS"
                                    class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">GasWaraS</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 2 --}}
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('ah-pek-kopitiam') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/design cup.png') }}" alt="Ah Pek Kopitiam"
                                    class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Ah Pek Kopitiam</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 3 --}}
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ route('hutaraja-coffee-shop') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/Final Poster_Kennan A.M._097.png') }}" alt="Hutaraja Coffee Shop"
                                    class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Hutaraja Coffee Shop</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 4 --}}
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('isyana-sarasvati') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/cover buku.png') }}" alt="Isyana Sarasvati"
                                    class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Isyana Sarasvati</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 5 --}}
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('lus-adventures-de-l-art-deco') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/cgcoverRRR.png') }}" alt="Lus Adventures"
                                    class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Lus Adventures De l'Art Deco</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 6 --}}
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ route('cookie-up-your-day') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/Screenshot 2025-04-12 145334.png') }}" alt="Cookie Up Your Day"
                                    class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Cookie up your Day</div>
                                </div>
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
                once: true,
                duration: 800,
                easing: 'ease-out-back'
            });
        });
    </script>
@endsection
