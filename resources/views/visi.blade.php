<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <!-- PENGATURAN: Judul yang tampil di tab browser Anda -->
    <title>Visi dan Misi - Pondok Pesantren Modern Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pondok Pesantren Modern Khafidul Quran Pemalang" name="description">

    <!-- PENGATURAN: Gambar Icon Kecil di Tab Browser -->
    <link href="img/logo.png" rel="icon">

    <!-- PENGATURAN: Hubungan ke Google Fonts (Jenis Huruf Rubik & Nunito) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- PENGATURAN: Library FontAwesome & Bootstrap Icons (Untuk icon medsos, alamat, dll) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- PENGATURAN: Pemanggilan file CSS framework Bootstrap & File CSS Utama Anda -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color: #f8f9fa;">

    <!-- ========================================================================= -->
    <!-- ELEMENT: BARIS PALING ATAS (Topbar) - Berisi Kontak Singkat & Sosmed       -->
    <!-- ========================================================================= -->
    <div class="container-fluid px-5 d-none d-lg-block" style="background-color: #004b87;">
        <div class="row gx-0">
            <!-- Bagian Kiri: Info Alamat & Email Singkat -->
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 40px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl Gunung Muria No 07 Desa Jatirejo</small>
                    <small class="text-light"><i class="fa fa-envelope me-2"></i>ponpeskhafidulquran@gmail.com</small>
                </div>
            </div>
            <!-- Bagian Kanan: Link Icon Social Media (Ganti tanda # dengan link akun sosmed Anda) -->
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 40px;">
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-whatsapp"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-tiktok"></i></a>
                    <span class="text-light me-3">|</span>
                    <!-- Tombol khusus Portal Login Sistem Pengurus/Santri -->
                    <a class="btn btn-sm btn-outline-light px-3 py-1 text-uppercase fw-bold" href="#" style="font-size: 0.75rem; border-radius: 4px;">Portal Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- ELEMENT: MENU UTAMA (Navbar Berwarna Putih Bersih)                        -->
    <!-- ========================================================================= -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-5 py-3">
            <!-- Logo & Nama Sekolah -->
            <a href="{{ route('beranda') }}" class="navbar-brand p-0 d-flex align-items-center">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 50px; width: auto;" class="me-3">
                <div class="lh-1">
                    <span class="fw-bold text-primary text-uppercase d-block" style="font-size: 0.9rem; letter-spacing: 0.5px;">PONDOK PESANTREN MODERN</span>
                    <span class="fw-bold text-uppercase" style="font-size: 1.1rem; color: #004b87;">KHAFIDUL QURAN PEMALANG</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <!-- Daftar Menu -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 align-items-lg-center">
                    <a href="{{ route('beranda') }}" class="nav-item nav-link fw-bold text-uppercase mx-1" style="font-size: 0.85rem;">Beranda</a>
                    
                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-primary active" data-bs-toggle="dropdown" style="font-size: 0.85rem;">Profil</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('sejarah') }}" class="dropdown-item">Sejarah</a>
                            <a href="{{ route('visi') }}" class="dropdown-item">Visi Dan Misi</a>
                            <a href="{{ route('pengurus') }}" class="dropdown-item">Data Pengurus</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark" data-bs-toggle="dropdown" style="font-size: 0.85rem;">Jenjang</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('madrasah-tsanawiyah') }}" class="dropdown-item">Madrasah Tsanawiyah</a>
                            <a href="{{ route('madrasah-aliyah') }}" class="dropdown-item">Madrasah Aliyah</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark" data-bs-toggle="dropdown" style="font-size: 0.85rem;">Berita</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('kabar-pondok') }}" class="dropdown-item">Kabar Pondok</a>
                            <a href="{{ route('artikel') }}" class="dropdown-item">Artikel Dan Kajian</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark" data-bs-toggle="dropdown" style="font-size: 0.85rem;">Dokumen</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('santri') }}" class="dropdown-item">Santri</a>
                            <a href="{{ route('alumni') }}" class="dropdown-item">Alumni</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark" data-bs-toggle="dropdown" style="font-size: 0.85rem;">Galeri</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('foto') }}" class="dropdown-item">Foto</a>
                            <a href="{{ route('video') }}" class="dropdown-item">Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- ========================================================================= -->
    <!-- ELEMENT: BANNER JUDUL HALAMAN (Warna Gradasi Biru Tua)                    -->
    <!-- ========================================================================= -->
    <div class="container-fluid" style="position: relative; background: linear-gradient(135deg, #004b87 0%, #003366 100%); min-height: 300px; display: flex; align-items: center; color: white; padding: 40px 0 90px 0;">
        <div class="container px-5 text-center text-lg-start">
            <h1 class="m-0 text-white" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2;">Visi & <br><span class="text-warning">Misi Kami</span></h1>
            <!-- Jalur Pemandu (Breadcrumb Navigation) -->
            <div class="mt-4" style="display: inline-flex; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 8px 25px; border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.9rem;">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a> 
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem; line-height: 24px;"></i> 
                <span class="text-warning fw-bold">Visi & Misi</span>
            </div>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- AREA UTAMA: TEMPAT SELURUH KONTEN DI DALAM KOTAK PUTIH                    -->
    <!-- ========================================================================= -->
    <div class="container mb-5">
        <!-- Kotak Putih Konten Utama -->
        <div class="shadow-sm" style="background: #fff; padding: 50px 35px; border-radius: 24px; margin-top: -40px; position: relative; z-index: 5;">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-10">
                    
                    <!-- ========================================== -->
                    <!-- KONTEN: BAGIAN VISI UTAMA                  -->
                    <!-- ========================================== -->
                    <div class="text-center mb-5">
                        <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Arah dan Tujuan Jangka Panjang</span>
                        <h2 class="fw-bold h2 mt-2 mb-4" style="color: #091E3E;">Visi Kami</h2>
                        <!-- Kotak Highlight Berlatar Abu-Abu dan Bergaris Atas Kuning untuk Teks Visi -->
                        <div class="mt-4 p-4 bg-light rounded shadow-sm border-top border-4 border-warning" style="border-radius: 12px !important;">
                            <p class="mb-0" style="font-size: 1.15rem; text-align: justify; line-height: 1.7; font-style: italic; color: #444;">
                                "Mewujudkan <strong>Insan Rabbani</strong>, yaitu insan yang terdidik untuk mencapai peringkat insan kamil (manusia paripurna) dalam kehidupannya di dunia dan di akhirat melalui keselarasan akal, fitrah, kalbu, dan Al-Qur'an."
                            </p>
                        </div>
                    </div>
                    
                    <!-- Garis Batas Pembatas antara Visi dan Misi -->
                    <hr class="my-5" style="border-color: #edf2f7;">
                    
                    <!-- ========================================== -->
                    <!-- KONTEN: BAGIAN POIN-POIN MISI              -->
                    <!-- ========================================== -->
                    <div class="mb-4">
                        <div class="text-center mb-5">
                            <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Langkah-Langkah Strategis</span>
                            <h2 class="fw-bold h2 mt-2 mb-4" style="color: #091E3E;">Misi Kami</h2>
                        </div>
                        
                        <!-- Kotak Misi Item 1 (Garis batas kiri hijau #21a544) -->
                        <div class="d-flex mb-4 p-4 bg-light rounded shadow-sm" style="border-left: 5px solid #21a544; border-radius: 0 15px 15px 0 !important;">
                            <!-- Bulatan Angka Hijau -->
                            <div class="d-flex align-items-center justify-content-center fw-bold text-white me-4 flex-shrink-0" style="min-width: 40px; height: 40px; background: #21a544; border-radius: 50%;">1</div>
                            <p class="mb-0" style="font-size: 1.05rem; text-align: justify; line-height: 1.6; color: #444;">Membina Insan Rabbani melalui keselarasan akal, fitrah, dan kalbu dengan cahaya Al-Qur'an, serta menjadikan hafalan Kalamullah sebagai kekuatan intelektual and spiritual santri.</p>
                        </div>
                        
                        <!-- Kotak Misi Item 2 -->
                        <div class="d-flex mb-4 p-4 bg-light rounded shadow-sm" style="border-left: 5px solid #21a544; border-radius: 0 15px 15px 0 !important;">
                            <!-- Bulatan Angka Hijau -->
                            <div class="d-flex align-items-center justify-content-center fw-bold text-white me-4 flex-shrink-0" style="min-width: 40px; height: 40px; background: #21a544; border-radius: 50%;">2</div>
                            <p class="mb-0" style="font-size: 1.05rem; text-align: justify; line-height: 1.6; color: #444;">Menjadikan lembaga sebagai pusat pendidikan dan kajian ilmu-ilmu Al-Qur'an serta membangun pondasi pemikiran Islam yang logis and rasional di tengah perkembangan zaman.</p>
                        </div>
                        
                        <!-- Kotak Misi Item 3 -->
                        <div class="d-flex mb-4 p-4 bg-light rounded shadow-sm" style="border-left: 5px solid #21a544; border-radius: 0 15px 15px 0 !important;">
                            <!-- Bulatan Angka Hijau -->
                            <div class="d-flex align-items-center justify-content-center fw-bold text-white me-4 flex-shrink-0" style="min-width: 40px; height: 40px; background: #21a544; border-radius: 50%;">3</div>
                            <p class="mb-0" style="font-size: 1.05rem; text-align: justify; line-height: 1.6; color: #444;">Melaksanakan pendidikan yang menanamkan cinta pada kebenaran dan kebijaksanaan agar santri mampu memberikan kontribusi nyata serta memecahkan persoalan sosial berdasarkan prinsip akhlakul karimah.</p>
                        </div>
                        
                        <!-- Kotak Misi Item 4 -->
                        <div class="d-flex mb-4 p-4 bg-light rounded shadow-sm" style="border-left: 5px solid #21a544; border-radius: 0 15px 15px 0 !important;">
                            <!-- Bulatan Angka Hijau -->
                            <div class="d-flex align-items-center justify-content-center fw-bold text-white me-4 flex-shrink-0" style="min-width: 40px; height: 40px; background: #21a544; border-radius: 50%;">4</div>
                            <p class="mb-0" style="font-size: 1.05rem; text-align: justify; line-height: 1.6; color: #444;">Mengembangkan potensi santri dalam penguasaan teknologi informasi dan bahasa asing sebagai bekal dakwah di era globalisasi tanpa meninggalkan khazanah kitab kuning.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- ELEMENT: AREA BAWAH HALAMAN (Footer Berlatar Gelap Gelap Terkunci #1a1a1a) -->
    <!-- ========================================================================= -->
    <div class="container-fluid pt-5 mt-5" style="background-color: #1a1a1a !important; color: #ced4da !important;">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Kolom Footer 1: Logo, Slogan Singkat, & Tombol Sosial Media Bulat -->
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center mb-4">
                        <img src="img/logo.png" alt="Logo" style="width: 40px;" class="me-2">
                    </div>
                    <p class="mb-4" style="color: #ced4da !important; font-size: 0.9rem;">Mencetak generasi Qur'ani yang modern, berwawasan global, dan menjunjung tinggi nilai-nilai keislaman.</p>
                    <div class="d-flex">
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Kolom Footer 2: Tautan Pintasan Navigasi Internal Cepat -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4" style="color: #ffffff !important;">Tautan</h5>
                    <div class="d-flex flex-column justify-content-start gap-2" style="font-size: 0.9rem;">
                        <a class="mb-2 text-decoration-none" href="index.html" style="color: #ced4da !important;">Profil</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Akademik</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Informasi</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Database</a>
                        <a class="text-decoration-none" href="#" style="color: #ced4da !important;">Galeri</a>
                    </div>
                </div>

                <!-- Kolom Footer 3: Detail Info Alamat, Telepon & Email Kantor Yayasan -->
                <div class="col-lg-5 col-md-6">
                    <h5 class="text-white mb-4" style="color: #ffffff !important;">Informasi Kontak</h5>
                    <p style="color: #ced4da !important; font-size: 0.9rem;">Jangan ragu untuk menghubungi kami!</p>
                    <div class="d-flex mb-2" style="font-size: 0.9rem;">
                        <i class="bi bi-geo-alt-fill text-danger me-3"></i>
                        <p class="mb-0" style="color: #ced4da !important;">Jatirejo, Ampelgading, Pemalang</p>
                    </div>
                    <div class="d-flex mb-2" style="font-size: 0.9rem;">
                        <i class="bi bi-telephone-fill text-danger me-3"></i>
                        <p class="mb-0" style="color: #ced4da !important;">082329117255</p>
                    </div>
                    <div class="d-flex mb-4" style="font-size: 0.9rem;">
                        <i class="bi bi-envelope-fill text-danger me-3"></i>
                        <p class="mb-0" style="color: #ced4da !important;">ponpeskhafidulquran@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris Paling Bawah: Teks Hak Cipta Kepemilikan Website -->
        <div class="container">
            <div class="py-4" style="border-top: 1px solid #343a40 !important;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0" style="color: #ced4da !important; font-size: 0.9rem;">Copyright &copy; 2026 Fajri Maulana.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ELEMENT: Tombol panah kecil otomatis untuk kembali scrolling ke atas -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- SCRIPT JAVASCRIPT: Mengatur fungsionalitas interaktif menu dropdown & animasi -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>