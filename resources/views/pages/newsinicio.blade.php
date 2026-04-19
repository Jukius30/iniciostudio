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

        .news-sub-sub-heading {
            font-size: 1.4rem;
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
            <h1 class="news-title">What's behind Inicio Studio</h1>
            <div class="news-meta">
                <span>By <span class="creator-name">Kennan Martha</span></span>
                <span style="opacity: 0.5;">|</span>
                <span>21 Oktober 2025</span>
            </div>
        </header>

        <article class="news-content-container">
            
            <div class="news-paragraph" data-aos="fade-up">
                INICIO Studio adalah agency bisnis yang membuat dan mengerjakan projek desain brand. INICIO membantu orang untuk mempermudah dan membantu setiap orang yang sudah memulai atau baru memulai bisnis mereka dari segi branding atau desain. INICIO adalah solusi bagi orang-orang yang tidak paham atau sibuk namun ingin membangun bisnis yang lebih profesional dan efektif.
            </div>

            <div class="news-paragraph" data-aos="fade-up">
                INICIO hadir untuk membantu pebisnis startup membangun brand identity yang jelas, konsisten, dan relevan. Banyak bisnis mengalami kesulitan memahami prefensi visual audiens, memilih gaya komunikasi yang tepat, dan membuat campaign yang efektif. Kami menyederhanakan proses tersebut dengan memberikan panduan desain strategis, visual edentity yang mudah diterapkan, serta solusi branding yang cepat, praktis, dan terukur.
            </div>

            <div class="news-main-image-wrapper" data-aos="zoom-in" data-aos-duration="1000">
                <img src="{{ asset('assets/grups.jpg') }}" class="news-main-img" alt="Inicio Studio Team">
            </div>

            <div class="news-sub-heading" data-aos="fade-up">Peran Agensi Desain dalam Lingkungan Digital yang Berubah Cepat</div>
            <div class="news-paragraph" data-aos="fade-up">
                Dalam situasi saat ini, desain tidak lagi sekadar soal estetika. Ini adalah langkah bisnis yang cerdas bagi setiap merek. Organisasi bersaing untuk mendapatkan perhatian, kepercayaan, dan akses ke konsumen. Beberapa firma yang berpesialisasi dalam desain dapat membantu bisnis dalam hal ini. Mereka menggunakan kreativitas, pemahaman teknologi, dan pemikiran cerdas untuk berkomunikasi atas nama merek di dunia yang penuh kebisingan ini.
            </div>

            <div class="news-sub-sub-heading" data-aos="fade-up">1. Mengubah Ide Menjadi Indetitas Visual yang Unik</div>
            <div class="news-paragraph" data-aos="fade-up">
                Identitas merek yang kuat diciptakan dengan sengaja. Hal ini berasal dari keputusan visual yang menyampaikan nilai, audiens, dan posisi bisnis. Biro desain membantu menerjemahkan proses berpikir menjadi sistem visual berupa logo, warna, tipografi, simbol, dan pedoman merek yang menyampaikan siapa merek tersebut. Identitas visual yang konsisten sangat membantu dalam membangun pengenalan merek dan kosistensi di setiap titik kontak.
            </div>

            <div class="news-sub-sub-heading" data-aos="fade-up">2. Meningkatkan Komunikasi Merek dengan Kreativitas Cerdas</div>
            <div class="news-paragraph" data-aos="fade-up">
                Desain yang baik melampaui estetika semata. Ia membantu menyampaikan pesan. Perusahaan desain memahami bahwa tata letak, nada, dan aturan desain adalah faktor yang memengaruhi persepsi orang. Baik itu desain web, cetak brosur, iklan produk, atau iklan online, perusahaan desain meciptakan komunikasi visual yang menarik dan bermakna.
            </div>

            <div class="news-sub-sub-heading" data-aos="fade-up">3. Meningkatkan Pengalaman Pengguna di Platform Digital</div>
            <div class="news-paragraph" data-aos="fade-up">
                Dengan semakin banyaknya bisnis yang beralih ke online, pengalaman pengguna (UX) belum pernah sepenting ini. Perusahaan desain dan desainer tahu cara meciptakan situs web dan aplikasi yang ramah pengguna dan mudah digunakan, serta tidak terlihat seperti aplikasi lain di luar sana. UX yang baik menjaga pelanggan puas dan menghindari masalah.
            </div>

            <div class="news-sub-sub-heading" data-aos="fade-up">4. Menghubungkan Kreativitas dan Strategi Bisnis</div>
            <div class="news-paragraph" data-aos="fade-up">
                "Keunggulan utama sebuah agensi desain adalah kombinasi antara kreativitas dan strategi. Agensi desain bukan hanya ahli visualisasi. Mereka adalah pemecah masalah bagi bisnis. Mereka membantu dalam:"
            </div>
            
            <ul class="news-list" data-aos="fade-up">
                <li>Meningkatkan eksposure merek</li>
                <li>Meningkatkan loyalitas pelanggan</li>
                <li>Bantuan peluncuran merek</li>
                <li>Meningkatkan posisi pasar</li>
                <li>Meningkatkan nilai yang dirasakan</li>
            </ul>

            <div class="news-paragraph" data-aos="fade-up">
                Denagn memahami pasar dan perilaku konsumen, agensi periklanan memastikan setiap ide kreatif selaras dengan rencana merek.
            </div>

            <div class="news-sub-sub-heading" data-aos="fade-up">5. Memproduksi Konten yang Sesuai dengan Media Sosial</div>
            <div class="news-paragraph" data-aos="fade-up">
                Konten bergerak cepat di internet. Gambar harus menarik perhatian, sesuai dengan setiap platform, dan berfungsi dengan baik. Biro desain dapat menciptakan konten berkualitas seperti gambar media sosial, video pendek, kampanye cepat, fotografi, dan materi promosi yang menceritakan kisah yang baik. Cerita yang baik menghasilkan konten yang efektif.
            </div>

            <div class="news-sub-sub-heading" data-aos="fade-up">6. Meyediakan Keahlian Ahli dan Ide Baru</div>
            <div class="news-paragraph" data-aos="fade-up">
                Banyak perusahaan terjebak atau kekurangan talenta desain yang dibutuhkan di dalam perusahaan. Perusahaan desain memperkerjakan berbagai sumber talenta: direktur kreatif, desainer, strategis, fotografer, ilustrator, dan desainer UI/UX, dan mereka bekerja sama untuk solusi end-to-end. Memiliki paparan talenta yang beragam memungkinkan mereka melihat masalah dari sudut pandang yang berbeda dan mengembangkan solusi inovatif dan kuat.
            </div>

            <div class="news-sub-sub-heading" data-aos="fade-up">7. Membangun Kepercayaan Melalui Profesionalisme dan Kosistensi</div>
            <div class="news-paragraph" data-aos="fade-up">
                Biro desain grafis menjadi mitra jangka panjang dan memastikan visual tetap konsisten untuk segala hal. Visual dapat berkontribusi dalam membangun kepercayaan dan membuat merek terlihat profesional dan kredibel di mata pelanggan. Pada akhirnya, hal ini meningkatkan kepercayaan pelanggan terhadap merek.
            </div>

            <div class="news-sub-sub-heading" data-aos="fade-up">Kesimpulan</div>
            <div class="news-paragraph" data-aos="fade-up">
                Mitra Strategis untuk Merek Modern  Di dunia digital saat ini, desain sangat penting. Perusahaan desain dapat memberikan makna dan kreativitas pada branding, membantu merek menjadi unik dan berkomunikasi dengan lebih baik. Baik itu membangun identitas merek, membuat konten media sosial, atau meningkatkan pengalaman pelanggan, perusahaan desain sangat penting dalam mendefinisikan dan mempengaruhi presepsi merek di benak pelanggan.
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