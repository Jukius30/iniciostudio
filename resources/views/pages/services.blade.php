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
            height: 420px;
            /* atur tinggi sesuai Figma */
            object-fit: cover;
            object-position: center;
            /* fokus di tengah */
            display: block;
        }

        .service-hero-hashtag {
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
            border-radius: 6px;
            background: #f261a2;
            /* pink highlight */
            border: 3px solid #8A9165;
            font-weight: 700;
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 18px;
            gap: 8px;
        }

        .service-tagline-pill span {
            display: inline-block;
        }

        .service-intro-text {
            max-width: 560px;
            margin: 0 auto;
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }

        /* ===== FRAME 1 / CAROUSEL LAYANAN ===== */
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
            /* jarak antar card */
        }

        /* ==== CARD IMAGE ==== */
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

        /* ==== OVERLAY ==== */
        .service-card-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            /* konten tetap bawah */
            align-items: center;
            /* horizontal center */
            padding: 20px 18px;
            text-align: center;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            pointer-events: none;
        }

        /* ==== TITLE ==== */
        .service-card-title {
            font-weight: 800;
            /* lebih bold */
            font-size: 18px;
            margin-bottom: 6px;
            color: rgba(255, 255, 255, 0.70);
            /* abu2 */
            transition: color 0.25s ease;
        }

        /* ==== SUBTITLE ==== */
        .service-card-subtitle {
            font-size: 13px;
            line-height: 1.5;
            max-width: 90%;
            color: rgba(255, 255, 255, 0.55);
            /* abu2 lebih soft */
            transition: color 0.25s ease, opacity 0.25s ease;
        }

        /* ==== HOVER EFFECT ==== */
        .service-card:hover .service-card-title,
        .service-card:hover .service-card-subtitle {
            color: #ffffff;
        }

        /* === MULTI ITEM CAROUSEL (3 card visible) === */
        #servicesCarousel .carousel-inner {
            padding: 10px 0;
        }

        /* hanya slide active / next / prev yg flex;
                           sisanya tetap display:none supaya tidak “nyangkut” */
        #servicesCarousel .carousel-item.active,
        #servicesCarousel .carousel-item-next,
        #servicesCarousel .carousel-item-prev {
            display: flex;
        }

        #servicesCarousel .carousel-item>div {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }

        /* indicator & controls */
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

        #servicesCarousel .carousel-control-prev {
            left: -40px;
            /* geser ke kiri */
        }

        #servicesCarousel .carousel-control-next {
            right: -40px;
            /* geser ke kanan */
        }

        #servicesCarousel .carousel-control-prev-icon,
        #servicesCarousel .carousel-control-next-icon {
            width: 24px;
            height: 24px;
            filter: invert(1);
        }

        @media (max-width: 767.98px) {
            .service-hero-full-img {
                height: 260px;
            }

            .service-hero-hashtag {
                font-size: 22px;
                white-space: normal;
                text-align: center;
            }

            #servicesCarousel .carousel-item>div {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .service-card-img {
                height: 210px;
            }

            #servicesCarousel .carousel-control-prev {
                left: 0;
            }

            #servicesCarousel .carousel-control-next {
                right: 0;
            }
        }

        /* ===== CTA STRIP: "Interested in our work?" ===== */
        .cta-strip {
            background-color: #9f9f9f;
            /* abu-abu seperti Figma */
            padding: 70px 0;
            text-align: center;
        }

        .cta-strip-title {
            font-size: 28px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 18px;
        }

        .cta-strip-btn {
            display: inline-block;
            background-color: #8A9165;
            /* hijau brand */
            color: #ffffff;
            border-radius: 999px;
            padding: 10px 32px;
            font-weight: 600;
            font-size: 16px;
            border: none;
            text-decoration: none;
        }

        .cta-strip-btn:hover {
            background-color: #7a8258;
            color: #ffffff;
        }
    </style>

    <div class="bg-main">

        {{-- ================= HERO FOTO + HASHTAG (FULL WIDTH) ================= --}}
        <section class="service-hero">
            <img src="{{ asset('assets/service.jpg') }}" alt="Branding Made Simple" class="service-hero-full-img">

            <div class="service-hero-hashtag fw-bold">
                #BrandingMadeSimple
            </div>
        </section>

        {{-- ================= TAGLINE & DESKRIPSI ================= --}}
        <section class="service-intro">
            <div class="container">

                <div class="service-tagline-pill">
                    <span>❝</span>
                    <span>BrandingMadeSimple</span>
                    <span>❞</span>
                </div>

                <p class="service-intro-text">
                    Inicio membantu brand tumbuh melalui strategi visual yang kuat—mulai dari brand campaign yang berdampak,
                    konten sosial media yang engaging, fotografi berkualitas tinggi, hingga visual branding yang konsisten
                    dan
                    konsulting kreatif yang tepat sasaran. Kami hadir untuk membawa brand Anda ke level berikutnya.
                </p>

            </div>
        </section>

        {{-- ================= FRAME 1: CAROUSEL LAYANAN ================= --}}
        <section class="service-frame">
            <div class="container">

                <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
                    {{-- INDICATORS --}}
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    </div>

                    <div class="carousel-inner">

                        {{-- tiap item awal 1 card; JS akan clone supaya 3 terlihat --}}
                        <div class="carousel-item active">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis5.jpg') }}" alt="Visual Branding"
                                        class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Visual Branding</div>
                                        <div class="service-card-subtitle">
                                            Perancangan logo, sistem identitas visual, dan guideline yang konsisten untuk
                                            seluruh touchpoint brand.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis4.jpg') }}" alt="Brand Campaign"
                                        class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Brand Campaign</div>
                                        <div class="service-card-subtitle">
                                            Seasonal & launch campaign yang dirancang untuk membawa pesan brand ke audiens
                                            yang tepat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis3.jpg') }}" alt="Social Media Content"
                                        class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Social Media Content</div>
                                        <div class="service-card-subtitle">
                                            Konten visual & copy yang konsisten, engaging, dan sesuai karakter brand di
                                            berbagai platform.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis2.jpg') }}" alt="Photography" class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Photography</div>
                                        <div class="service-card-subtitle">
                                            Photo session untuk campaign, produk, dan lifestyle yang memperkuat storytelling
                                            brand.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-12 col-md-4">
                                <div class="service-card">
                                    <img src="{{ asset('assets/servis1.jpg') }}" alt="Consulting" class="service-card-img">
                                    <div class="service-card-overlay">
                                        <div class="service-card-title">Consulting</div>
                                        <div class="service-card-subtitle">
                                            Pendampingan strategi branding agar identitas visual, pesan, dan positioning
                                            brand menjadi lebih jelas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- CONTROLS --}}
                    <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section>

        {{-- ================= CTA: INTERESTED IN OUR WORK ================= --}}
        <section class="cta-strip">
            <div class="container">
                <h2 class="cta-strip-title">
                    Interested in our work?
                </h2>

                <a href="{{ url('/portfolio') }}" class="cta-strip-btn">
                    Look up our portfolio
                </a>
            </div>
        </section>


    </div>

    {{-- JS multiple item: 3 terlihat, geser 1, looping --}}
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
