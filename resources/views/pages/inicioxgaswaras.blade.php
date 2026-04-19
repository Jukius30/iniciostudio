@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ================= 1. GLOBAL SETTINGS & SCROLL FIX ================= */
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Hanya mengunci scroll horizontal */
            overflow-y: auto;
            /* Memastikan scroll vertikal aktif */
            background-color: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
            height: auto;
            /* Menghindari lock pada tinggi layar */
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
            min-height: 100vh;
            /* Menggunakan min-height agar tidak mengunci scroll */
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

        .gws-header-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            width: 100%;
            max-width: 900px;
            /* Menjaga lebar kotak agar tidak terlalu lebar */
            padding: 20px;
        }

        .about-box-hero {
            background-color: rgba(57, 68, 40, 0.75);
            /* Warna hijau dengan opacity 0.75 */
            color: white;
            padding: 40px;
            border-radius: 20px;
            /* Membuat kotak rounded */
            text-align: center;
            backdrop-filter: blur(5px);
            /* Opsional: memberikan efek blur pada background di belakang kotak */
        }

        .about-box-hero h2 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .about-box-hero p {
            font-size: 1.1rem;
            line-height: 1.7;
            margin: 0;
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
            margin: 80px auto;
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
            /* Area logo */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .green-box-about {
            background-color: #394428;
            color: white;
            padding: 50px 40px;
            opacity: 0.95;
        }

        .brown-box-market {
            background-color: #E2D5BE;
            padding: 50px 40px;
            color: #394428;
            flex: 1.2;
            /* Kotak teks lebih lebar */
            border-radius: 10px;
            /* Opsional: sedikit rounded agar senada */
        }

        .gws-logo-v-img {
            max-width: 350px;
            /* Ukuran logo sesuai gambar */
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
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
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
            .flex-layout-wrapper {
                flex-direction: column;
            }

            .logo-side {
                order: 2;
            }

            .gws-header {
                min-height: 60vh;
            }

        }
    </style>

    <div class="gws-page-wrapper">

        {{-- Section 1: Hero Header --}}
        <section class="gws-header">
            <div class="gws-header-content">
                {{-- Teks Judul Utama --}}
                <h1 class="gws-header-title" data-aos="zoom-out">GasWaraS</h1>

                {{-- Kotak Deskripsi di bawah teks GasWaraS --}}
                <div class="about-box-hero" data-aos="fade-up" data-aos-delay="300">
                    <h2>Tentang GasWaraS</h2>
                    <p>
                        GasWaraS Design Agency adalah agensi desain yang fokus pada pembuatan desain untuk para kreator
                        konten. Kami bertujuan untuk mengatasi tantangan yang dihadapi oleh para kreator konten yang
                        kesulitan dalam mendesain dan mengedit video, sehingga klien kami dapat lebih mudah fokus pada
                        pembuatan konten itu sendiri.
                    </p>
                </div>
            </div>
        </section>

        {{-- Section 2: Intro --}}
        <section class="gws-intro-section">
            <div class="container" data-aos="fade-up">
            </div>
        </section>

        {{-- Section 4: CORE CONTENT (Target Pasar & Logo) --}}
        <section class="gws-main-container">
            <div class="flex-layout-wrapper align-items-center">

                {{-- Sisi Kiri: Kotak Target Pasar --}}
                <div class="text-side" data-aos="fade-right">
                    <div class="brown-box-market" style="border-radius: 20px;">
                        <h2 style="font-weight: 700; font-size: 2.8rem; margin-bottom: 15px;">Target Pasar</h2>
                        <p style="text-align: justify; line-height: 1.7; font-size: 1.1rem;">
                            Target pasar GasWaraS Design Agency adalah para kreator konten di seluruh Indonesia yang
                            kekurangan keterampilan atau waktu untuk menangani tugas desain sendiri. Oleh karena itu,
                            GasWaraS hadir untuk membantu meringankan beban para kreator konten.
                            <br><br>
                            Agensi ini sangat menarik bagi para kreator konten sebagai target pasar utamanya dengan berfokus
                            pada segmen yang dibutuhkan oleh para kreator konten, seperti pengeditan, logo, maskot, atau
                            merchandise.
                        </p>
                    </div>
                </div>

                {{-- Sisi Kanan: Logo GWS --}}
                <div class="logo-side" data-aos="zoom-in" data-aos-delay="300">
                    {{-- PASTIKAN NAMA FILE DI PUBLIC/ASSETS ADALAH LOGODESIGNAGENCY.png --}}
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
                Lihat portfolio berikutnya
            </a>
        </section>

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
                duration: 800,
                disable: 'mobile' // Opsional: matikan AOS di mobile jika masih terasa berat
            });
        });
    </script>
@endsection
