@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
        }

        /* Hero Section Tetap */
        .cookie-header {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url("{{ asset('assets/Stample.png') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
        }

        .cookie-header-title {
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 800;
            letter-spacing: 0.05em;
            text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.5);
            text-transform: uppercase;
        }

        /* Container Utama */
        .cookie-main-container {
            max-width: 1200px;
            margin: 80px auto 100px;
            padding: 0 20px;
        }

        /* Layout Atas: Box Hijau + Banner */
        .top-content-wrapper {
            display: flex;
            gap: 30px;
            align-items: stretch; /* Agar tinggi banner mengikuti box jika memungkinkan */
            margin-bottom: 40px;
        }

        .box-about {
            background-color: #394428;
            color: white;
            padding: 50px 40px;
            border-radius: 25px;
            flex: 1.5; /* Box hijau lebih lebar */
        }

        .banner-side {
            flex: 1; /* Sisi banner kanan */
            display: flex;
            justify-content: center;
        }

        .banner-side img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 15px;
            object-fit: cover;
        }

        /* Layout Bawah: Billboard Full Width */
        .billboard-bottom {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .billboard-bottom img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }

        /* Tombol Kembali */
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

        /* Responsive Mobile */
        @media (max-width: 991px) {
            .top-content-wrapper {
                flex-direction: column;
            }
            .cookie-header {
                min-height: 60vh;
            }
        }
    </style>

    <div class="cookie-page-wrapper">

        <section class="cookie-header">
            <h1 class="cookie-header-title" data-aos="zoom-out">Cookie Up Your Day</h1>
        </section>

        <section class="cookie-main-container">
            
            <div class="top-content-wrapper">
                <div class="box-about" data-aos="fade-right">
                    <h2 style="font-weight:700; font-size:1.5rem; margin-bottom:5px;">Advertizing - Kampung Girilaya</h2>
                    <h2 style="font-weight:700; font-size:2.8rem; margin-bottom:15px;">Cookie Up Your Day</h2>
                    <p style="text-align:justify; line-height:1.7;">
                        "Cookie Up Your Day" adalah kampanye yang bertujuan untuk memperluas target pasar kue
                        tradisional Kampung Girilaya ke generasi muda (Gen Z) sekaligus mempromosikan kue Girilaya
                        sebagai produk yang dapat dinikmati kapan saja dan di mana saja, tanpa memandang situasi. Kali
                        ini, kelas Desain Komersial dan Layanan dari Jurusan Desain Komunikasi Visual Universitas
                        Ciputra Surabaya berkolaborasi dengan Kampung Girilaya, sebuah desa yang terletak di Gang 2 RT 3
                        RW 8, untuk mendesain kampanye yang disebut "Cookie Up Your Day".
                    </p>
                </div>

                <div class="banner-side" data-aos="fade-left">
                    <img src="{{ asset('assets/bannercookie.png') }}" alt="Cookie Banner">
                </div>
            </div>

            <div class="billboard-bottom" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets/BILLBOARDFinal.png') }}" alt="Cookie Billboard">
            </div>

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
                duration: 800
            });
        });
    </script>
@endsection