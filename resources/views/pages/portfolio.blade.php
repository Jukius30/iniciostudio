@extends('layouts.apps')

@section('content')
    <style>
        /* ================= GLOBAL SETTINGS ================= */
        body {
            background: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
        }

        .bg-main {
            background: #D0C1A7;
        }

        /* ========== HERO PORTFOLIO ========== */
        .portfolio-hero-section {
            position: relative;
            width: 100%;
            height: 460px;
            overflow: hidden;
        }

        .portfolio-hero-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .portfolio-hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            z-index: 1;
        }

        .portfolio-hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #ffffff;
            z-index: 2;
            width: 90%;
            max-width: 780px;
        }

        .portfolio-hero-title {
            font-size: 46px;
            font-weight: 800;
            margin-bottom: 16px;
            text-shadow: 0 4px 14px rgba(0, 0, 0, 0.45);
            letter-spacing: 0.04em;
        }

        .portfolio-hero-subtitle {
            font-size: 15px;
            line-height: 1.6;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }

        /* ========== INTRO TEXT / PERIODE ========== */
        .portfolio-intro {
            background: #D0C1A7;
            text-align: center;
            padding: 60px 0 40px;
            color: #333333;
        }

        .portfolio-intro-text {
            font-size: 14px;
            margin-bottom: 12px;
        }

        .portfolio-period {
            display: inline-block;
            padding: 8px 24px;
            border-radius: 999px;
            background: #8A9165;
            color: #ffffff;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.04em;
        }

        /* ========== GRID PORTFOLIO (3x2 Layout) ========== */
        .portfolio-grid-wrapper {
            background: #D0C1A7;
            padding-bottom: 80px;
        }

        .portfolio-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: #C4C4C4;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            aspect-ratio: 4 / 3; /* Membuat ukuran kartu konsisten */
        }

        .portfolio-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .portfolio-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent 60%);
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 20px;
            color: #ffffff;
            text-align: center;
            opacity: 0.9;
            transition: background 0.3s ease;
        }

        .portfolio-card-title {
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .portfolio-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }

        .portfolio-card:hover .portfolio-card-overlay {
            background: linear-gradient(to top, rgba(57, 68, 40, 0.9), transparent 80%); /* Menggunakan warna brand saat hover */
        }

        /* Responsive */
        @media (max-width: 991.98px) {
            .portfolio-hero-section { height: 350px; }
            .portfolio-hero-title { font-size: 36px; }
        }

        @media (max-width: 767.98px) {
            .portfolio-hero-section { height: 300px; }
            .portfolio-hero-title { font-size: 28px; }
            .portfolio-hero-subtitle { font-size: 13px; }
        }
    </style>

    <div class="bg-main">

        {{-- ================= HERO ================= --}}
        <section class="portfolio-hero-section">
            <img src="{{ asset('assets/shirt.png') }}" alt="Portfolio Hero" class="portfolio-hero-img">
            <div class="portfolio-hero-overlay"></div>
            <div class="portfolio-hero-content">
                <h1 class="portfolio-hero-title">Portfolio</h1>
                <p class="portfolio-hero-subtitle">
                    Our journey has brought us together with brands at the forefront of their industries.
                    Each collaboration has strengthened our understanding of the distinct strategies needed
                    to elevate every type of business.
                </p>
            </div>
        </section>

        {{-- ================= INTRO / PERIODE ================= --}}
        <section class="portfolio-intro">
            <div class="container">
                <p class="portfolio-intro-text">
                    These are some of our selected works created within the period of
                </p>
                <div class="portfolio-period">
                    Jan 2023 – Dec 2025
                </div>
            </div>
        </section>

        {{-- ================= GRID PORTFOLIO (3x2) ================= --}}
        <section class="portfolio-grid-wrapper">
            <div class="container">
                <div class="row g-4">

                    {{-- Card 1 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="{{ route('inicioxgaswaras') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/IGArtboard 1@4x.png') }}" alt="GasWaroS" class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">GasWaraS</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 2 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="{{ route('ah-pek-kopitiam') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/design cup.png') }}" alt="Ah Pek Kopitiam" class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Ah Pek Kopitiam</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 3 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="{{ route('hutaraja-coffee-shop') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/Final Poster_Kennan A.M._097.png') }}" alt="Hutaraja Coffee Shop" class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Hutaraja Coffee Shop</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 4 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="{{ route('isyana-sarasvati') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/cover buku.png') }}" alt="Isyana Sarasvati" class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Isyana Sarasvati</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 5 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="{{ route('lus-adventures-de-l-art-deco') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/cgcoverRRR.png') }}" alt="Lus Adventures" class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">Lus Adventures De l'Art Deco</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 6 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="{{ route('cookie-up-your-day') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/Screenshot 2025-04-12 145334.png') }}" alt="Cookie Up Your Day" class="portfolio-card-img">
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
@endsection