@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Pastikan Bootstrap Icons terpasang --}}
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

        .insight-page-wrapper {
            background-color: #D0C1A7;
            width: 100%;
        }

        /* ================= 2. SECTION: HERO (UKURAN KONSISTEN) ================= */
        .insight-hero {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 400px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url("{{ asset('assets/grups.jpg') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .insight-hero-title {
            font-size: clamp(3.5rem, 8vw, 6rem);
            font-weight: 800;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            text-shadow: 2px 4px 10px rgba(0,0,0,0.3);
        }

        /* ================= 3. SECTION: NEWS GRID ================= */
        .news-section {
            padding: 100px 0;
            background-color: #D0C1A7;
        }

        .news-header {
            margin-bottom: 60px;
            border-left: 8px solid #394428;
            padding-left: 20px;
        }

        .news-header h2 {
            font-size: 3rem;
            font-weight: 800;
            color: #394428;
            margin: 0;
        }

        .news-header p {
            font-size: 1.2rem;
            color: #555;
            margin-top: 5px;
        }

        /* CARD STYLE */
        .news-card {
            background-color: #f4eee0;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 100%;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
        }

        .news-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(57, 68, 40, 0.2);
        }

        .news-img-wrapper {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .news-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .news-card:hover .news-img {
            transform: scale(1.1);
        }

        .news-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .news-date {
            font-size: 0.9rem;
            font-weight: 600;
            color: #8A9165;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }

        .news-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #394428;
            line-height: 1.3;
            margin-bottom: 15px;
            text-decoration: none;
            display: block;
            transition: color 0.3s;
        }

        .news-title:hover {
            color: #8A9165;
            text-decoration: none;
        }

        .news-excerpt {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 25px;
            /* Limit text to 3 lines */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .btn-read-more {
            margin-top: auto;
            font-weight: 700;
            color: #394428;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: gap 0.3s ease;
        }

        .btn-read-more:hover {
            gap: 15px;
            color: #8A9165;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .news-header h2 { font-size: 2.2rem; }
            .news-section { padding: 60px 0; }
            .insight-hero { height: 50vh; }
        }
    </style>

    <div class="insight-page-wrapper">
        
        {{-- SECTION 1: HERO --}}
        <section class="insight-hero" data-aos="fade-in">
            <div class="container">
                <h1 class="insight-hero-title" data-aos="zoom-out" data-aos-duration="1200">Insights</h1>
                <p class="lead text-white-50" style="font-weight: 500;">Latest trends, news, and creative updates from Inicio Studio.</p>
            </div>
        </section>

        {{-- SECTION 2: NEWS GRID --}}
        <section class="news-section">
            <div class="container">
                
                <div class="news-header" data-aos="fade-right">
                    <h2>Latest News</h2>
                    <p>Stay updated with our newest projects and industry insights.</p>
                </div>

                <div class="row g-4">
                    
                    {{-- Card 1 --}}
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="news-card">
                            <div class="news-img-wrapper">
                                <img src="{{ asset('assets/grups.jpg') }}" class="news-img" alt="News 1">
                            </div>
                            <div class="news-content">
                                <span class="news-date">21 Oktober 2025</span>
                                <a href="{{ url('/agensi-kreatif-profesional-untuk-membangun-brand-yang-kuat-dan-relevan') }}" class="news-title">
                                    Agensi Kreatif Profesional untuk Membangun Brand yang Kuat dan Relevan
                                </a>
                                <p class="news-excerpt">Mengenal peran vital agensi kreatif dalam menghadapi era digital yang kompetitif...</p>
                                <a href="{{ url('/agensi-kreatif-profesional-untuk-membangun-brand-yang-kuat-dan-relevan') }}" class="btn-read-more">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Anda bisa menambah Card 2, 3, dst di bawah sini dengan struktur col-lg-4 yang sama --}}

                </div> {{-- End Row --}}
            </div> {{-- End Container --}}
        </section>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                duration: 1000,
                easing: 'ease-out-back'
            });
        });
    </script>
@endsection