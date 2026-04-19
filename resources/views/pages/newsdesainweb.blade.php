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

        /* ================= 4. SERVICE LIST STYLING (NEW) ================= */
        .service-list-container {
            margin-top: 20px;
            margin-bottom: 50px;
        }

        .service-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            gap: 12px;
        }

        .service-number {
            font-size: 1.15rem;
            font-weight: 800;
            color: #394428;
            min-width: 25px;
            line-height: 1.8;
        }

        .service-text-wrapper {
            flex: 1;
        }

        .service-name {
            font-size: 1.15rem;
            font-weight: 700;
            color: #000;
            display: block;
            margin-bottom: 5px;
            line-height: 1.8;
        }

        .service-desc {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #333;
            text-align: justify;
            margin: 0;
        }

        /* ================= 5. NAVIGATION BUTTON ================= */
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

    <div style="max-width: 900px; margin: 40px auto 0; padding: 0 20px;" data-aos="fade-right">
        <a href="/insight" class="btn-back">← Kembali ke Insight</a>
    </div>

    <div class="news-page-wrapper">
        
        <header class="news-header" data-aos="fade-down">
            <h1 class="news-title">Agensi Kreatif Profesional untuk Membangun Brand yang Kuat dan Relevan</h1>
            <div class="news-meta">
                <span>By <span class="creator-name">Kennan Martha</span></span>
                <span style="opacity: 0.5;">|</span>
                <span>21 Oktober 2025</span>
            </div>
        </header>

        <article class="news-content-container">
            
            <div class="news-paragraph" data-aos="fade-up">
                Di era digital yang kompetitif, agensi kreatif memiliki peran penting dalam membantu identitas brand yang kuat, konsisten, dan relevan dengan target audiens. Lebih dari sekedar desain visual, agensi kreatif menggabungkan strategi, kreativitas, dan pemahaman pasar untuk menciptakan solusi komunikasi yang berdampak.
            </div>

            <div class="news-main-image-wrapper" data-aos="zoom-in" data-aos-duration="1000">
                <img src="{{ asset('assets/grups.jpg') }}" class="news-main-img" alt="Inicio Studio Team">
            </div>

            <div class="news-sub-heading" data-aos="fade-up">Apa itu agensi kreatif?</div>
            <div class="news-paragraph" data-aos="fade-up">
                Agensi kreatif adalah mitra strategis yang membantu brand dalam merancang dan mengelola komunikasi visual serta kampanye pemasaran. Layanan agensi kreatif mencakup visual branding, brand campaign, konten media sosial, fotografi, hingga konsultasi brand yang dirancang sesuai tujuan bisnis klien.
                <br><br>
                Dengan pendekatan berbasis riset dan kreativitas, agensi kreatif memastikan setiap pesan yang disampaikan brand memiliki makna, konsistensi, dan daya tarik.
            </div>

            <div class="news-sub-heading" data-aos="fade-up">Mengapa Bisnis Membutuhkan Agensi Kreatif?</div>
            <div class="news-paragraph" data-aos="fade-up">
                Persaingan pasar yang semakin ketat menuntut brand untuk tampil berbeda. Agensi kreatif membantu bisnis untuk:
            </div>
            
            <ul class="news-list" data-aos="fade-up">
                <li>Membangun identitas visual yang profesional dan mudah dikenali: Melalui desain logo, tipografi, dan palet warna yang unik.</li>
                <li>Menyampaikan pesan brand secara konsisten di berbagai platform: Memastikan visual dan gaya komunikasi tetap seragam, baik di media sosial maupun media cetak.</li>
                <li>Meningkatkan kepercayaan dan engagement audiens: Visual yang berkualitas mencerminkan kredibilitas bisnis dan menarik perhatian target pasar yang tepat.</li>
                <li>Mengoptimalkan strategi pemasaran digital yang efektif: Melalui pembuatan konten kreatif yang relevan dengan tren dan kebutuhan audiens.</li>
            </ul>

            <div class="news-paragraph" data-aos="fade-up">
                Dengan dukungan agensi kreatif, brand dapat fokus pada pengembangan bisnis tanpa harus mengelola aspek kreatif secara terpisah.
            </div>

            <div class="news-sub-heading" data-aos="fade-up">Layanan Agensi Kreatif yang Kami Tawarkan</div>
            
            <div class="service-list-container" data-aos="fade-up">
                <div class="service-item">
                    <span class="service-number">1.</span>
                    <div class="service-text-wrapper">
                        <span class="service-name">Visual Branding</span>
                        <p class="service-desc">Kami menciptakan identitas visual yang merepresentasikan nilai dan karakter brand, mulai dari logo, warna, tipografi, hingga brand guideline yang konsisten.</p>
                    </div>
                </div>

                <div class="service-item">
                    <span class="service-number">2.</span>
                    <div class="service-text-wrapper">
                        <span class="service-name">Brand Campaign</span>
                        <p class="service-desc">Perencanaan dan eksekusi kampanye brand yang kreatif, relevan, dan berorientasi pada tujuan, baik untuk peluncuran produk, rebranding, maupun kampanye digital.</p>
                    </div>
                </div>

                <div class="service-item">
                    <span class="service-number">3.</span>
                    <div class="service-text-wrapper">
                        <span class="service-name">Konten Media Sosial</span>
                        <p class="service-desc">Strategi dan produksi konten media sosial yang engaging, storytelling yang kuat, serta visual yang selaras dengan identitas brand untuk meningkatkan interaksi audiens.</p>
                    </div>
                </div>

                <div class="service-item">
                    <span class="service-number">4.</span>
                    <div class="service-text-wrapper">
                        <span class="service-name">Fotografi</span>
                        <p class="service-desc">Layanan fotografi profesional untuk kebutuhan brand, produk, dan kampanye pemasaran guna menciptakan visual yang autentik dan berkualitas tinggi.</p>
                    </div>
                </div>

                <div class="service-item">
                    <span class="service-number">5.</span>
                    <div class="service-text-wrapper">
                        <span class="service-name">Konsultasi Brand</span>
                        <p class="service-desc">Pendekatan strategis untuk membantu brand memahami posisi mereka di pasar, menentukan arah komunikasi, dan mengembangkan strategi jangka panjang.</p>
                    </div>
                </div>
            </div>

            <div class="news-sub-heading" data-aos="fade-up">Keunggulan Agensi Kreatif Kami</div>

            <div class="news-paragraph" data-aos="fade-up">
                Sebagai agensi kreatif, kami percaya bahwa desain yang baik harus memiliki tujuan. Kami menggabungkan strategi, kreativitas, dan eksekusi yang matang untuk mengahasilkan solusi yang tidak hanya menarik secara visual, tetapi juga efektif secara bisnis. Kami bekerja secara kolaboratif dengan klien untuk memahami kebutuhan, audiens, dan tujuan brand secara menyeluruh.
            </div>

            <div class="news-sub-heading" data-aos="fade-up">Agensi Kreatif sebagai Investasi Jangka Panjang</div>

            <div class="news-paragraph" data-aos="fade-up">
                Menggunakan jasa agensi kreatif bukan sekedar pengeluaran, melainkan investasi jangka panjang untuk pertumbuhan brand. Brand yang kuat akan lebih mudah dikenali, dipercaya, dan diingat oleh konsumen.
                <br><br>
                Dengan strategi kreatif yang teapt, bisnis dapat membangun hubungan yang berkelanjutan dengan audiens dan meningkatkan nilai brand di pasar.
            </div>

            <div class="news-sub-heading" data-aos="fade-up">Percayakan Brand Anda pada Agensi Kreatif Profesional</div>

            <div class="news-paragraph" data-aos="fade-up">
                Jika Anda mencari agensi kreatif yang mampu mengubah ide menjadi komunikasi visual yang bermakna, kami siap menjadi partner strategis Anda. Bersama kami, wujudkan brand yang tidak hanya terlihat meanrik, tetapi juga memiliki dampak nyata.
            </div>

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