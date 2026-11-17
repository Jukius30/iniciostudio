import ProfileModel from '../models/ProfileModel';
import ServiceModel from '../models/ServiceModel';
import ProjectModel from '../models/ProjectModel';
import InsightModel from '../models/InsightModel';

class SiteDataRepository {
  // ================= DATA HOME VIEW =================
  getHomeHeroSlides() {
    return [
      { id: 1, src: '/assets/IGArtboard 1@4x.png', alt: 'Portfolio Slide 1' },
      { id: 2, src: '/assets/design cup.png', alt: 'Portfolio Slide 2' },
      { id: 3, src: '/assets/Final Poster_Kennan A.M._097.png', alt: 'Portfolio Slide 3' },
      { id: 4, src: '/assets/cover buku.png', alt: 'Portfolio Slide 4' },
      { id: 5, src: '/assets/cgcoverRRR.png', alt: 'Portfolio Slide 5' },
      { id: 6, src: '/assets/Screenshot 2025-04-12 145334.png', alt: 'Portfolio Slide 6' },
    ];
  }

  getBookedDates() {
    return ['2026-06-12', '2026-06-15'];
  }

  getCoreExpertise() {
    return [
      {
        id: 1,
        iconClass: 'fas fa-paint-brush',
        title: 'Visual Branding',
        description:
          'Membangun identitas visual melalui desain logo, palet warna, tipografi, dan tone visual yang strategis.',
      },
      {
        id: 2,
        iconClass: 'fas fa-camera',
        title: 'Photography',
        description:
          'Alat yang ampuh untuk menangkap esensi brand, produk, atau pengalaman bisnis Anda.',
      },
      {
        id: 3,
        iconClass: 'fas fa-comments',
        title: 'Consulting',
        description:
          'Layanan konsultasi untuk membantu bisnis memahami tantangan brand dan mengoptimalkan komunikasi.',
      },
      {
        id: 4,
        iconClass: 'fab fa-instagram',
        title: 'Social Media',
        description:
          'Dirancang untuk membangun kehadiran brand, meningkatkan engagement, dan merawat komunitas audiens.',
      },
      {
        id: 5,
        iconClass: 'fas fa-bullhorn',
        title: 'Brand Campaign',
        description:
          'Menghidupkan pesan brand melalui storytelling yang menarik dan komunikasi strategis.',
      },
    ];
  }

  // ================= DATA ABOUT VIEW =================
  getTeamMembers() {
    return [
      {
        id: 'nathan',
        name: 'Nathan',
        positionClass: 'top-[50%] left-[10%] lg:top-[40%] lg:left-[30%]',
      },
      {
        id: 'dyllan',
        name: 'Dyllan',
        positionClass: 'top-[72%] left-[28%] lg:top-[72%] lg:left-[45%]',
      },
      {
        id: 'victor',
        name: 'Victor',
        positionClass: 'top-[62%] left-[55%] lg:top-[62%] lg:left-[62%]',
      },
      {
        id: 'kennan',
        name: 'Kennan',
        positionClass: 'top-[48%] left-[75%] lg:top-[46%] lg:left-[80%]',
      },
    ];
  }

  getWhyUsItems() {
    return [
      {
        id: 1,
        iconSrc: '/assets/hastagijo.png',
        titleLines: ['Branding', 'Made Simple'],
        description:
          'Kami menyederhanakan seluruh proses branding untuk startup cepat, praktis, dan lengkap.',
      },
      {
        id: 2,
        iconSrc: '/assets/$ijo.png',
        titleLines: ['Startup-Ready'],
        description:
          'Layanan desain berkualitas tinggi dengan harga bersahabat untuk tahap awal bisnis.',
      },
      {
        id: 3,
        iconSrc: '/assets/thumbsupijo.png',
        titleLines: ['Quality-Driven', 'Creative'],
        description:
          'Setiap desain dikembangkan dengan perhatian penuh pada detail dan konsistensi.',
      },
    ];
  }

  // ================= DATA PROFILE / PLACEHOLDER LAINNYA =================
  getProfile() {
    return new ProfileModel(
      'INÍCIO STUDIO',
      'Branding Made Simple',
      'INICIO Studio hadir sebagai solusi bagi mereka yang belum memahami dunia branding atau tidak memiliki waktu untuk mengurus desain, namun ingin tampil profesional dan memiliki citra kuat di mata pelanggan.'
    );
  }

  // ================= DATA SERVICES VIEW =================
  getServices() {
    return [
      {
        id: 1,
        title: 'Visual Branding',
        subtitle:
          'Perancangan logo, sistem identitas visual, dan guideline yang konsisten.',
        image: '/assets/visual.png',
      },
      {
        id: 2,
        title: 'Brand Campaign',
        subtitle:
          'Seasonal & launch campaign yang dirancang untuk audiens yang tepat.',
        image: '/assets/branding.png',
      },
      {
        id: 3,
        title: 'Social Media Content',
        subtitle:
          'Konten visual & copy yang konsisten dan engaging di berbagai platform.',
        image: '/assets/sosialmedia.png',
      },
      {
        id: 4,
        title: 'Photography',
        subtitle: 'Photo session yang memperkuat storytelling brand.',
        image: '/assets/fotografi.png',
      },
      {
        id: 5,
        title: 'Consulting',
        subtitle:
          'Pendampingan strategi branding agar identitas brand menjadi lebih jelas.',
        image: '/assets/counseling.png',
      },
    ];
  }

  getProjects() {
    return [
      {
        slug: 'inicioxgaswaras',
        title: 'GasWaraS',
        thumbnail: '/assets/IGArtboard 1@4x.png',
        nextSlug: 'ah-pek-kopitiam',
        layoutType: 'hero-box-market',
        heroBg: '/assets/Macbook_Air_M2_Mockup_2.png',
        heroBoxTitle: 'Tentang GasWaraS',
        heroBoxDesc:
          'GasWaraS Design Agency adalah agensi desain yang fokus pada pembuatan desain untuk para kreator konten. Kami bertujuan untuk mengatasi tantangan yang dihadapi oleh para kreator konten yang kesulitan dalam mendesain dan mengedit video, sehingga klien kami dapat lebih mudah fokus pada pembuatan konten itu sendiri.',
        marketTitle: 'Target Pasar',
        marketParagraphs: [
          'Target pasar GasWaraS Design Agency adalah para kreator konten di seluruh Indonesia yang kekurangan keterampilan atau waktu untuk menangani tugas desain sendiri. Oleh karena itu, GasWaraS hadir untuk membantu meringankan beban para kreator konten.',
          'Agensi ini sangat menarik bagi para kreator konten sebagai target pasar utamanya dengan berfokus pada segmen yang dibutuhkan oleh para kreator konten, seperti pengeditan, logo, maskot, atau merchandise.',
        ],
        logo: '/assets/LOGODESIGNAGENCY.png',
        galleryStack: ['/assets/teater.png', '/assets/mockupoffice.png'],
      },
      {
        slug: 'ah-pek-kopitiam',
        title: 'Ah Pek Kopitiam',
        thumbnail: '/assets/design cup.png',
        nextSlug: 'hutaraja-coffee-shop',
        layoutType: 'ahpek',
        heroBg: '/assets/mockuptotebag.png',
        heroBoxTitle: 'Tentang Ah Pek Kopitiam',
        heroBoxDesc:
          'Ah Pek Kopitiam adalah kedai kopi bergaya kopitiam modern yang menyajikan kopi, teh, roti bakar, dan makanan sederhana dalam suasana nyaman bernuansa tradisional, cocok untuk sarapan atau nongkrong santai dengan harga terjangkau.',
        marketTitle: 'Target Pasar',
        marketParagraphs: [
          'Kolaborasi ini menghadirkan 5 merchandise eksklusif yang menggabungkan nuansa hangat khas Ah Pek Kopitiam dengan elemen visual ikonik kota Surabaya.',
          'Target pasarnya mencakup anak muda yang menyukai desain estetik, pelanggan setia Ah Pek Kopitiam, pecinta visual bertema kota Surabaya, wisatawan, serta pekerja urban yang membutuhkan merchandise fungsional.',
        ],
        logo: '/assets/AHPEKLOGO.png',
        splitGallery: [
          { src: '/assets/designkeychain.png', alt: 'Keychain' },
          { src: '/assets/designgelas.png', alt: 'Mug' },
        ],
        fullBanner: { src: '/assets/mockupshirt.png', alt: 'Shirt Mockup' },
        seamlessBottom: [
          { src: '/assets/mockuptumblr.png', alt: 'Tumbler' },
          { src: '/assets/mockupkeychain.png', alt: 'Keychain' },
          { src: '/assets/mockupgelas.png', alt: 'Mug' },
          { src: '/assets/mockuptotebag.png', alt: 'Totebag' },
        ],
      },
      {
        slug: 'hutaraja-coffee-shop',
        title: 'Hutaraja Coffee Shop',
        thumbnail: '/assets/Final Poster_Kennan A.M._097.png',
        nextSlug: 'isyana-sarasvati',
        layoutType: 'hutaraja',
        heroBg: '/assets/Final Poster_Kennan A.M._097.png',
        boxSubtitle: 'Branding & Visual Identity',
        boxTitle: 'Hutaraja Coffee Shop',
        boxDesc:
          'Perancangan identitas visual dan materi promosi untuk Hutaraja Coffee Shop dengan pendekatan visual hangat yang mengangkat karakter kopi lokal.',
        galleryStack: ['/assets/Final Poster_Kennan A.M._097.png'],
      },
      {
        slug: 'isyana-sarasvati',
        title: 'Isyana Sarasvati',
        thumbnail: '/assets/cover buku.png',
        nextSlug: 'lus-adventures-de-l-art-deco',
        layoutType: 'isyana',
        heroBg: '/assets/CD-Case-Mockup.png',
        boxSubtitle: 'Isyana Sarasvati - Ragu Semesta',
        boxTitle: 'Ragu Semesta',
        boxDesc:
          'Di sini, kami diberi kesempatan untuk menganalisis genre, suasana, gaya, dan emosi lagu-lagu karya Isyana Sarasvati. Proyek ini mencakup identifikasi genre, analisis bagaimana musik Isyana sesuai dengan genre tersebut, contoh lagu tertentu, deskripsi suasana lagu tersebut, dan lagu-lagu terbaik karya Isyana Sarasvati. Kita kemudian diberi tugas untuk menghasilkan album dari salah satu lagu tersebut.',
        logo: '/assets/Coverblkng.png',
        splitGallery: [
          { src: '/assets/CD-Case.png', alt: 'Isyana Ragu Semesta Box' },
          { src: '/assets/4.png', alt: 'Isyana Biography' },
        ],
      },
      {
        slug: 'lus-adventures-de-l-art-deco',
        title: "Lus Adventures De l'Art Deco",
        thumbnail: '/assets/cgcoverRRR.png',
        nextSlug: 'cookie-up-your-day',
        layoutType: 'adventure',
        heroTitle: "Les Aventures De L'Art Deco",
        heroBg: '/assets/cgcoverRRR.png',
        boxSubtitle: "Les Aventures De L'Art Deco",
        boxTitle: 'Tentang Picture Book ini',
        boxDesc:
          'Tugas kuliah untuk membuat buku bergambar berdasarkan gaya seni visual tertentu. Buku bergambar ini didasarkan pada gaya Art Decoratif Prancis yang pertama kali muncul di Paris pada tahun 1910-an. Dalam buku ini, tokoh utamanya dipindahkan ke periode waktu ketika gaya seni visual tertentu ini mulai muncul. Tokoh utamanya adalah seorang mahasiswi muda bernama "Alice" yang kesulitan mengerjakan tugas kuliahnya di bidang seni. Pada malam hari dalam perjalanan pulang, ia menemukan sebuah bangunan tua. Karena penasaran, ia memasuki bangunan tersebut, dan tiba-tiba ia dipindahkan kembali ke tahun 1910-an.',
        logoDefault: '/assets/cgcoverRtr.png',
        logoHover: '/assets/cgcharacterdesign.jpg',
      },
      {
        slug: 'cookie-up-your-day',
        title: 'Cookie up your Day',
        thumbnail: '/assets/Screenshot 2025-04-12 145334.png',
        nextSlug: null,
        layoutType: 'cookie',
        heroTitle: 'Cookie Up Your Day',
        heroBg: '/assets/Stample.png',
        boxSubtitle: 'Advertizing - Kampung Girilaya',
        boxTitle: 'Cookie Up Your Day',
        boxDesc:
          '"Cookie Up Your Day" adalah kampanye yang bertujuan untuk memperluas target pasar kue tradisional Kampung Girilaya ke generasi muda (Gen Z) sekaligus mempromosikan kue Girilaya sebagai produk yang dapat dinikmati kapan saja dan di mana saja, tanpa memandang situasi. Kali ini, kelas Desain Komersial dan Layanan dari Jurusan Desain Komunikasi Visual Universitas Ciputra Surabaya berkolaborasi dengan Kampung Girilaya, sebuah desa yang terletak di Gang 2 RT 3 RW 8, untuk mendesain kampanye yang disebut "Cookie Up Your Day".',
        sideBanner: '/assets/bannercookie.png',
        bottomBillboard: '/assets/BILLBOARDFinal.png',
      },
    ];
  }

  getProjectBySlug(slug) {
    return this.getProjects().find((p) => p.slug === slug) || null;
  }

  getInsights() {
    return [
      {
        slug: 'agensi-kreatif-profesional-untuk-membangun-brand-yang-kuat-dan-relevan',
        title:
          'Agensi Kreatif Profesional untuk Membangun Brand yang Kuat dan Relevan',
        author: 'Kennan Martha',
        date: '21 Oktober 2025',
        cardImage: '/assets/grups.jpg',
        articleImage: '/assets/grups.jpg',
        excerpt:
          'Mengenal peran vital agensi kreatif dalam menghadapi era digital yang kompetitif...',
        blocks: [
          {
            type: 'p',
            text: 'Di era digital yang kompetitif, agensi kreatif memiliki peran penting dalam membantu identitas brand yang kuat, konsisten, dan relevan dengan target audiens. Lebih dari sekedar desain visual, agensi kreatif menggabungkan strategi, kreativitas, dan pemahaman pasar untuk menciptakan solusi komunikasi yang berdampak.',
          },
          { type: 'image' },
          { type: 'h2', text: 'Apa itu agensi kreatif?' },
          {
            type: 'p',
            text: 'Agensi kreatif adalah mitra strategis yang membantu brand dalam merancang dan mengelola komunikasi visual serta kampanye pemasaran. Layanan agensi kreatif mencakup visual branding, brand campaign, konten media sosial, fotografi, hingga konsultasi brand yang dirancang sesuai tujuan bisnis klien.',
          },
          {
            type: 'p',
            text: 'Dengan pendekatan berbasis riset dan kreativitas, agensi kreatif memastikan setiap pesan yang disampaikan brand memiliki makna, konsistensi, dan daya tarik.',
          },
          {
            type: 'h2',
            text: 'Mengapa Bisnis Membutuhkan Agensi Kreatif?',
          },
          {
            type: 'p',
            text: 'Persaingan pasar yang semakin ketat menuntut brand untuk tampil berbeda. Agensi kreatif membantu bisnis untuk:',
          },
          {
            type: 'ul',
            items: [
              'Membangun identitas visual yang profesional dan mudah dikenali: Melalui desain logo, tipografi, dan palet warna yang unik.',
              'Menyampaikan pesan brand secara konsisten di berbagai platform: Memastikan visual dan gaya komunikasi tetap seragam, baik di media sosial maupun media cetak.',
              'Meningkatkan kepercayaan dan engagement audiens: Visual yang berkualitas mencerminkan kredibilitas bisnis dan menarik perhatian target pasar yang tepat.',
              'Mengoptimalkan strategi pemasaran digital yang efektif: Melalui pembuatan konten kreatif yang relevan dengan tren dan kebutuhan audiens.',
            ],
          },
          {
            type: 'p',
            text: 'Dengan dukungan agensi kreatif, brand dapat fokus pada pengembangan bisnis tanpa harus mengelola aspek kreatif secara terpisah.',
          },
          {
            type: 'h2',
            text: 'Layanan Agensi Kreatif yang Kami Tawarkan',
          },
          {
            type: 'numberedServices',
            items: [
              {
                num: '1.',
                name: 'Visual Branding',
                desc: 'Kami menciptakan identitas visual yang merepresentasikan nilai dan karakter brand, mulai dari logo, warna, tipografi, hingga brand guideline yang konsisten.',
              },
              {
                num: '2.',
                name: 'Brand Campaign',
                desc: 'Perencanaan dan eksekusi kampanye brand yang kreatif, relevan, dan berorientasi pada tujuan, baik untuk peluncuran produk, rebranding, maupun kampanye digital.',
              },
              {
                num: '3.',
                name: 'Konten Media Sosial',
                desc: 'Strategi dan produksi konten media sosial yang engaging, storytelling yang kuat, serta visual yang selaras dengan identitas brand untuk meningkatkan interaksi audiens.',
              },
              {
                num: '4.',
                name: 'Fotografi',
                desc: 'Layanan fotografi profesional untuk kebutuhan brand, produk, dan kampanye pemasaran guna menciptakan visual yang autentik dan berkualitas tinggi.',
              },
              {
                num: '5.',
                name: 'Konsultasi Brand',
                desc: 'Pendekatan strategis untuk membantu brand memahami posisi mereka di pasar, menentukan arah komunikasi, dan mengembangkan strategi jangka panjang.',
              },
            ],
          },
          { type: 'h2', text: 'Keunggulan Agensi Kreatif Kami' },
          {
            type: 'p',
            text: 'Sebagai agensi kreatif, kami percaya bahwa desain yang baik harus memiliki tujuan. Kami menggabungkan strategi, kreativitas, dan eksekusi yang matang untuk mengahasilkan solusi yang tidak hanya menarik secara visual, tetapi juga efektif secara bisnis. Kami bekerja secara kolaboratif dengan klien untuk memahami kebutuhan, audiens, dan tujuan brand secara menyeluruh.',
          },
          {
            type: 'h2',
            text: 'Agensi Kreatif sebagai Investasi Jangka Panjang',
          },
          {
            type: 'p',
            text: 'Menggunakan jasa agensi kreatif bukan sekedar pengeluaran, melainkan investasi jangka panjang untuk pertumbuhan brand. Brand yang kuat akan lebih mudah dikenali, dipercaya, dan diingat oleh konsumen.',
          },
          {
            type: 'p',
            text: 'Dengan strategi kreatif yang teapt, bisnis dapat membangun hubungan yang berkelanjutan dengan audiens dan meningkatkan nilai brand di pasar.',
          },
          {
            type: 'h2',
            text: 'Percayakan Brand Anda pada Agensi Kreatif Profesional',
          },
          {
            type: 'p',
            text: 'Jika Anda mencari agensi kreatif yang mampu mengubah ide menjadi komunikasi visual yang bermakna, kami siap menjadi partner strategis Anda. Bersama kami, wujudkan brand yang tidak hanya terlihat meanrik, tetapi juga memiliki dampak nyata.',
          },
        ],
      },
      {
        slug: 'what-s-behind-inicio-studio',
        title: "What's behind Inicio Studio",
        author: 'Kennan Martha',
        date: '21 Oktober 2025',
        cardImage: '/assets/stiker2.jpg',
        articleImage: '/assets/grups.jpg',
        excerpt: 'Inicio Studio adalah agency bisnis yang membuat...',
        blocks: [
          {
            type: 'p',
            text: 'INICIO Studio adalah agency bisnis yang membuat dan mengerjakan projek desain brand. INICIO membantu orang untuk mempermudah dan membantu setiap orang yang sudah memulai atau baru memulai bisnis mereka dari segi branding atau desain. INICIO adalah solusi bagi orang-orang yang tidak paham atau sibuk namun ingin membangun bisnis yang lebih profesional dan efektif.',
          },
          {
            type: 'p',
            text: 'INICIO hadir untuk membantu pebisnis startup membangun brand identity yang jelas, konsisten, dan relevan. Banyak bisnis mengalami kesulitan memahami prefensi visual audiens, memilih gaya komunikasi yang tepat, dan membuat campaign yang efektif. Kami menyederhanakan proses tersebut dengan memberikan panduan desain strategis, visual edentity yang mudah diterapkan, serta solusi branding yang cepat, praktis, dan terukur.',
          },
          { type: 'image' },
          {
            type: 'h2',
            text: 'Peran Agensi Desain dalam Lingkungan Digital yang Berubah Cepat',
          },
          {
            type: 'p',
            text: 'Dalam situasi saat ini, desain tidak lagi sekadar soal estetika. Ini adalah langkah bisnis yang cerdas bagi setiap merek. Organisasi bersaing untuk mendapatkan perhatian, kepercayaan, dan akses ke konsumen. Beberapa firma yang berpesialisasi dalam desain dapat membantu bisnis dalam hal ini. Mereka menggunakan kreativitas, pemahaman teknologi, dan pemikiran cerdas untuk berkomunikasi atas nama merek di dunia yang penuh kebisingan ini.',
          },
          {
            type: 'h3',
            text: '1. Mengubah Ide Menjadi Indetitas Visual yang Unik',
          },
          {
            type: 'p',
            text: 'Identitas merek yang kuat diciptakan dengan sengaja. Hal ini berasal dari keputusan visual yang menyampaikan nilai, audiens, dan posisi bisnis. Biro desain membantu menerjemahkan proses berpikir menjadi sistem visual berupa logo, warna, tipografi, simbol, dan pedoman merek yang menyampaikan siapa merek tersebut. Identitas visual yang konsisten sangat membantu dalam membangun pengenalan merek dan kosistensi di setiap titik kontak.',
          },
          {
            type: 'h3',
            text: '2. Meningkatkan Komunikasi Merek dengan Kreativitas Cerdas',
          },
          {
            type: 'p',
            text: 'Desain yang baik melampaui estetika semata. Ia membantu menyampaikan pesan. Perusahaan desain memahami bahwa tata letak, nada, dan aturan desain adalah faktor yang memengaruhi persepsi orang. Baik itu desain web, cetak brosur, iklan produk, atau iklan online, perusahaan desain meciptakan komunikasi visual yang menarik dan bermakna.',
          },
          {
            type: 'h3',
            text: '3. Meningkatkan Pengalaman Pengguna di Platform Digital',
          },
          {
            type: 'p',
            text: 'Dengan semakin banyaknya bisnis yang beralih ke online, pengalaman pengguna (UX) belum pernah sepenting ini. Perusahaan desain dan desainer tahu cara meciptakan situs web dan aplikasi yang ramah pengguna dan mudah digunakan, serta tidak terlihat seperti aplikasi lain di luar sana. UX yang baik menjaga pelanggan puas dan menghindari masalah.',
          },
          {
            type: 'h3',
            text: '4. Menghubungkan Kreativitas dan Strategi Bisnis',
          },
          {
            type: 'p',
            text: '"Keunggulan utama sebuah agensi desain adalah kombinasi antara kreativitas dan strategi. Agensi desain bukan hanya ahli visualisasi. Mereka adalah pemecah masalah bagi bisnis. Mereka membantu dalam:"',
          },
          {
            type: 'ul',
            items: [
              'Meningkatkan eksposure merek',
              'Meningkatkan loyalitas pelanggan',
              'Bantuan peluncuran merek',
              'Meningkatkan posisi pasar',
              'Meningkatkan nilai yang dirasakan',
            ],
          },
          {
            type: 'p',
            text: 'Denagn memahami pasar dan perilaku konsumen, agensi periklanan memastikan setiap ide kreatif selaras dengan rencana merek.',
          },
          {
            type: 'h3',
            text: '5. Memproduksi Konten yang Sesuai dengan Media Sosial',
          },
          {
            type: 'p',
            text: 'Konten bergerak cepat di internet. Gambar harus menarik perhatian, sesuai dengan setiap platform, dan berfungsi dengan baik. Biro desain dapat menciptakan konten berkualitas seperti gambar media sosial, video pendek, kampanye cepat, fotografi, dan materi promosi yang menceritakan kisah yang baik. Cerita yang baik menghasilkan konten yang efektif.',
          },
          {
            type: 'h3',
            text: '6. Meyediakan Keahlian Ahli dan Ide Baru',
          },
          {
            type: 'p',
            text: 'Banyak perusahaan terjebak atau kekurangan talenta desain yang dibutuhkan di dalam perusahaan. Perusahaan desain memperkerjakan berbagai sumber talenta: direktur kreatif, desainer, strategis, fotografer, ilustrator, dan desainer UI/UX, dan mereka bekerja sama untuk solusi end-to-end. Memiliki paparan talenta yang beragam memungkinkan mereka melihat masalah dari sudut pandang yang berbeda dan mengembangkan solusi inovatif dan kuat.',
          },
          {
            type: 'h3',
            text: '7. Membangun Kepercayaan Melalui Profesionalisme dan Kosistensi',
          },
          {
            type: 'p',
            text: 'Biro desain grafis menjadi mitra jangka panjang dan memastikan visual tetap konsisten untuk segala hal. Visual dapat berkontribusi dalam membangun kepercayaan dan membuat merek terlihat profesional dan kredibel di mata pelanggan. Pada akhirnya, hal ini meningkatkan kepercayaan pelanggan terhadap merek.',
          },
          { type: 'h3', text: 'Kesimpulan' },
          {
            type: 'p',
            text: 'Mitra Strategis untuk Merek Modern Di dunia digital saat ini, desain sangat penting. Perusahaan desain dapat memberikan makna dan kreativitas pada branding, membantu merek menjadi unik dan berkomunikasi dengan lebih baik. Baik itu membangun identitas merek, membuat konten media sosial, atau meningkatkan pengalaman pelanggan, perusahaan desain sangat penting dalam mendefinisikan dan mempengaruhi presepsi merek di benak pelanggan.',
          },
        ],
      },
    ];
  }

  getInsightBySlug(slug) {
    return this.getInsights().find((item) => item.slug === slug) || null;
  }
}

export default new SiteDataRepository();