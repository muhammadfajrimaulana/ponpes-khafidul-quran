<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Hubungi Kami - Ponpes Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #004a99;
            --accent: #ffcc00;
            --dark-blue: #003366;
            --secondary-blue: #00529c;
            --light-bg: #f0f9ff;
        }

        body { font-family: 'Nunito', sans-serif; background-color: #f8f9fa; overflow-x: hidden; color: #444; }

        /*** Sticky Header Wrapper ***/
        .header-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        /*** Topbar ***/
        .top-bar { background: #212529; color: #fff; padding: 8px 0; font-size: 12px; }
        .top-bar i { color: var(--accent); }
        .top-bar a { color: #fff; text-decoration: none; transition: 0.3s; }

        /*** Navbar ***/
        .navbar-dark .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 600;
            padding: 20px 15px;
            text-transform: uppercase;
            font-size: 13px;
        }
        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active { color: var(--accent) !important; }

        /*** Banner Header (Sesuai Halaman Lain) ***/
        .banner-sejarah-yayasan {
            position: relative;
            background: linear-gradient(135deg, var(--secondary-blue) 0%, #003a6e 100%);
            min-height: 350px;
            display: flex;
            align-items: center;
            color: white;
            padding: 50px 0 100px 0;
        }
        .text-header { font-size: clamp(2rem, 7vw, 3.5rem); font-weight: 800; line-height: 1.1; }
        .breadcrumb-box {
            display: inline-flex;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 8px 25px;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 0.9rem;
        }

        /*** Contact Layout ***/
        .contact-container-box {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-top: -60px;
            position: relative;
            z-index: 5;
        }

        .contact-info-card {
            background: var(--light-bg);
            padding: 30px;
            border-radius: 12px;
            height: 100%;
            border-left: 5px solid var(--primary);
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        .info-icon {
            width: 45px;
            height: 45px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        /*** Footer ***/
        footer { background: #1a1a1a; color: #d1d1d1; }
        footer h5 { color: white; font-weight: bold; margin-bottom: 25px; }
        footer a { color: #d1d1d1; text-decoration: none; transition: 0.3s; }
        footer a:hover { color: var(--accent); padding-left: 5px; }

        @media (max-width: 991.98px) {
            .navbar-dark .navbar-nav .nav-link { padding: 10px 15px; }
            .banner-sejarah-yayasan { min-height: 280px; padding-bottom: 80px; }
            .contact-container-box { padding: 25px; }
        }
    </style>
</head>

<body>
    <div class="header-sticky">
        <div class="top-bar container-fluid px-0 px-lg-5">
            <div class="row gx-0 align-items-center px-3 text-center text-lg-start">
                <div class="col-lg-8">
                    <div class="d-inline-flex align-items-center flex-wrap justify-content-center justify-content-lg-start">
                        <small class="me-4"><i class="fa fa-map-marker-alt me-2"></i>Jatirejo, Ampelgading</small>
                        <small class="me-4"><i class="fa fa-phone-alt me-2"></i>+62 878-3052-0112</small>
                        <small><i class="fa fa-envelope-open me-2"></i>ponpeskhafidulquran@gmail.com</small>
                    </div>
                </div>
                <div class="col-lg-4 text-end d-none d-lg-block px-3">
                    <div class="d-flex justify-content-end gap-3">
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

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
    <div class="banner-sejarah-yayasan">
        <div class="container px-4 text-center">
            <h1 class="text-header">HUBUNGI KAMI</h1>
            <div class="breadcrumb-box mt-4">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a>
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem;"></i>
                <span class="text-warning fw-bold">Hubungi</span>
            </div>
        </div>
    </div>

    <section class="py-5 pb-5">
        <div class="container px-4">
            <div class="contact-container-box">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="contact-info-card">
                            <h4 class="fw-bold mb-4" style="color: var(--dark-blue);">Informasi Kontak</h4>
                            <p class="text-muted mb-5">Silakan hubungi kami untuk informasi pendaftaran santri baru atau pertanyaan lainnya seputar program pondok pesantren.</p>
                            
                            <div class="info-item">
                                <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Alamat Pondok</h6>
                                    <p class="small text-muted mb-0">Jatirejo, Kec. Ampelgading, Kab. Pemalang, Jawa Tengah</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Telepon / WhatsApp</h6>
                                    <p class="small text-muted mb-0">+62 878-3052-0112</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Email Resmi</h6>
                                    <p class="small text-muted mb-0">ponpeskhafidulquran@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <h4 class="fw-bold mb-4" style="color: var(--dark-blue);">Kirim Pesan</h4>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email Anda">
                                        <label for="email">Alamat Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subjek">
                                        <label for="subject">Subjek (Contoh: Info Pendaftaran)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Pesan Anda" id="message" style="height: 150px"></textarea>
                                        <label for="message">Pesan Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 fw-bold rounded-pill shadow" type="submit">KIRIM PESAN SEKARANG</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="container-fluid pt-5">
        <div class="container py-5">
            <div class="row g-5 text-center text-md-start px-3">
                <div class="col-lg-3 col-md-6">
                    <img src="img/logo.png" alt="Logo" style="width: 50px;" class="mb-4">
                    <p class="small">Mencetak generasi Qur'ani yang modern, berwawasan global, dan menjunjung tinggi nilai-nilai keislaman.</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Tautan</h5>
                    <div class="d-flex flex-column gap-2 small">
                        <a href="#"><i class="fas fa-angle-right me-2"></i>About us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>Careers</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>News & Articles</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>Legal Notice</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Bantuan</h5>
                    <div class="d-flex flex-column gap-2 small">
                        <a href="#"><i class="fas fa-angle-right me-2"></i>Help Center</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>Contact Us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>Payment Center</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>Parent Community</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h5 class="text-white mb-4">Informasi Kontak</h5>
                    <p class="small mb-3"><i class="bi bi-geo-alt-fill text-danger me-3"></i>Jatirejo, Ampelgading, Pemalang</p>
                    <p class="small mb-3"><i class="bi bi-telephone-fill text-danger me-3"></i>+62 878-3052-0112</p>
                    <p class="small mb-0"><i class="bi bi-envelope-fill text-danger me-3"></i>ponpeskhafidulquran@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="container border-top border-secondary py-4 text-center">
            <p class="mb-0 small">Copyright &copy; 2026 <strong>M Fajri Maulana</strong>. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>