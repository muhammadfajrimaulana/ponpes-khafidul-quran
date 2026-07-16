<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Madrasah Tsanawiyah - Pondok Pesantren Modern Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pondok Pesantren Modern Khafidul Quran Pemalang" name="description">

    <link href="img/logo.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color: #f8f9fa;">

    <!-- TOPBAR -->
    <div class="container-fluid px-5 d-none d-lg-block" style="background-color: #004b87;">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 40px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl Gunung Muria No 07 Desa Jatirejo</small>
                    <small class="text-light"><i class="fa fa-envelope me-2"></i>ponpeskhafidulquran@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 40px;">
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-whatsapp"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i class="fab fa-tiktok"></i></a>
                    <span class="text-light me-3">|</span>
                    <a class="btn btn-sm btn-outline-light px-3 py-1 text-uppercase fw-bold" href="#" style="font-size: 0.75rem; border-radius: 4px;">Portal Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
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
                            <a href="{{ route('madrasah-aliyah') }}" class="dropdown-item">Madrasah Aliyah JAtirejo</a>
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

    <!-- HEADER CONTENT -->
    <div class="container-fluid" style="position: relative; background: linear-gradient(135deg, #00529c 0%, #003366 100%); min-height: 300px; display: flex; align-items: center; color: white; padding: 40px 0 90px 0;">
        <div class="container px-5 text-center text-lg-start">
            <p class="text-warning fw-bold mb-1" style="letter-spacing: 2px; font-size: 0.9rem;">JENJANG PENDIDIKAN</p>
            <h1 class="m-0 text-white" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2;">Madrasah Tsanawiyah<br><span class="text-warning">(MTs) Jatirejo</span></h1>
            <div class="mt-4" style="display: inline-flex; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 8px 25px; border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.9rem;">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a> 
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem; line-height: 24px;"></i> 
                <span class="text-warning fw-bold">MTs MDI Jatirejo</span>
            </div>
        </div>
    </div>

    <!-- SECTION CONTENT -->
    <section style="padding: 60px 0; background-color: #f0f9ff; margin-top: -40px; position: relative; z-index: 5;">
        <div class="container px-4">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div style="position: sticky; top: 120px; z-index: 1;">
                        <div style="background: white; padding: 12px; border-radius: 25px; box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);" class="mb-4">
                            <img src="img/PAI.jpeg" alt="Prodi PAI" class="img-fluid rounded w-100" style="border-radius: 15px !important;">
                        </div>
                        <div class="p-4 bg-white rounded shadow-sm border" style="border-radius: 20px !important;">
                            <h6 class="fw-bold mb-2 text-dark"><i class="fas fa-certificate text-warning me-2"></i> Status Akreditasi</h6>
                            <hr>
                            <p class="small text-muted mb-0">Terakreditasi <strong>BAIK</strong> oleh LAMDIK 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Profil Program Studi</span>
                    <h2 class="fw-bold mb-4" style="color: #2d3436; font-weight: 800;">Madrasah Tsanawiyah</h2>
                    <div class="text-muted mb-5" style="line-height: 1.9; text-align: justify;">
                        <p>Jenjang Pendirikan Madrasah Tsanawiyah Majelis Dakwah Islamiyah Jatirejo</p>
                        <p>..</p>
                        <div id="moreText" style="display: none;">
                            <p>Sejak awal perumusannya, kurikulum Prodi PAI dirancang dengan pendekatan KKNI Level 6...</p>
                        </div>
                        <button onclick="toggleText()" id="btnReadMore" class="btn btn-outline-primary rounded-pill px-4 fw-bold mt-2" style="font-size: 0.85rem; border-width: 2px;">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <ul class="nav nav-pills mb-4" id="prodiTab" role="tablist" style="display: flex; flex-wrap: nowrap; overflow-x: auto; padding-bottom: 5px;">
                        <li class="nav-item" style="white-space: nowrap;"><a class="nav-link active" data-bs-toggle="pill" href="#visi" style="background: #fff; color: #004a99; border: 1px solid #ddd; border-radius: 50px; margin-right: 10px; font-weight: 600; font-size: 0.9rem;">Visi & Misi</a></li>
                        <li class="nav-item" style="white-space: nowrap;"><a class="nav-link" data-bs-toggle="pill" href="#tujuan" style="background: #fff; color: #004a99; border: 1px solid #ddd; border-radius: 50px; margin-right: 10px; font-weight: 600; font-size: 0.9rem;">Tujuan</a></li>
                        <li class="nav-item" style="white-space: nowrap;"><a class="nav-link" data-bs-toggle="pill" href="#strategi" style="background: #fff; color: #004a99; border: 1px solid #ddd; border-radius: 50px; margin-right: 10px; font-weight: 600; font-size: 0.9rem;">Strategi</a></li>
                    </ul>
                    <div class="tab-content bg-white p-4 border shadow-sm" style="border-radius: 20px;">
                        <div class="tab-pane fade show active" id="visi">
                            <h5 class="fw-bold text-dark mb-3">Visi</h5>
                            <p class="font-italic text-secondary border-start border-warning border-4 ps-3">"Menjadi Jenjang pendidikan yang unggul dalam pengembangan keilmuan dan praktik pendidikan Islam berbasis moderasi beragama, teknologi pendidikan, dan kearifan."</p>
                            <h5 class="fw-bold text-dark mt-4 mb-3">Misi</h5>
                            <ul class="text-muted small" style="line-height: 1.8;">
                                <li>Menyelenggarakan pendidikan dan pembelajaran Pendidikan Agama Islam yang bermutu...</li>
                                <li>Mengembangkan penelitian di bidang Pendidikan Agama Islam yang inovatif...</li>
                                <li>Melaksanakan pengabdian kepada masyarakat berbasis hasil penelitian...</li>
                                <li>Menghasilkan lulusan yang memiliki kompetensi pedagogik, profesional, sosial...</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="tujuan">
                            <h5 class="fw-bold text-dark mb-3">Tujuan Pendidikan</h5>
                            <p class="text-muted">Menyelenggarakan pendidikan dan pembelajaran Pendidikan Agama Islam yang bermutu, berbasis Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Outcome Based Education (OBE), serta adaptif terhadap perkembangan ilmu pengetahuan dan teknologi.</p>
                        </div>
                        <div class="tab-pane fade" id="strategi">
                            <h5 class="fw-bold text-dark mb-3">Strategi Pengembangan</h5>
                            <p class="text-muted">Meningkatkan kualitas pendidikan dan penelitian di bidang Pendidikan Agama Islam melalui pengembangan kurikulum, peningkatan kapasitas dosen, serta penguatan kerjasama dengan berbagai lembaga pendidikan dan komunitas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN -->
    <section class="py-5 bg-white">
        <div class="container text-center px-4">
            <h3 class="fw-bold mb-5" style="font-weight: 800;">Keunggulan <span class="text-primary">MTs MDI Jatirejo</span></h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="shadow-sm" style="background: white; padding: 30px; border-radius: 20px; height: 100%; border: 1px solid #eee;">
                        <i class="fas fa-book-reader fa-3x text-warning mb-4"></i>
                        <h5 class="fw-bold">Kurikulum Terpadu</h5>
                        <p class="text-muted small mb-0">Sinkronisasi kurikulum Nasional dengan penguatan Ilmu Diniyah Pesantren.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shadow-sm" style="background: white; padding: 30px; border-radius: 20px; height: 100%; border: 1px solid #eee;">
                        <i class="fas fa-quran fa-3x text-warning mb-4"></i>
                        <h5 class="fw-bold">Tahfidz Intensif</h5>
                        <p class="text-muted small mb-0">Program hafalan Al-Qur'an dengan metode khusus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shadow-sm" style="background: white; padding: 30px; border-radius: 20px; height: 100%; border: 1px solid #eee;">
                        <i class="fas fa-users fa-3x text-warning mb-4"></i>
                        <h5 class="fw-bold">Lingkungan Islami</h5>
                        <p class="text-muted small mb-0">Ekosistem pendidikan yang kondusif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
<!-- GANTI BAGIAN CTA LAMA ANDA DENGAN KODE INI -->
<div class="container my-5 px-4">
    <div class="text-center shadow-lg" style="background-color: #0d47a1; border-radius: 20px; padding: 50px 30px; color: white; position: relative; overflow: hidden;">
        
        <!-- Judul -->
        <h2 class="fw-bold mb-3" style="font-weight: 700;"> <span style="color: #ffc107;">Wujudkan Masa Depan Qur'ani</span></h2>
        
        <!-- Deskripsi -->
        <p class="mb-4" style="max-width: 600px; margin: 0 auto; opacity: 0.9;">
            Pendaftaran santri baru tahun ajaran 2026/2027 telah dibuka! Jadilah bagian dari lembaga yang mengedepankan kualitas dan nilai-nilai Islami.
        </p>

        <!-- Tombol -->
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mt-4">
            <a href="#" class="btn btn-warning px-4 py-2 fw-bold" style="border-radius: 8px; color: #000;">DAFTAR SEKARANG</a>
            <a href="#" class="btn btn-outline-light px-4 py-2 fw-bold" style="border-radius: 8px;">HUBUNGI ADMIN</a>
        </div>

        <!-- Info Tambahan -->
        <div class="mt-4" style="font-size: 0.85rem; opacity: 0.8;">
            <i class="fas fa-info-circle me-1"></i> PENDAFTARAN TAHUN AJARAN 2026/2027 MASIH DIBUKA
        </div>
    </div>
</div>

    <!-- FOOTER -->
    <div class="container-fluid pt-5 mt-5" style="background-color: #1a1a1a !important; color: #ced4da !important;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 text-start">
                    <div class="d-flex align-items-center mb-4">
                        <img src="img/logo.png" alt="Logo" style="width: 40px;" class="me-2">
                    </div>
                    <p class="mb-4" style="color: #ced4da !important; font-size: 0.9rem; line-height: 1.6;">Mencetak generasi Qur'ani yang modern, berwawasan global, dan menjunjung tinggi nilai-nilai keislaman.</p>
                    <div class="d-flex">
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-start">
                    <h5 class="text-white mb-4" style="color: #ffffff !important; font-weight: bold;">Tautan</h5>
                    <div class="d-flex flex-column justify-content-start gap-2" style="font-size: 0.9rem;">
                        <a class="mb-2 text-decoration-none" href="index.html" style="color: #ced4da !important;">Profil</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Akademik</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Informasi</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Database</a>
                        <a class="text-decoration-none" href="#" style="color: #ced4da !important;">Galeri</a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 text-start">
                    <h5 class="text-white mb-4" style="color: #ffffff !important; font-weight: bold;">Informasi Kontak</h5>
                    <p style="color: #ced4da !important; font-size: 0.9rem;">Jangan ragu untuk menghubungi kami!</p>
                    <div class="d-flex mb-2" style="font-size: 0.9rem;">
                        <i class="bi bi-geo-alt-fill text-danger me-3"></i>
                        <p class="mb-0" style="color: #ced4da !important;">Jl Gunung Muria No 07 Desa Jatirejo, Ampelgading, Pemalang</p>
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

    <!-- BACK TO TOP -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    
    <script>
        function toggleText() {
            var moreText = document.getElementById("moreText");
            var btnText = document.getElementById("btnReadMore");
            if (moreText.style.display === "none") {
                moreText.style.display = "block";
                btnText.innerHTML = "Tampilkan Sedikit";
            } else {
                moreText.style.display = "none";
                btnText.innerHTML = "Baca Selengkapnya";
            }
        }
    </script>
</body>
</html>