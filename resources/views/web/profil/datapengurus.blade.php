<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <!-- PENGATURAN: Judul yang tampil di tab browser Anda[cite: 4] -->
    <title>Data Pengurus - Pondok Pesantren Modern Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pondok Pesantren Modern Khafidul Quran Pemalang" name="description">

    <!-- PENGATURAN: Gambar Icon Kecil di Tab Browser -->
    <link href="img/logo.png" rel="icon">

    <!-- PENGATURAN: Hubungan ke Google Fonts (Jenis Huruf Rubik & Nunito)[cite: 4] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- PENGATURAN: Library FontAwesome & Bootstrap Icons (Untuk icon medsos, alamat, dll)[cite: 4] -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- PENGATURAN: Pemanggilan file CSS framework Bootstrap & File CSS Utama Anda[cite: 4] -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color: #f8f9fa;">

    <!-- ========================================================================= -->
    <!-- ELEMENT: BARIS PALING ATAS (Topbar) - Berisi Kontak Singkat & Sosmed       -->
    <!-- ========================================================================= -->
    <div class="container-fluid px-5 d-none d-lg-block" style="background-color: #004b87;">
        <div class="row gx-0">
            <!-- Bagian Kiri: Info Alamat & Email Singkat[cite: 4] -->
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 40px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl Gunung Muria No 07 Desa Jatirejo</small>
                    <small class="text-light"><i class="fa fa-envelope me-2"></i>ponpeskhafidulquran@gmail.com</small>
                </div>
            </div>
            <!-- Bagian Kanan: Link Icon Social Media (Ganti tanda # dengan link akun sosmed Anda)[cite: 4] -->
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
            <h1 class="m-0 text-white" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2;">Data<br><span class="text-warning">Pengurus Pondok</span></h1>
            <!-- Jalur Pemandu (Breadcrumb Navigation)[cite: 4] -->
            <div class="mt-4" style="display: inline-flex; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 8px 25px; border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.9rem;">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a> 
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem; line-height: 24px;"></i> 
                <span class="text-warning fw-bold">Data Pengurus</span>
            </div>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- AREA UTAMA: TEMPAT KARTU DATA PENGURUS STRUKTUR ORGANISASI               -->
    <!-- ========================================================================= -->
    <div style="padding: 60px 0; background-color: #f8f9fa; margin-top: -40px; position: relative; z-index: 5;">
        <div class="container">
            <!-- Grid Layout untuk Kartu Pengurus[cite: 4] -->
            <div class="row g-4 justify-content-center">
                
                <!-- KARTU PENGURUS 1[cite: 4] -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #fff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: center; height: 100%; position: relative;">
                        <!-- Latar Belakang Gradasi Atas Kartu[cite: 4] -->
                        <div style="height: 120px; background: linear-gradient(to right, #00d2ff 0%, #3a7bd5 100%); position: relative;">
                            <!-- Wadah Foto Profil[cite: 4] -->
                            <div style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 2;">
                                <img src="img/kyai1.jpeg" alt="Muthia Nur Aulia" style="width: 110px; height: 110px; border-radius: 50%; border: 5px solid #fff; object-fit: cover; background: #f8f9fa; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                        <!-- Deskripsi Data Nama & Jabatan Pengurus[cite: 4] -->
                        <div style="padding: 70px 20px 35px 20px;">
                            <h5 style="font-weight: 800; font-size: 1.1rem; color: #333; margin-bottom: 5px; text-transform: uppercase;">MUTHIA NUR AULIA</h5>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px; min-height: 40px;">Lurah Putri</p>
                            <!-- Gg: Ditambahkan data-bs-toggle dan target modal1 -->
                            <button data-bs-toggle="modal" data-bs-target="#modalPengurus1" style="background-color: #00529c; color: #fff; padding: 8px 25px; border: none; border-radius: 50px; font-weight: 700; font-size: 0.85rem; transition: 0.3s;">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- KARTU PENGURUS 2[cite: 4] -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #fff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: center; height: 100%; position: relative;">
                        <!-- Latar Belakang Gradasi Atas Kartu[cite: 4] -->
                        <div style="height: 120px; background: linear-gradient(to right, #00d2ff 0%, #3a7bd5 100%); position: relative;">
                            <!-- Wadah Foto Profil[cite: 4] -->
                            <div style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 2;">
                                <img src="img/kyai2.jpg" alt="Kholilatun Nahdhiyyah" style="width: 110px; height: 110px; border-radius: 50%; border: 5px solid #fff; object-fit: cover; background: #f8f9fa; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                        <!-- Deskripsi Data Nama & Jabatan Pengurus[cite: 4] -->
                        <div style="padding: 70px 20px 35px 20px;">
                            <h5 style="font-weight: 800; font-size: 1.1rem; color: #333; margin-bottom: 5px; text-transform: uppercase;">KHOLILATUN NAHDHIYYAH</h5>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px; min-height: 40px;">Pendamping Kamar Putri</p>
                            <!-- Gg: Ditambahkan data-bs-toggle dan target modal2 -->
                            <button data-bs-toggle="modal" data-bs-target="#modalPengurus2" style="background-color: #00529c; color: #fff; padding: 8px 25px; border: none; border-radius: 50px; font-weight: 700; font-size: 0.85rem; transition: 0.3s;">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- KARTU PENGURUS 3[cite: 4] -->
                <div class="col-lg-4 col-md-6">
                    <div style="background: #fff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: center; height: 100%; position: relative;">
                        <!-- Latar Belakang Gradasi Atas Kartu[cite: 4] -->
                        <div style="height: 120px; background: linear-gradient(to right, #00d2ff 0%, #3a7bd5 100%); position: relative;">
                            <!-- Wadah Foto Profil[cite: 4] -->
                            <div style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 2;">
                                <img src="img/kyai3.jpeg" alt="Anggun Dewi Nilasari" style="width: 110px; height: 110px; border-radius: 50%; border: 5px solid #fff; object-fit: cover; background: #f8f9fa; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                        <!-- Deskripsi Data Nama & Jabatan Pengurus[cite: 4] -->
                        <div style="padding: 70px 20px 35px 20px;">
                            <h5 style="font-weight: 800; font-size: 1.1rem; color: #333; margin-bottom: 5px; text-transform: uppercase;">ANGGUN DEWI NILASARI</h5>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px; min-height: 40px;">Jamiyyah Putri</p>
                            <!-- Gg: Ditambahkan data-bs-toggle dan target modal3 -->
                            <button data-bs-toggle="modal" data-bs-target="#modalPengurus3" style="background-color: #00529c; color: #fff; padding: 8px 25px; border: none; border-radius: 50px; font-weight: 700; font-size: 0.85rem; transition: 0.3s;">Lihat Detail</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- ELEMENT: KUMPULAN JENDELA POP-UP (Bootstrap Modals Detail Pengurus)       -->
    <!-- ========================================================================= -->
    
    <!-- POP-UP DETAIL PENGURUS 1 -->
    <div class="modal fade" id="modalPengurus1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 15px; border: none; overflow: hidden;">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #004b87, #003366);">
                    <h5 class="modal-title fw-bold text-white text-uppercase" style="font-size: 1rem;"><i class="fas fa-user-circle me-2"></i>Detail Profil Pengurus</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-start">
                    <div class="text-center mb-4">
                        <img src="img/kyai1.jpeg" alt="Muthia Nur Aulia" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid #004b87; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 class="fw-bold mt-2 mb-0" style="color: #004b87; font-size: 1.25rem;">MUTHIA NUR AULIA</h4>
                        <span class="badge bg-success px-3 py-2 rounded-pill mt-1" style="font-size: 0.8rem;">Lurah Putri</span>
                    </div>
                    <table class="table table-striped table-bordered m-0" style="font-size: 0.9rem;">
                        <tbody>
                            <tr><th style="width: 35%; color: #333;"><i class="fas fa-id-card text-primary me-2"></i>Jabatan</th><td>Lurah Putri</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-venus-mars text-primary me-2"></i>Jenis Kelamin</th><td>Perempuan</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-map-marker-alt text-primary me-2"></i>Alamat Asal</th><td>Pemalang, Jawa Tengah</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-graduation-cap text-primary me-2"></i>Pendidikan</th><td>S1 Pendidikan Agama Islam</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-calendar-alt text-primary me-2"></i>Masa Bakti</th><td>2025 - Sekarang</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal" style="border-radius: 50px; font-size: 0.85rem; fw-bold">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- POP-UP DETAIL PENGURUS 2 -->
    <div class="modal fade" id="modalPengurus2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 15px; border: none; overflow: hidden;">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #004b87, #003366);">
                    <h5 class="modal-title fw-bold text-white text-uppercase" style="font-size: 1rem;"><i class="fas fa-user-circle me-2"></i>Detail Profil Pengurus</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-start">
                    <div class="text-center mb-4">
                        <img src="img/kyai2.jpg" alt="Kholilatun Nahdhiyyah" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid #004b87; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 class="fw-bold mt-2 mb-0" style="color: #004b87; font-size: 1.25rem;">KHOLILATUN NAHDHIYYAH</h4>
                        <span class="badge bg-success px-3 py-2 rounded-pill mt-1" style="font-size: 0.8rem;">Pendamping Kamar Putri</span>
                    </div>
                    <table class="table table-striped table-bordered m-0" style="font-size: 0.9rem;">
                        <tbody>
                            <tr><th style="width: 35%; color: #333;"><i class="fas fa-id-card text-primary me-2"></i>Jabatan</th><td>Pendamping Kamar Putri</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-venus-mars text-primary me-2"></i>Jenis Kelamin</th><td>Perempuan</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-map-marker-alt text-primary me-2"></i>Alamat Asal</th><td>Pekalongan, Jawa Tengah</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-graduation-cap text-primary me-2"></i>Pendidikan</th><td>Aliyah (Tahfidz Wal Qira'at)</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-calendar-alt text-primary me-2"></i>Masa Bakti</th><td>2024 - Sekarang</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal" style="border-radius: 50px; font-size: 0.85rem; fw-bold">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- POP-UP DETAIL PENGURUS 3 -->
    <div class="modal fade" id="modalPengurus3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 15px; border: none; overflow: hidden;">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #004b87, #003366);">
                    <h5 class="modal-title fw-bold text-white text-uppercase" style="font-size: 1rem;"><i class="fas fa-user-circle me-2"></i>Detail Profil Pengurus</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-start">
                    <div class="text-center mb-4">
                        <img src="img/kyai3.jpeg" alt="Anggun Dewi Nilasari" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid #004b87; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 class="fw-bold mt-2 mb-0" style="color: #004b87; font-size: 1.25rem;">ANGGUN DEWI NILASARI</h4>
                        <span class="badge bg-success px-3 py-2 rounded-pill mt-1" style="font-size: 0.8rem;">Jamiyyah Putri</span>
                    </div>
                    <table class="table table-striped table-bordered m-0" style="font-size: 0.9rem;">
                        <tbody>
                            <tr><th style="width: 35%; color: #333;"><i class="fas fa-id-card text-primary me-2"></i>Jabatan</th><td>Jamiyyah Putri</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-venus-mars text-primary me-2"></i>Jenis Kelamin</th><td>Perempuan</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-map-marker-alt text-primary me-2"></i>Alamat Asal</th><td>Tegal, Jawa Tengah</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-graduation-cap text-primary me-2"></i>Pendidikan</th><td>S1 Komunikasi Penyiaran Islam</td></tr>
                            <tr><th style="color: #333;"><i class="fas fa-calendar-alt text-primary me-2"></i>Masa Bakti</th><td>2026 - Sekarang</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal" style="border-radius: 50px; font-size: 0.85rem; fw-bold">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ========================================================================= -->
    <!-- ELEMENT: AREA BAWAH HALAMAN (Footer Berlatar Gelap Terkunci #1a1a1a)       -->
    <!-- ========================================================================= -->
    <div class="container-fluid pt-5 mt-5" style="background-color: #1a1a1a !important; color: #ced4da !important;">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Kolom Footer 1: Logo, Slogan Singkat, & Tombol Sosial Media Bulat[cite: 4] -->
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

                <!-- Kolom Footer 2: Tautan Pintasan Navigasi Internal Cepat[cite: 4] -->
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

                <!-- Kolom Footer 3: Detail Info Alamat, Telepon & Email Kantor Yayasan[cite: 4] -->
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

        <!-- Baris Paling Bawah: Teks Hak Cipta Kepemilikan Website[cite: 4] -->
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

    <!-- SCRIPT JAVASCRIPT: Mengatur fungsionalitas interaktif menu dropdown & animasi[cite: 4] -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>