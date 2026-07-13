<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Artikel & Kajian - Pondok Pesantren Modern Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pondok Pesantren Modern Khafidul Quran Pemalang" name="description">

    <link href="{{ asset('img/logo.png') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #004b87;
            --dark-blue: #003366;
            --accent-yellow: #ffcc00;
        }

        /* --- Gaya Kartu Artikel (Article Card) --- */
        .article-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #edf2f7;
            transition: 0.3s;
            height: 100%;
        }
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }
        .article-img-wrap {
            position: relative;
            height: 220px;
            overflow: hidden;
        }
        .article-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .article-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--accent-yellow);
            color: #000;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
        }
        .article-body {
            padding: 24px;
        }
        .article-meta {
            font-size: 0.8rem;
            color: #6c757d;
            margin-bottom: 10px;
        }
        .article-title {
            font-weight: 700;
            color: var(--dark-blue);
            font-size: 1.2rem;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        .article-title a {
            color: var(--dark-blue);
            text-decoration: none;
            transition: 0.2s;
        }
        .article-title a:hover {
            color: var(--primary-blue);
        }
        .article-author {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
            border-top: 1px solid #edf2f7;
            padding-top: 15px;
        }
        .author-img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            background: #ddd;
        }

        /* --- Gaya Komponen Penunjang / Sidebar Widget --- */
        .widget-box {
            background: white;
            border-radius: 16px;
            padding: 25px;
            border: 1px solid #edf2f7;
        }
        .widget-title {
            font-weight: 700;
            color: var(--dark-blue);
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 8px;
            margin-bottom: 15px;
        }
        .link-hover {
            transition: 0.2s;
        }
        .link-hover:hover {
            color: var(--primary-blue) !important;
            padding-left: 5px;
        }
    </style>
</head>

<body style="background-color: #f8f9fa;">

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

    <div class="container-fluid" style="position: relative; background: linear-gradient(135deg, #004b87 0%, #003366 100%); min-height: 300px; display: flex; align-items: center; color: white; padding: 40px 0 90px 0;">
        <div class="container px-5 text-center text-lg-start">
            <h1 class="m-0 text-white" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2;">Artikel, Opini <br><span class="text-warning">& Kajian Islami</span></h1>
            <div class="mt-4" style="display: inline-flex; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 8px 25px; border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.9rem;">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a> 
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem; line-height: 24px;"></i> 
                <span class="text-warning fw-bold">Artikel & Kajian</span>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="shadow-sm" style="background: #fff; padding: 50px 35px; border-radius: 24px; margin-top: -40px; position: relative; z-index: 5;">
            <div class="row g-5">
                
                <div class="col-lg-8">
                    <div class="text-center text-lg-start mb-4">
                        <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Literasi Santri</span>
                        <h2 class="fw-bold h2 mt-2 mb-4" style="color: #091E3E;">Kajian & Karya Tulis</h2>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="article-card">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <div class="article-img-wrap h-100">
                                            <img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?auto=format&fit=crop&q=80" class="article-img" alt="Kajian">
                                            <span class="article-badge">Kajian Fiqih</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="article-body">
                                            <div class="article-meta"><i class="bi bi-calendar-event me-2 text-primary"></i>12 Maret 2026</div>
                                            <h4 class="article-title"><a href="#">Adab Menuntut Ilmu dalam Kitab Ta'lim Muta'allim</a></h4>
                                            <p class="text-muted small">Mencari ilmu bukan hanya soal kepintaran otak, melainkan tentang bagaimana seorang murid memuliakan guru dan kitabnya...</p>
                                            <div class="article-author">
                                                <img src="https://via.placeholder.com/50" class="author-img" alt="Santri">
                                                <span class="small fw-bold text-dark">Oleh: Ahmad Zaki (Santri MA)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="article-card">
                                <div class="article-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&q=80" class="article-img" alt="Buku">
                                    <span class="article-badge">Opini Santri</span>
                                </div>
                                <div class="article-body">
                                    <div class="article-meta"><i class="bi bi-calendar-event me-2 text-primary"></i>10 Maret 2026</div>
                                    <h5 class="article-title"><a href="#">Menyeimbangkan Hafalan Al-Qur'an dan Teknologi</a></h5>
                                    <p class="text-muted small text-truncate">Bagaimana santri modern memanfaatkan aplikasi digital tanpa mendistraksi fokus muraja'ah...</p>
                                    <div class="article-author">
                                        <span class="small fw-bold text-dark">Oleh: Siti Aminah</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="article-card">
                                <div class="article-img-wrap">
                                    <img src="https://images.unsplash.com/photo-1435527173128-983b87df0114?auto=format&fit=crop&q=80" class="article-img" alt="Ibadah">
                                    <span class="article-badge">Kisah Inspiratif</span>
                                </div>
                                <div class="article-body">
                                    <div class="article-meta"><i class="bi bi-calendar-event me-2 text-primary"></i>08 Maret 2026</div>
                                    <h5 class="article-title"><a href="#">Pengalaman Pertama Khidmah di Masyarakat Desa</a></h5>
                                    <p class="text-muted small text-truncate text-wrap">Cerita pengabdian sosial santri akhir dalam mengajar TPA dan memimpin majelis...</p>
                                    <div class="article-author">
                                        <span class="small fw-bold text-dark">Oleh: Tim Alumni 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 d-flex justify-content-center">
                        <nav>
                            <ul class="pagination mb-0">
                                <li class="page-item active"><a class="page-link shadow-sm" href="#">1</a></li>
                                <li class="page-item"><a class="page-link shadow-sm" href="#">2</a></li>
                                <li class="page-item"><a class="page-link shadow-sm" href="#">Berikutnya</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4 p-4 widget-box shadow-sm">
                        <h5 class="widget-title">Kategori Kajian</h5>
                        <div class="d-flex flex-column gap-2" style="font-size: 0.95rem;">
                            <a href="#" class="text-dark text-decoration-none border-bottom pb-2 d-flex justify-content-between align-items-center link-hover">
                                <span><i class="fas fa-chevron-right me-2 text-primary small"></i>Kajian Fiqih</span>
                                <span class="badge bg-primary rounded-pill">5</span>
                            </a>
                            <a href="#" class="text-dark text-decoration-none border-bottom pb-2 d-flex justify-content-between align-items-center link-hover">
                                <span><i class="fas fa-chevron-right me-2 text-primary small"></i>Opini & Cerpen</span>
                                <span class="badge bg-primary rounded-pill">12</span>
                            </a>
                            <a href="#" class="text-dark text-decoration-none d-flex justify-content-between align-items-center link-hover">
                                <span><i class="fas fa-chevron-right me-2 text-primary small"></i>Tafsir Ringkas</span>
                                <span class="badge bg-primary rounded-pill">3</span>
                            </a>
                        </div>
                    </div>

                    <div class="p-4 widget-box shadow-sm">
                        <h5 class="widget-title">Penulis Teraktif</h5>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Writer">
                                <div>
                                    <h6 class="mb-0 small fw-bold text-dark">Ahmad Zaki</h6>
                                    <small class="text-muted">4 Artikel</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-top pt-2">
                                <img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Writer">
                                <div>
                                    <h6 class="mb-0 small fw-bold text-dark">Siti Aminah</h6>
                                    <small class="text-muted">3 Artikel</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 mt-5" style="background-color: #1a1a1a !important; color: #ced4da !important;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center mb-4">
                        <img src="img/logo.png" alt="Logo" style="width: 40px;" class="me-2">
                    </div>
                    <p class="mb-4" style="color: #ced4da !important;">Mencetak generasi Qur'ani yang modern, berwawasan global, dan menjunjung tinggi nilai-nilai keislaman.</p>
                    <div class="d-flex">
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4" style="color: #ffffff !important;">Tautan</h5>
                    <div class="d-flex flex-column justify-content-start gap-2">
                        <a class="mb-2 text-decoration-none" href="index.html" style="color: #ced4da !important;">Profil</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Akademik</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Informasi</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Database</a>
                        <a class="text-decoration-none" href="#" style="color: #ced4da !important;">Galeri</a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <h5 class="text-white mb-4" style="color: #ffffff !important;">Informasi Kontak</h5>
                    <p style="color: #ced4da !important;">Jangan ragu untuk menghubungi kami!</p>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt-fill text-danger me-3"></i>
                        <p class="mb-0" style="color: #ced4da !important;">Jatirejo, Ampelgading, Pemalang</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone-fill text-danger me-3"></i>
                        <p class="mb-0" style="color: #ced4da !important;">082329117255</p>
                    </div>
                    <div class="d-flex mb-4">
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
                        <p class="mb-0" style="color: #ced4da !important;">Copyright &copy; 2026 Fajri Maulana.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>