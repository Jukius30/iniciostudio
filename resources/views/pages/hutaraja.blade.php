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

        /* ================= 2. HERO HEADER (STYLE ALA GASWARAS) ================= */
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
            padding: 40px 20px;
        }

        .hutaraja-header-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
            width: 100%;
            max-width: 900px;
        }

        .hutaraja-header-title {
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 800;
            letter-spacing: 0.05em;
            text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.5);
            text-transform: uppercase;
            margin: 0;
        }

        /* Kotak Deskripsi Transparan */
        .about-box-hero {
            background-color: rgba(57, 68, 40, 0.75); /* Hijau transparan */
            color: white;
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .about-box-hero h2 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .about-box-hero p {
            text-align: justify;
            line-height: 1.7;
            font-size: 1.1rem;
            margin: 0;
        }

        /* ================= 3. CORE CONTENT (LOGO DI KANAN) ================= */
        .hutaraja-main-container {
            max-width: 1100px;
            margin: 100px auto;
            padding: 0 20px;
        }

        .target-market-wrapper {
            display: flex; /* WAJIB: Agar teks dan logo bisa kiri-kanan */
            align-items: center; /* Sejajar tengah secara vertikal */
            justify-content: space-between;
            gap: 50px;
            width: 100%;
        }

        .box-market {
            background-color: #E2D5BE;
            padding: 50px 40px;
            color: #394428;
            flex: 1.2;
            border-radius: 20px;
        }

        .logo-side {
            flex: 0.8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 300px;
        }

        .hutaraja-logo-img {
            max-width: 350px; /* Sesuaikan ukuran logo */
            width: 100%;
            height: auto;
            display: block;
        }

        /* ================= 4. GALLERY & NAV ================= */
        .hutaraja-seamless-gallery {
            width: 100%;
            overflow: hidden;
            margin: 80px 0;
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
            .target-market-wrapper { flex-direction: column; }
            .logo-side { order: 2; }
            .hutaraja-header { min-height: 80vh; }
        }
    </style>

    <div class="hutaraja-page-wrapper">
        
        {{-- Section 1: Hero --}}
        <section class="hutaraja-header">
            <div class="hutaraja-header-content">
                <h1 class="hutaraja-header-title" data-aos="zoom-out">Hutaraja Coffee</h1>
                
                <div class="about-box-hero" data-aos="fade-up" data-aos-delay="300">
                    <h2>Tentang Hutaraja</h2>
                    <p>
                        Hutaraja Coffee adalah destinasi bagi para pecinta kopi yang mencari keaslian biji kopi pilihan dari wilayah Hutaraja. Dengan fokus pada kualitas roasting dan penyajian yang presisi, kami menghadirkan cita rasa nusantara di setiap cangkirnya.
                    </p>
                </div>
            </div>
        </section>

        {{-- Section 2: Target Pasar & Logo --}}
        <section class="hutaraja-main-container">
            <div class="target-market-wrapper">
                
                {{-- Sisi Kiri: Kotak Deskripsi --}}
                <div class="text-side" data-aos="fade-right">
                    <div class="box-market" style="border-radius: 20px;">
                        <h2 style="font-weight: 700; font-size: 2.8rem; margin-bottom: 20px;">Target Pasar</h2>
                        <p style="text-align: justify; line-height: 1.8; font-size: 1.1rem;">
                            Target audiens kami adalah para profesional muda, komunitas kreatif, dan penikmat kopi spesialiti yang menghargai cerita di balik setiap seduhan kopi dan mencari ruang yang inspiratif untuk berkolaborasi.
                        </p>
                    </div>
                </div>

                {{-- Sisi Kanan: Logo --}}
                <div class="logo-side" data-aos="zoom-in" data-aos-delay="300">
                    {{-- CEK: Pastikan file Free_Coffee_Cup_Mockup.png ada di folder public/assets --}}
                    <img src="{{ asset('assets/Free_Coffee_Cup_Mockup.png') }}" class="hutaraja-logo-img" alt="Hutaraja Logo">
                </div>
                
            </div>
        </section>

        {{-- Section 3: Seamless Gallery --}}
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
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('assets/Free_Coffee_Cup_Mockup.png') }}" alt="Merch 4">
                </div>
            </div>
        </section>

        {{-- Section 4: Navigation --}}
        <div style="text-align:center; padding: 100px 0;">
            <a href="{{ url('/isyana-sarasvati') }}" class="btn-next-portfolio" data-aos="fade-up">
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
            AOS.init({ once: true, duration: 800 });
        });
    </script>
@endsection