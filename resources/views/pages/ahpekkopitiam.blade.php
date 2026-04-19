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

        /* ================= 2. HERO HEADER (UPDATED STYLE) ================= */
        .ahpek-header {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),
                url("{{ asset('assets/mockuptotebag.png') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
            padding: 40px 20px;
        }

        .ahpek-header-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
            width: 100%;
            max-width: 850px;
        }

        .ahpek-header-title {
            font-size: clamp(3.5rem, 8vw, 6rem);
            font-weight: 800;
            letter-spacing: 0.02em;
            text-shadow: 2px 4px 12px rgba(0, 0, 0, 0.45);
            margin: 0;
        }

        /* Kotak Deskripsi ala GasWaraS */
        .about-box-hero {
            background-color: rgba(57, 68, 40, 0.75);
            /* Hijau tua dengan opacity 0.75 */
            color: white;
            padding: 40px;
            border-radius: 20px;
            /* Rounded corner */
            backdrop-filter: blur(5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
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

        /* ================= 3. SEAMLESS GALLERY ================= */
        .ahpek-seamless-gallery {
            width: 100%;
            overflow: hidden;
            margin-top: 80px;
            margin-bottom: 20px;
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

        .seamless-item:hover img {
            transform: scale(1.1);
        }

        /* ================= 4. SPLIT GALLERY ================= */
        .ahpek-split-gallery {
            max-width: 1100px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .img-wrapper {
            width: 100%;
            height: 450px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        /* ================= 5. MAIN CONTAINER (TARGET MARKET) ================= */
        .ahpek-main-container {
            max-width: 1100px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .target-market-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            width: 100%;
        }

        .box-market {
            background-color: #E2D5BE;
            padding: 50px 40px;
            color: #394428;
            flex: 1.2;
            border-radius: 10px;
        }

        .logo-side {
            flex: 0.8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 300px;
        }

        .ahpek-logo-img {
            max-width: 350px;
            width: 100%;
            height: auto;
            display: block;
        }

        .ahpek-intro-section {
            padding: 100px 0 60px;
            text-align: center;
            background-color: #D0C1A7;
        }


        /* ================= 6. NAVIGATION & GRID ================= */
        .ahpek-gallery-grid {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .gallery-item img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
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
            transition: 0.3s ease;
        }

        .btn-next-portfolio:hover {
            background-color: #394428;
            color: white;
            transform: translateY(-5px);
        }

        @media (max-width: 991px) {
            .target-market-wrapper {
                flex-direction: column;
            }

            .logo-side {
                order: 2;
            }

            .ahpek-header {
                min-height: 80vh;
            }
        }
    </style>

    <div class="ahpek-page-wrapper">

        {{-- Section 1: Hero Header with Description Box --}}
        <section class="ahpek-header">
            <div class="ahpek-header-content">
                <h1 class="ahpek-header-title" data-aos="zoom-out">Ah Pek Kopitiam</h1>

                <div class="about-box-hero" data-aos="fade-up" data-aos-delay="300">
                    <h2>Tentang Ah Pek Kopitiam</h2>
                    <p>
                        Ah Pek Kopitiam adalah kedai kopi bergaya kopitiam modern yang menyajikan kopi, teh, roti bakar, dan
                        makanan sederhana dalam suasana nyaman bernuansa tradisional, cocok untuk sarapan atau nongkrong
                        santai dengan harga terjangkau.
                    </p>
                </div>
            </div>
        </section>

        {{-- Section 2: Target Market & Logo --}}
        <section class="ahpek-main-container">
            <div class="target-market-wrapper">

                {{-- Sisi Kiri: Kotak Target Market --}}
                <div class="text-side" data-aos="fade-right" style="flex: 1.2;">
                    <div class="box-market" style="border-radius: 20px; width: 100%;">
                        <h2 style="font-weight: 700; font-size: 2.8rem; margin-bottom: 15px; color: #394428;">Target Pasar
                        </h2>
                        <p style="text-align: justify; line-height: 1.7; font-size: 1.1rem;">
                            Kolaborasi ini menghadirkan 5 merchandise eksklusif yang menggabungkan nuansa hangat khas Ah Pek
                            Kopitiam dengan elemen visual ikonik kota Surabaya.
                            <br><br>
                            Target pasarnya mencakup anak muda yang menyukai desain estetik, pelanggan setia Ah Pek
                            Kopitiam, pecinta visual bertema kota Surabaya, wisatawan, serta pekerja urban yang membutuhkan
                            merchandise fungsional.
                        </p>
                    </div>
                </div>

                {{-- Sisi Kanan: Logo Ah Pek --}}
                <div class="logo-side" data-aos="zoom-in" data-aos-delay="300">
                    {{-- PENTING: Cek kembali apakah nama file di folder public/assets benar-benar AHPEKLOGO.png (Case Sensitive) --}}
                    <img src="{{ asset('assets/AHPEKLOGO.png') }}" class="ahpek-logo-img" alt="Ah Pek Logo">
                </div>

            </div>
        </section>

        {{-- Section 3: Split Gallery --}}
        <section class="ahpek-split-gallery">
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/designkeychain.png') }}" alt="Keychain">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/designgelas.png') }}" alt="Mug">
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 4: Full Shirt Mockup --}}
        <section class="ahpek-gallery-grid">
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('assets/mockupshirt.png') }}" alt="Shirt Mockup">
            </div>
        </section>

        {{-- Section 5: Seamless Bottom Gallery --}}
        <section class="ahpek-seamless-gallery">
            <div class="row g-0">
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/mockuptumblr.png') }}" alt="Tumbler">
                </div>
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/mockupkeychain.png') }}" alt="Keychain">
                </div>
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/mockupgelas.png') }}" alt="Mug">
                </div>
                <div class="col-md-3 col-6 seamless-item" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('assets/mockuptotebag.png') }}" alt="Totebag">
                </div>
            </div>
        </section>


        
        {{-- Section 6: Navigation --}}
        <div style="text-align:center; padding: 100px 0;">
            <a href="{{ url('/hutaraja-coffee-shop') }}" class="btn-next-portfolio" data-aos="fade-up">
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
