@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* ================= 1. PEMBERSIHAN OVERWRITE ================= */
        /* Kita hapus margin/padding 0 pada body dan reset container-fluid global 
           agar Navbar bawaan apps.blade.php kembali ke setingan aslinya. */
        
        .about-page-wrapper {
            background-color: #D0C1A7; /* Warna dasar halaman About */
            overflow-x: hidden;
            font-family: 'League Spartan', sans-serif;
        }

        /* Kita batasi reset padding HANYA untuk container di dalam About */
        .about-page-wrapper .container-fluid {
            padding: 0 !important;
            margin: 0 !important;
        }

        /* ================= 2. STYLE KHUSUS KONTEN (SCOPED) ================= */
        
        /* Section 1: Hero */
        .about-hero {
            position: relative;
            width: 100%;
            height: 60vh;
            min-height: 400px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                              url("{{ asset('assets/about_hero.jpg') }}"); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .about-hero-title {
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 700;
            letter-spacing: 0.05em;
            text-shadow: 2px 4px 10px rgba(0, 0, 0, 0.3);
        }

        /* Section 2: Detail (Hijau Army) */
        .detail-section-layout {
            display: flex;
            width: 100%;
            min-height: 550px;
            background-color: #D0C1A7;
        }

        .green-box-content {
            background-color: #394428; 
            flex: 1.2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end; 
            padding: 80px 10%;
            color: white;
        }

        .text-inner-wrapper {
            max-width: 500px;
        }

        .green-box-content h2 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: white;
        }

        .green-box-content p {
            font-size: 1.1rem;
            line-height: 1.7;
            text-align: justify;
            color: white;
        }

        .outside-logo-area {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
        }

        .outside-logo-img {
            max-width: 350px;
            width: 70%;
            height: auto;
            filter: brightness(0) saturate(100%) invert(21%) sepia(11%) saturate(1435%) hue-rotate(42deg) brightness(95%) contrast(92%);
        }

        /* Section 3: Team */
        .team-section {
            padding: 0;
            width: 100%;
            position: relative;
            background-color: #D0C1A7;
        }

        .team-full-width-container {
            position: relative;
            width: 100%;
            line-height: 0;
        }

        .team-bg-img {
            width: 100%;
            height: auto;
            display: block;
        }

        .team-overlay-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .team-title-inside {
            font-size: clamp(2rem, 5vw, 4.5rem);
            font-weight: 700;
            color: #ffffff;
            text-shadow: 2px 4px 15px rgba(0,0,0,0.6);
            margin-top: 5%;
            pointer-events: auto;
        }

        .member-name {
            position: absolute;
            font-size: clamp(0.9rem, 1.8vw, 1.3rem);
            font-weight: 600;
            color: #ffffff;
            padding: 10px 30px;
            background-color: transparent;
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 50px; 
            cursor: pointer;
            transition: all 0.3s ease;
            pointer-events: auto;
            display: flex;
            align-items: center;
            gap: 12px;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }

        .member-name::before {
            content: '';
            width: 0; 
            height: 0; 
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-right: 10px solid white;
            display: inline-block;
        }

        .member-name:hover {
            transform: translateY(-5px);
            background-color: #394428; 
            border-color: #394428;
            text-shadow: none;
        }

        /* Koordinat Nama */
        .name-nathan { top: 40%; left: 30%; }
        .name-dyllan { top: 72%; left: 45%; }
        .name-victor { top: 62%; left: 62%; }
        .name-kennan { top: 46%; left: 80%; }

        /* Responsive */
        @media (max-width: 991px) {
            .detail-section-layout { flex-direction: column; }
            .green-box-content { align-items: center; padding: 50px 20px; text-align: center; }
            .member-name { padding: 8px 20px; }
        }
    </style>

    {{-- Seluruh konten About dibungkus class induk --}}
    <div class="about-page-wrapper">
        
        <section class="about-hero" data-aos="fade-in">
            <h1 class="about-hero-title">Inicio Studio</h1>
        </section>

        <section class="detail-section-layout">
            <div class="green-box-content" data-aos="fade-right">
                <div class="text-inner-wrapper">
                    <h2>Inicio Studio</h2>
                    <p><strong>INICIO Studio</strong> adalah sebuah creative agency yang berfokus pada desain brand. Kami membantu bisnis baik yang baru memulai maupun yang sudah berjalan untuk membangun identitas visual profesional.</p>
                    <p>Hadir sebagai solusi bagi mereka yang belum memahami dunia branding namun ingin mengembangkan bisnis yang terlihat lebih profesional.</p>
                </div>
            </div>
            <div class="outside-logo-area" data-aos="fade-left">
                <img src="{{ asset('assets/INICIOLOGO.png') }}" class="outside-logo-img" alt="Logo">
            </div>
        </section>

        <section class="team-section">
            <div class="team-full-width-container">
                <img src="{{ asset('assets/grup.jpg') }}" class="team-bg-img" alt="Team Grups">
                <div class="team-overlay-content">
                    <h2 class="team-title-inside">Meet The Team</h2>
                    <div class="team-overlay-names">
                        <div class="member-name name-nathan">Nathan</div>
                        <div class="member-name name-dyllan">Dyllan</div>
                        <div class="member-name name-victor">Victor</div>
                        <div class="member-name name-kennan">Kennan</div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ once: true });
        });
    </script>
@endsection