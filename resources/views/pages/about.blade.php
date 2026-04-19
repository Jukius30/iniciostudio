@extends('layouts.apps')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ================= 1. GLOBAL & RESET (PERBAIKAN SCROLL) ================= */
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            height: auto;
            background-color: #D0C1A7 !important;
            font-family: 'League Spartan', sans-serif;
        }

        .about-page-wrapper {
            background-color: #D0C1A7;
            width: 100%;
            position: relative;
        }

        .about-page-wrapper .container-fluid {
            padding: 0 !important;
            margin: 0 !important;
        }

        /* ================= 2. SECTION: HERO ================= */
        .about-hero {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 400px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url("{{ asset('assets/about.png') }}");
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

        /* ================= 3. SECTION: DETAIL ================= */
        .detail-section-grid {
            display: grid;
            grid-template-columns: 1fr minmax(auto, 850px) 1fr;
            width: 100%;
            min-height: 550px;
            background-color: #D0C1A7;
            margin: 0;
        }

        .green-box-centered {
            grid-column: 2;
            background-color: #394428;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 80px 50px;
            color: white;
            text-align: left;
        }

        .text-inner-wrapper {
            max-width: 650px;
        }

        .green-box-centered h2 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: white;
        }

        .green-box-centered p {
            font-size: 1.15rem;
            line-height: 1.8;
            text-align: justify;
            color: white;
            margin-bottom: 1.5rem;
        }

        .logo-outside-right {
            grid-column: 3;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .outside-logo-img {
            max-width: 300px;
            width: 100%;
            height: auto;
            filter: brightness(0) saturate(100%) invert(21%) sepia(11%) saturate(1435%) hue-rotate(42deg) brightness(95%) contrast(92%);
        }

        /* ================= 4. SECTION: TEAM ================= */
        .team-section {
            padding: 0;
            width: 100%;
            position: relative;
            background-color: #D0C1A7;
            overflow: hidden;
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
            min-height: 300px;
            object-fit: cover;
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
            text-shadow: 2px 4px 15px rgba(0, 0, 0, 0.6);
            margin-top: 5%;
            pointer-events: auto;
        }

        .member-name {
            position: absolute;
            font-size: clamp(0.7rem, 1.5vw, 1.3rem);
            font-weight: 600;
            color: #ffffff;
            padding: 8px 20px;
            background-color: transparent;
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            pointer-events: auto;
            display: flex;
            align-items: center;
            gap: 12px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
            white-space: nowrap;
        }

        .member-name::before {
            content: '';
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 8px solid white;
            display: inline-block;
        }

        .member-name:hover {
            transform: translateY(-5px);
            background-color: #394428;
            border-color: #394428;
            text-shadow: none;
        }

        /* Posisi Tim (Desktop Default) */
        .name-nathan { top: 40%; left: 30%; }
        .name-dyllan { top: 72%; left: 45%; }
        .name-victor { top: 62%; left: 62%; }
        .name-kennan { top: 46%; left: 80%; }

        /* ================= 5. SECTION: WHY US ================= */
        .why-us-section {
            background-color: #394428;
            padding: clamp(60px, 10vw, 100px) 0;
            text-align: center;
            color: white;
        }

        .why-us-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: clamp(40px, 8vw, 80px);
        }

        .why-us-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            padding: 0 20px;
        }

        .why-card {
            background-color: #D0C1A7;
            border-radius: 20px;
            width: 320px;
            height: 380px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .why-card:hover {
            transform: translateY(-10px);
            background-color: #F2E3C8;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .card-content-wrapper {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .front-reveal {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            z-index: 2;
            padding: 50px;
        }

        .why-card:hover .front-reveal {
            transform: translateY(-100%);
        }

        .why-icon-image-wrapper {
            width: 90px;
            height: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            padding: 20px;
            background-color: rgba(242, 227, 200, 0.5);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .why-icon-img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        .back-reveal {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            transform: translateY(100%);
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            z-index: 1;
            padding: 40px;
            text-align: justify;
        }

        .why-card:hover .back-reveal {
            transform: translateY(0);
        }

        .back-reveal h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #2A331B;
            margin-bottom: 20px;
            text-align: center;
        }

        .back-reveal p {
            font-size: 1rem;
            line-height: 1.6;
            color: #2A331B;
        }

        /* ================= 6. SECTION: CONTACT ================= */
        .contact-section {
            background-color: #394428;
            padding: 100px 0;
            color: white;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 80px;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-form-wrapper {
            flex: 1.2;
            width: 100%;
        }

        .contact-form-wrapper h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 700;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .form-control-custom {
            width: 100%;
            background-color: #2a331d;
            border: none;
            border-radius: 12px;
            padding: 15px 20px;
            color: white;
            outline: none;
        }

        .btn-send {
            background-color: #8A9165;
            color: white;
            border: none;
            padding: 15px 0;
            width: 100%;
            border-radius: 30px;
            font-size: 1.5rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s;
        }

        .btn-send:hover {
            background-color: #9ba375;
        }

        .contact-info-wrapper {
            flex: 0.8;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .contact-logo {
            max-width: 250px;
            margin-bottom: 40px;
            filter: brightness(0) invert(1);
        }

        .info-list {
            list-style: none;
            padding: 0;
            width: 100%;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .info-item a {
            color: white;
            text-decoration: none;
        }

        /* ================= 7. SECTION: MAP ================= */
        .map-section {
            width: 100%;
            height: 450px;
            line-height: 0;
            background-color: #D0C1A7;
        }

        .map-section iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .detail-section-grid {
                grid-template-columns: 1fr;
            }

            .green-box-centered {
                grid-column: 1;
                padding: 50px 20px;
            }

            .logo-outside-right {
                grid-column: 1;
            }

            .why-card {
                width: 100%;
                max-width: 350px;
            }

            .contact-container {
                flex-direction: column;
                gap: 60px;
            }
            
            .contact-form-wrapper, .contact-info-wrapper {
                flex: none;
            }

            /* Adjust Team Names for Mobile */
            .name-nathan { top: 40%; left: 10%; }
            .name-dyllan { top: 72%; left: 20%; }
            .name-victor { top: 62%; left: 55%; }
            .name-kennan { top: 46%; left: 65%; }
        }

        @media (max-width: 576px) {
            .team-bg-img { min-height: 450px; object-position: 70%; }
            .member-name { padding: 6px 12px; }
            .team-title-inside { margin-top: 15%; }
        }
    </style>

    <div class="about-page-wrapper">

        {{-- Section 1: Hero --}}
        <section class="about-hero" data-aos="fade-in">
            <h1 class="about-hero-title">Inicio Studio</h1>
        </section>

        {{-- Section 2: Detail --}}
        <section class="detail-section-grid">
            <div class="side-spacer"></div>
            <div class="green-box-centered">
                <div class="text-inner-wrapper" data-aos="fade-in" data-aos-duration="1200">
                    <h2>Inicio Studio</h2>
                    <p><strong>INICIO Studio</strong> adalah sebuah creative agency yang berfokus pada desain brand. Kami
                        membantu bisnis baik yang baru memulai maupun yang sudah berjalan untuk membangun identitas visual
                        profesional.</p>
                    <p>Hadir sebagai solusi bagi mereka yang belum memahami dunia branding namun ingin mengembangkan bisnis
                        yang terlihat lebih profesional.</p>
                </div>
            </div>
            <div class="logo-outside-right">
                <div data-aos="fade-in" data-aos-duration="1200" data-aos-delay="300">
                    <img src="{{ asset('assets/INICIOLOGO.png') }}" class="outside-logo-img" alt="Logo">
                </div>
            </div>
        </section>

        {{-- Section 3: Team --}}
        <section class="team-section">
            <div class="team-full-width-container">
                <img src="{{ asset('assets/grup.jpg') }}" class="team-bg-img" alt="Team">
                <div class="team-overlay-content">
                    <h2 class="team-title-inside">Kenali Tim Kami</h2>
                    <div class="team-overlay-names">
                        <div class="member-name name-nathan">Nathan</div>
                        <div class="member-name name-dyllan">Dyllan</div>
                        <div class="member-name name-victor">Victor</div>
                        <div class="member-name name-kennan">Kennan</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 4: Why Us? --}}
        <section class="why-us-section">
            <div class="container">
                <h2 class="why-us-title" data-aos="fade-up">Kenapa Kita?</h2>
                <div class="why-us-grid">

                    <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-content-wrapper">
                            <div class="front-reveal">
                                <div class="why-icon-image-wrapper">
                                    <img src="{{ asset('assets/hastagijo.png') }}" class="why-icon-img">
                                </div>
                            </div>
                            <div class="back-reveal">
                                <h3>Branding<br>Made Simple</h3>
                                <p>Kami menyederhanakan seluruh proses branding untuk startup cepat, praktis, dan lengkap.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-content-wrapper">
                            <div class="front-reveal">
                                <div class="why-icon-image-wrapper">
                                    <img src="{{ asset('assets/$ijo.png') }}" class="why-icon-img">
                                </div>
                            </div>
                            <div class="back-reveal">
                                <h3>Startup-Ready</h3>
                                <p>Layanan desain berkualitas tinggi dengan harga bersahabat untuk tahap awal bisnis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-content-wrapper">
                            <div class="front-reveal">
                                <div class="why-icon-image-wrapper">
                                    <img src="{{ asset('assets/thumbsupijo.png') }}" class="why-icon-img">
                                </div>
                            </div>
                            <div class="back-reveal">
                                <h3>Quality-Driven<br>Creative</h3>
                                <p>Setiap desain dikembangkan dengan perhatian penuh pada detail dan konsistensi.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- Section 5: Contact --}}
        <section class="contact-section">
            <div class="contact-container">
                <div class="contact-form-wrapper" data-aos="fade-right">
                    <h2>Ayao Berkerja Sama dengan Kami</h2>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control-custom" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input type="email" name="email" class="form-control-custom" placeholder="Email Address"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Subjek</label>
                            <input type="text" name="subject" class="form-control-custom" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea name="message" class="form-control-custom" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn-send">Kirim Pesan</button>
                    </form>
                </div>
                <div class="contact-info-wrapper" data-aos="fade-left">
                    <img src="{{ asset('assets/INICIOLOGO.png') }}" class="contact-logo">
                    <div class="info-list">
                        <div class="info-item"><i class="bi bi-envelope-fill"></i><a
                                href="mailto:inicio.studioid@gmail.com">inicio.studioid@gmail.com</a></div>
                        <div class="info-item"><i class="bi bi-whatsapp"></i><span>085103726662</span></div>
                        <div class="info-item"><i class="bi bi-instagram"></i><a href="https://www.instagram.com/iniciostudio.id/" target="_blank">iniciostudio.id</a></div>
                        <div class="info-item"><i class="bi bi-linkedin"></i><span><a href="https://www.linkedin.com/in/inicio-studio-a086b5325/?skipRedirect=true" target="_blank">Inicio Studio</a></span></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 6: Map --}}
        <section class="map-section" data-aos="fade-up">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.691924846467!2d112.63953767476059!3d-7.275841892731057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fdf0084323e7%3A0xc3f345c22538f5f4!2sUniversitas%20Ciputra%20Surabaya!5e0!3m2!1sid!2sid!4v1714440000000!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true
            });
        });
    </script>
@endsection