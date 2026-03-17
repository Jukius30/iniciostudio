@extends('layouts.apps')

@section('content')
    <style>
        body {
            background: #D0C1A7 !important;
        }

        .bg-main {
            background: #D0C1A7;
        }

        /* ========== HERO PORTFOLIO ========== */
        .portfolio-hero {
            background: #707781;
            /* abu-abu gelap seperti figma */
            padding: 70px 0 80px;
        }

        .portfolio-hero-card {
            max-width: 520px;
            margin: 0 auto;
            border-radius: 22px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.35);
        }

        .portfolio-hero-section {
            position: relative;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .portfolio-hero-img {
            width: 100%;
            height: 460px;
            /* sesuai proporsi Figma */
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .portfolio-hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            /* abu gelap transparan */
            z-index: 1;
        }



        .portfolio-hero-title {
            position: absolute;
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            color: #ffffff;
            font-weight: 700;
            font-size: 32px;
            letter-spacing: 0.04em;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.55);
            white-space: nowrap;
            z-index: 2;
            /* berada di atas overlay */
        }


        .portfolio-hero-sub {
            font-size: 12px;
            line-height: 1.5;
            max-width: 260px;
            opacity: 0.9;
        }

        .portfolio-hero-line {
            width: 100%;
            height: 4px;
            background: #00AEEF;
            /* garis biru seperti di figma */
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
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .portfolio-hero-title {
            font-size: 46px;
            font-weight: 800;
            margin-bottom: 16px;
            /* supaya subtitle turun */
            text-shadow: 0 4px 14px rgba(0, 0, 0, 0.45);
        }

        .portfolio-hero-subtitle {
            font-size: 15px;
            line-height: 1.6;
            opacity: 0.9;
            max-width: 600px;
            margin-top: 350px;
            text-align: center;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }

        /* ========== INTRO TEXT / PERIODE ========== */
        .portfolio-intro {
            background: #D0C1A7;
            text-align: center;
            padding: 40px 0 24px;
            color: #333333;
        }

        .portfolio-intro-text {
            font-size: 14px;
            margin-bottom: 6px;
        }

        .portfolio-period {
            display: inline-block;
            padding: 6px 20px;
            border-radius: 999px;
            background: #8A9165;
            color: #ffffff;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.04em;
        }

        /* ========== GRID PORTFOLIO ========== */
        .portfolio-grid-wrapper {
            background: #D0C1A7;
            padding-bottom: 70px;
        }

        .portfolio-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: #C4C4C4;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .portfolio-card-img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
        }

        .portfolio-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.55), transparent 55%);
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 14px 18px;
            color: #ffffff;
            text-align: center;
        }

        .portfolio-card-title {
            font-size: 15px;
            font-weight: 700;
        }

        .portfolio-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.25);
        }

        .portfolio-card:hover .portfolio-card-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.75), transparent 55%);
        }

        @media (max-width: 767.98px) {
            .portfolio-hero-img {
                height: 320px;
            }

            .portfolio-hero-title {
                font-size: 28px;
            }

            .portfolio-hero-subtitle {
                font-size: 12px;
                padding: 0 20px;
            }
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

        {{-- ================= GRID PORTFOLIO ================= --}}
        <section class="portfolio-grid-wrapper">
            <div class="container">
                <div class="row g-4">

                    {{-- Card 1 (contoh dengan gambar) --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="{{ route('inicioxgaswaras') }}" style="text-decoration: none;">
                            <div class="portfolio-card">
                                <img src="{{ asset('assets/porto1.jpg') }}" alt="Inicio × GasWaroS" class="portfolio-card-img">
                                <div class="portfolio-card-overlay">
                                    <div class="portfolio-card-title">
                                        Inicio × GasWaraS
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Card 2 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="portfolio-card">
                            <img src="{{ asset('assets/porto2.jpg') }}" alt="Inicio × GasWaroS" class="portfolio-card-img">
                            <div class="portfolio-card-overlay">
                                <div class="portfolio-card-title">
                                    Inicio × GasWaroS
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="portfolio-card">
                            <img src="{{ asset('assets/porto3.jpg') }}" alt="Inicio × GasWaroS" class="portfolio-card-img">
                            <div class="portfolio-card-overlay">
                                <div class="portfolio-card-title">
                                    Inicio × GasWaroS
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 4 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="portfolio-card">
                            <img src="{{ asset('assets/porto4.jpg') }}" alt="Inicio × GasWaroS" class="portfolio-card-img">
                            <div class="portfolio-card-overlay">
                                <div class="portfolio-card-title">
                                    Inicio × GasWaroS
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 5 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="portfolio-card">
                            <img src="{{ asset('assets/porto5.jpg') }}" alt="Inicio × GasWaroS" class="portfolio-card-img">
                            <div class="portfolio-card-overlay">
                                <div class="portfolio-card-title">
                                    Inicio × GasWaroS
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 6 --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="portfolio-card">
                            <img src="{{ asset('assets/porto6.jpg') }}" alt="Inicio × GasWaroS" class="portfolio-card-img">
                            <div class="portfolio-card-overlay">
                                <div class="portfolio-card-title">
                                    Inicio × GasWaroS
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Tambah kartu lain kalau perlu --}}

                </div>
            </div>
        </section>

    </div>
@endsection
