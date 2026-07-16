<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Galeri Video - Pondok Pesantren Modern Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pondok Pesantren Modern Khafidul Quran Pemalang" name="description">

    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts & Icon Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet & Local Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color: #f8f9fa; font-family: 'Nunito', sans-serif;">

    <!-- ========================================== -->
    <!-- TOPBAR (Baris Paling Atas Berwarna Biru)   -->
    <!-- ========================================== -->
    <div class="container-fluid px-5 d-none d-lg-block" style="background-color: #004b87;">
        <div class="row gx-0">
            <!-- Info Alamat & Email -->
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 40px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl Gunung Muria No 07 Desa Jatirejo</small>
                    <small class="text-light"><i class="fa fa-envelope me-2"></i>ponpeskhafidulquran@gmail.com</small>
                </div>
            </div>
            <!-- Icon Media Sosial & Tombol Portal -->
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

    <!-- ========================================== -->
    <!-- NAVBAR (Menu Navigasi Utama Putih)        -->
    <!-- ========================================== -->
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

    <!-- ========================================== -->
    <!-- INNER BANNER (Header Biru Gradasi Tengah)  -->
    <!-- ========================================== -->
    <div class="container-fluid" style="position: relative; background: linear-gradient(135deg, #004b87 0%, #003366 100%); min-height: 300px; display: flex; align-items: center; color: white; padding: 40px 0 90px 0;">
        <div class="container px-5 text-center text-lg-start">
            <h1 class="m-0 text-white" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2;">Galeri <br><span class="text-warning">Dokumentasi Video</span></h1>
            <!-- Kotak Breadcrumb (Navigasi Beranda > Galeri Video) -->
            <div class="mt-4" style="display: inline-flex; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 8px 25px; border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.9rem;">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a> 
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem; line-height: 24px;"></i> 
                <span class="text-warning fw-bold">Galeri Video</span>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- MAIN CONTENT (Konten Video Kotak Putih)   -->
    <!-- ========================================== -->
    <div class="container mb-5">
        <div class="shadow-sm" style="background: #fff; padding: 50px 35px; border-radius: 24px; margin-top: -40px; position: relative; z-index: 5;">
            
            <!-- Filter Kategori Tombol (Sama persis dengan sistem pengelompokan halaman foto) -->
            <div class="text-center mb-5" id="filter-button-group">
                <button class="btn btn-filter px-4 py-2 mx-1 fw-bold active" data-filter="all" style="border-radius: 50px; font-size: 0.9rem; background-color: #004b87; border-color: #004b87; color: #fff; transition: all 0.3s;">Semua</button>
                <button class="btn btn-filter px-4 py-2 mx-1 fw-bold" data-filter="santri" style="border-radius: 50px; font-size: 0.9rem; background-color: transparent; border-color: #004b87; color: #004b87; transition: all 0.3s;">Kegiatan Santri</button>
                <button class="btn btn-filter px-4 py-2 mx-1 fw-bold" data-filter="lingkungan" style="border-radius: 50px; font-size: 0.9rem; background-color: transparent; border-color: #004b87; color: #004b87; transition: all 0.3s;">Lingkungan Pondok</button>
                <button class="btn btn-filter px-4 py-2 mx-1 fw-bold" data-filter="fasilitas" style="border-radius: 50px; font-size: 0.9rem; background-color: transparent; border-color: #004b87; color: #004b87; transition: all 0.3s;">Fasilitas</button>
            </div>

            <!-- Grid Item Video Responsi -->
            <div class="row g-4" id="gallery-grid">
                
                <!-- Video 1 (Kategori: Lingkungan/Profil) -->
                <div class="col-lg-6 gallery-item" data-category="lingkungan" style="transition: all 0.4s ease;">
                    <div style="background: #fff; border-radius: 16px; overflow: hidden; border: 1px solid #eee; box-shadow: 0 4px 15px rgba(0,0,0,0.05); height: 100%;">
                        <!-- Kontainer Video Proporsional 16:9 -->
                        <div style="position: relative; width: 100%; padding-top: 56.25%; background: #000;">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%; border: none;"></iframe>
                        </div>
                        <div class="p-3">
                            <span class="fw-bold text-uppercase d-block mb-1" style="font-size: 0.75rem; color: #004b87;">Profil Pondok</span>
                            <h5 class="fw-bold m-0" style="font-size: 1.1rem; color: #003366; line-height: 1.4;">Profil Lengkap Pondok Pesantren Modern Khafidul Qur’an</h5>
                        </div>
                    </div>
                </div>

                <!-- Video 2 (Kategori: Kegiatan Santri) -->
                <div class="col-lg-6 gallery-item" data-category="santri" style="transition: all 0.4s ease;">
                    <div style="background: #fff; border-radius: 16px; overflow: hidden; border: 1px solid #eee; box-shadow: 0 4px 15px rgba(0,0,0,0.05); height: 100%;">
                        <div style="position: relative; width: 100%; padding-top: 56.25%; background: #000;">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%; border: none;"></iframe>
                        </div>
                        <div class="p-3">
                            <span class="fw-bold text-uppercase d-block mb-1" style="font-size: 0.75rem; color: #004b87;">Kegiatan Santri</span>
                            <h5 class="fw-bold m-0" style="font-size: 1.1rem; color: #003366; line-height: 1.4;">Keseruan Outbound Santri MTs & MA Tahun 2026</h5>
                        </div>
                    </div>
                </div>

                <!-- Video 3 (Kategori: Kegiatan Santri) -->
                <div class="col-lg-6 gallery-item" data-category="santri" style="transition: all 0.4s ease;">
                    <div style="background: #fff; border-radius: 16px; overflow: hidden; border: 1px solid #eee; box-shadow: 0 4px 15px rgba(0,0,0,0.05); height: 100%;">
                        <div style="position: relative; width: 100%; padding-top: 56.25%; background: #000;">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%; border: none;"></iframe>
                        </div>
                        <div class="p-3">
                            <span class="fw-bold text-uppercase d-block mb-1" style="font-size: 0.75rem; color: #004b87;">Kajian Rutin</span>
                            <h5 class="fw-bold m-0" style="font-size: 1.1rem; color: #003366; line-height: 1.4;">Kajian Malam Jumat: Membangun Akhlakul Karimah</h5>
                        </div>
                    </div>
                </div>

                <!-- Video 4 (Kategori: Fasilitas) -->
                <div class="col-lg-6 gallery-item" data-category="fasilitas" style="transition: all 0.4s ease;">
                    <div style="background: #fff; border-radius: 16px; overflow: hidden; border: 1px solid #eee; box-shadow: 0 4px 15px rgba(0,0,0,0.05); height: 100%;">
                        <div style="position: relative; width: 100%; padding-top: 56.25%; background: #000;">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%; border: none;"></iframe>
                        </div>
                        <div class="p-3">
                            <span class="fw-bold text-uppercase d-block mb-1" style="font-size: 0.75rem; color: #004b87;">Lingkungan Pondok</span>
                            <h5 class="fw-bold m-0" style="font-size: 1.1rem; color: #003366; line-height: 1.4;">Tur Virtual Fasilitas Asrama dan Gedung Sekolah</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- FOOTER (Warna Terkunci Gelap Permanen #1a1a1a) -->
    <!-- ========================================== -->
    <div class="container-fluid pt-5 mt-5" style="background-color: #1a1a1a !important; color: #ced4da !important;">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Kolom 1: Profil Pendek & Sosmed -->
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

                <!-- Kolom 2: Tautan Menu Cepat -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4" style="color: #ffffff !important;">Tautan</h5>
                    <div class="d-flex flex-column justify-content-start gap-2">
                        <a class="mb-2 text-decoration-none" href="index.html" style="color: #ced4da !important;">Profil</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Akademik</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Informasi</a>
                        <a class="mb-2 text-decoration-none" href="#" style="color: #ced4da !important;">Database</a>
                        <a class="text-decoration-none" href="foto.html" style="color: #ced4da !important;">Galeri</a>
                    </div>
                </div>

                <!-- Kolom 3: Info Kontak Alamat -->
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

        <!-- Copyright Paling Bawah -->
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

    <!-- Tombol Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top" style="position: fixed; bottom: 45px; right: 45px; z-index: 99;"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script Fungsi Filter Galeri Dinamis (Menangani Transisi Berubah Saat Diklik) -->
    <script>
        document.querySelectorAll('#filter-button-group .btn-filter').forEach(button => {
            button.addEventListener('click', function() {
                // 1. Reset warna semua tombol filter ke default semula (Transparan)
                document.querySelectorAll('#filter-button-group .btn-filter').forEach(btn => {
                    btn.classList.remove('active');
                    btn.style.backgroundColor = 'transparent';
                    btn.style.color = '#004b87';
                });
                // Berikan style aktif warna biru pada tombol yang sedang diklik saat ini
                this.classList.add('active');
                this.style.backgroundColor = '#004b87';
                this.style.color = '#fff';

                // 2. Logika Pemilihan & Penyaringan Tampilan Grid Video
                const filterValue = this.getAttribute('data-filter');
                const items = document.querySelectorAll('#gallery-grid .gallery-item');

                items.forEach(item => {
                    // Jika memilih 'all' (Semua) ATAU kategori item cocok dengan tombol filter
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        // Efek animasi transisi halus membesar dan memudar masuk (Fade-in)
                        setTimeout(() => { 
                            item.style.opacity = '1'; 
                            item.style.transform = 'scale(1)'; 
                        }, 10);
                    } else {
                        // Efek animasi mengecil dan memudar keluar (Fade-out)
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        // Sembunyikan elemen secara total setelah animasi berdurasi 300ms selesai
                        setTimeout(() => { 
                            item.style.display = 'none'; 
                        }, 300);
                    }
                });
            });
        });
    </script>
</body>

</html>