@extends('layouts.apps')

@section('content')
    <style>
        body {
            background: #D0C1A7 !important;
        }

        .bg-main {
            background: #D0C1A7;
        }

        /* ===== HERO FOTO + HASHTAG (FULL WIDTH) ===== */
        .service-hero {
            background-color: #D0C1A7;
            padding: 0;
            margin: 0;
            position: relative;
        }

        .service-hero-full-img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .service-hero-hashtag {
            position: absolute;
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            color: #ffffff;
            font-weight: 700;
            font-size: 70px;
            letter-spacing: 0.04em;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.55);
            white-space: nowrap;
        }

        /* ===== TAGLINE / COPY AREA ===== */
        .service-intro {
            background-color: #D0C1A7;
            padding-top: 40px;
            padding-bottom: 40px;
            text-align: center;
        }

        .service-tagline-pill {
            display: inline-flex;
            align-items: center;
            padding: 8px 18px;
            font-weight: 700;
            font-size: 25px;
            color: #394428;
            margin-bottom: 18px;
            gap: 8px;
        }

        .service-intro-text {
            max-width: 560px;
            margin: 0 auto;
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }

        /* ===== FRAME 1 / CAROUSEL LAYANAN (TIDAK DIUBAH) ===== */
        .service-frame {
            background-color: #D0C1A7;
            padding-top: 40px;
            padding-bottom: 60px;
            color: #333333;
        }

        .service-frame-label {
            font-size: 14px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #8A9165;
            margin-bottom: 10px;
        }

        .service-frame-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 24px;
        }

        .service-card {
            border-radius: 14px;
            overflow: hidden;
            background: #000;
            position: relative;
            cursor: pointer;
            margin: 0 8px;
        }

        .service-card-img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            opacity: 0.75;
            transition: opacity 0.25s ease;
            display: block;
        }

        .service-card:hover .service-card-img {
            opacity: 1;
        }

        .service-card-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            padding: 20px 18px;
            text-align: center;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            pointer-events: none;
        }

        .service-card-title {
            font-weight: 800;
            font-size: 18px;
            margin-bottom: 6px;
            color: rgba(255, 255, 255, 0.70);
            transition: color 0.25s ease;
        }

        .service-card-subtitle {
            font-size: 13px;
            line-height: 1.5;
            max-width: 90%;
            color: rgba(255, 255, 255, 0.55);
            transition: color 0.25s ease, opacity 0.25s ease;
        }

        .service-card:hover .service-card-title,
        .service-card:hover .service-card-subtitle {
            color: #ffffff;
        }

        #servicesCarousel .carousel-inner {
            padding: 10px 0;
        }

        #servicesCarousel .carousel-item.active,
        #servicesCarousel .carousel-item-next,
        #servicesCarousel .carousel-item-prev {
            display: flex;
        }

        #servicesCarousel .carousel-item>div {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        #servicesCarousel .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #8A9165;
        }

        #servicesCarousel .carousel-indicators .active {
            background-color: #ffffff;
        }

        #servicesCarousel .carousel-control-prev,
        #servicesCarousel .carousel-control-next {
            width: auto;
            top: 50%;
            transform: translateY(-50%);
        }

        #servicesCarousel .carousel-control-prev { left: -40px; }
        #servicesCarousel .carousel-control-next { right: -40px; }

        #servicesCarousel .carousel-control-prev-icon,
        #servicesCarousel .carousel-control-next-icon {
            width: 24px;
            height: 24px;
            filter: invert(1);
        }

        /* ===== CTA STRIP DENGAN BACKGROUND GAMBAR STATIC ===== */
        .cta-strip {
            position: relative;
            /* Background Gambar Static (Berpindah saat scroll biasa) */
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                              url("{{ asset('assets/mockupgelas.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 100px 0;
            text-align: center;
        }

        .cta-strip-title {
            font-size: 28px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 18px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        .cta-strip-btn {
            display: inline-block;
            background-color: #8A9165;
            color: #ffffff;
            border-radius: 999px;
            padding: 10px 32px;
            font-weight: 600;
            font-size: 16px;
            border: none;
            text-decoration: none;
            transition: 0.3s;
        }

        .cta-strip-btn:hover {
            background-color: #ffffff;
            color: #8A9165;
        }

        @media (max-width: 767.98px) {
            .service-hero-hashtag { font-size: 22px; white-space: normal; text-align: center; }
            #servicesCarousel .carousel-item>div { flex: 0 0 100%; max-width: 100%; }
            #servicesCarousel .carousel-control-prev { left: 0; }
            #servicesCarousel .carousel-control-next { right: 0; }
        }
    </style>

    <div class="bg-main">

        {{-- HERO --}}
        <section class="service-hero">
            <img src="{{ asset('assets/service.jpg') }}" alt="Branding Made Simple" class="service-hero-full-img">
            <div class="service-hero-hashtag fw-bold">
                #BrandingMadeSimple
            </div>
        </section>

        {{-- TAGLINE --}}
        <section class="service-intro">
            <div class="container">
                <div class="service-tagline-pill">
                    <span>Branding Made Simple</span>
                </div>
                <p class="service-intro-text">
                    Inicio membantu brand tumbuh melalui strategi visual yang kuat—mulai dari brand campaign yang berdampak,
                    konten sosial media yang engaging, fotografi berkualitas tinggi, hingga visual branding yang konsisten
                    dan konsulting kreatif yang tepat sasaran. Kami hadir untuk membawa brand Anda ke level berikutnya.
                </p>
            </div>
        </section>

        {{-- FRAME 1: CAROUSEL LAYANAN (TIDAK DIUBAH) --}}
        <section class="service-frame">
            <div class="container">
                <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="4"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis5.jpg') }}" class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Visual Branding</div>
                                        <div class="service-card-subtitle">Perancangan logo, sistem identitas visual, dan guideline yang konsisten.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis4.jpg') }}" class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Brand Campaign</div>
                                        <div class="service-card-subtitle">Seasonal & launch campaign yang dirancang untuk audiens yang tepat.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis3.jpg') }}" class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Social Media Content</div>
                                        <div class="service-card-subtitle">Konten visual & copy yang konsisten dan engaging di berbagai platform.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis2.jpg') }}" class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Photography</div>
                                        <div class="service-card-subtitle">Photo session yang memperkuat storytelling brand.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis1.jpg') }}" class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Consulting</div>
                                        <div class="service-card-subtitle">Pendampingan strategi branding agar identitas brand menjadi lebih jelas.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </section>

        {{-- CTA STRIP DENGAN BACKGROUND GAMBAR STATIC --}}
        <section class="cta-strip">
            <div class="container">
                <h2 class="cta-strip-title">
                    Tertarik dengan projek kami?
                </h2>
                <a href="{{ url('/portfolio') }}" class="cta-strip-btn">
                    Lihat portfolio kita
                </a>
            </div>
        </section>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('#servicesCarousel');
            const items = carousel.querySelectorAll('.carousel-item');
            const minPerSlide = 3;

            items.forEach((el) => {
                let next = el.nextElementSibling || items[0];
                for (let i = 1; i < minPerSlide; i++) {
                    const cloneChild = next.firstElementChild.cloneNode(true);
                    el.appendChild(cloneChild);
                    next = next.nextElementSibling || items[0];
                }
            });
        });
    </script>
@endsection