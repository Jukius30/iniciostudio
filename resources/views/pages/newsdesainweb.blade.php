@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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

        .news-page-wrapper {
            background-color: #D0C1A7;
            width: 100%;
            padding-bottom: 100px;
        }

        /* ================= 2. NEWS HEADER ================= */
        .news-header {
            max-width: 900px;
            margin: 0 auto;
            padding: 120px 20px 40px;
            text-align: left;
        }

        .news-title {
            font-size: clamp(2.2rem, 5vw, 4rem);
            font-weight: 800;
            color: #394428;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .news-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 50px;
        }

        .creator-name {
            font-weight: 700;
            color: #8A9165;
            text-transform: uppercase;
        }

        /* ================= 3. CONTENT STRUCTURE ================= */
        .news-content-container {
            max-width: 850px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .news-paragraph {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #333;
            text-align: justify;
            margin-bottom: 30px;
        }

        .news-sub-heading {
            font-size: 1.8rem;
            font-weight: 700;
            color: #394428;
            margin: 40px 0 20px;
        }

        .news-list {
            margin-bottom: 35px;
            padding-left: 20px;
        }

        .news-list li {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
            text-align: justify;
        }

        .news-main-image-wrapper {
            width: 100%;
            margin: 50px 0;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .news-main-img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* ================= 4. NAVIGATION BUTTON ================= */
        .back-to-news {
            text-align: center;
            margin-top: 80px;
        }

        .btn-back {
            display: inline-block;
            padding: 12px 40px;
            border: 2px solid #394428;
            border-radius: 15px;
            color: #394428;
            text-decoration: none;
            font-weight: 700;
            transition: 0.3s;
        }

        .btn-back:hover {
            background-color: #394428;
            color: white;
            text-decoration: none;
        }
    </style>

    <div class="news-page-wrapper">
        
        {{-- Judul & Kreator --}}
        <header class="news-header" data-aos="fade-down">
            <h1 class="news-title">Agensi Kreatif Profesional untuk Membangun Brand yang Kuat dan Relevan</h1>
            <div class="news-meta">
                <span>By <span class="creator-name">Kennan Martha</span></span>
                <span style="opacity: 0.5;">|</span>
                <span>21 Oktober 2025</span>
            </div>
        </header>

        <article class="news-content-container">
            
            {{-- Bagian 1: Apa itu agensi kreatif? --}}
            <div class="news-sub-heading" data-aos="fade-up">Apa itu agensi kreatif?</div>
            <div class="news-paragraph" data-aos="fade-up">
                <strong>Agensi kreatif adalah mitra strategis</strong> yang membantu brand dalam merancang dan mengelola komunikasi visual serta kampanye pemasaran. Layanan agensi kreatif mencakup <strong>visual branding, brand campaign, konten media sosial, fotografi, hingga konsultasi brand</strong> yang dirancang sesuai tujuan bisnis klien. Dengan pendekatan berbasis riset dan kreativitas, agensi kreatif memastikan setiap pesan yang disampaikan brand memiliki makna, konsistensi, dan daya tarik.
            </div>

            {{-- Gambar Utama --}}
            <div class="news-main-image-wrapper" data-aos="zoom-in" data-aos-duration="1000">
                <img src="{{ asset('assets/grups.jpg') }}" class="news-main-img" alt="Inicio Studio Team">
            </div>

            {{-- Bagian 2: Mengapa Bisnis Membutuhkan Agensi Kreatif? --}}
            <div class="news-sub-heading" data-aos="fade-up">Mengapa Bisnis Membutuhkan Agensi Kreatif?</div>
            <div class="news-paragraph" data-aos="fade-up">
                Persaingan pasar yang semakin ketat menuntut brand untuk tampil berbeda. Agensi kreatif membantu bisnis untuk:
            </div>
            
            <ul class="news-list" data-aos="fade-up">
                <li><strong>Membangun identitas visual yang profesional dan mudah dikenali:</strong> Melalui desain logo, tipografi, dan palet warna yang unik.</li>
                <li><strong>Menyampaikan pesan brand secara konsisten di berbagai platform:</strong> Memastikan visual dan gaya komunikasi tetap seragam, baik di media sosial maupun media cetak.</li>
                <li><strong>Meningkatkan kepercayaan dan engagement audiens:</strong> Visual yang berkualitas mencerminkan kredibilitas bisnis dan menarik perhatian target pasar yang tepat.</li>
                <li><strong>Mengoptimalkan strategi pemasaran digital yang efektif:</strong> Melalui pembuatan konten kreatif yang relevan dengan tren dan kebutuhan audiens.</li>
            </ul>

            <div class="news-paragraph" data-aos="fade-up">
                Dengan dukungan agensi kreatif, <strong>brand dapat fokus pada pengembangan bisnis</strong> tanpa harus mengelola aspek kreatif secara terpisah.
            </div>

            {{-- Tombol Kembali --}}
            <div class="back-to-news" data-aos="fade-up">
                <a href="/insight" class="btn-back">Back to All News</a>
            </div>

        </article>

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