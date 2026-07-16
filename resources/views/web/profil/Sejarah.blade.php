<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Sejarah - Pondok Pesantren Modern Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pondok Pesantren Modern Khafidul Quran Pemalang" name="description">

    <link href="{{ asset('img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts & Icon Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet & Local Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body style="background-color: #f8f9fa;">

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
            <h1 class="m-0 text-white" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2;">Sejarah <br><span class="text-warning">Pondok Pesantren</span></h1>
            <!-- Kotak Breadcrumb (Navigasi Beranda > Sejarah) -->
            <div class="mt-4" style="display: inline-flex; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 8px 25px; border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.9rem;">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a> 
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem; line-height: 24px;"></i> 
                <span class="text-warning fw-bold">Sejarah</span>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- MAIN CONTENT (Konten di Kotak Putih)       -->
    <!-- ========================================== -->
    <div class="container mb-5">
        <!-- Kotak Putih Artikel Sejarah -->
        <div class="shadow-sm" style="background: #fff; padding: 50px 35px; border-radius: 24px; margin-top: -40px; position: relative; z-index: 5;">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="text-center text-lg-start">
                        <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Informasi Profil Resmi</span>
                        <h2 class="fw-bold h2 mt-2 mb-4" style="color: #091E3E;">Pondok Pesantren Modern<br>Khafidul Qur'an Pemalang</h2>
                    </div>

                    <!-- Isi Cerita Teks Sejarah -->
                    <div class="mt-5" style="font-size: 1.05rem; line-height: 1.8; color: #444; text-align: justify;">
                        <!-- Paragraf 1 (Ditambahkan style khusus untuk membuat Drop Cap/Huruf P besar di awal kalimat) -->
                        <p><span style="font-size: clamp(3rem, 8vw, 3.5rem); font-weight: 800; float: left; color: #004b87; line-height: 1; margin-right: 12px; margin-top: 5px;">P</span>erjalanan dedikasi Pondok Pesantren Modern Khafidul Quran berakar dari ketulusan K.H. Abdul Khalim Al-Hafiz (Alm) dalam menyebarkan syiar Islam melalui majlis pengajaran dan tafsir Al-Quran dan kajian kitab-kitab dasar seperti Jurumiyah, Nahwu, Sorof, dan lain-lain secara mandiri di kediaman pribadinya. Seiring berjalannya waktu, antusiasme masyarakat yang ingin mendalami hafalan Al-Qur'an meningkat pesat sehingga rumah beliau tidak lagi mampu menampung banyaknya santri yang datang untuk bermukim. Momentum besar terjadi pada tahun 1980 ketika beliau mendapatkan dukungan dari pemerintah berupa lahan di Desa Jatirejo, yang kemudian menjadi lokasi tetap berdirinya pesantren ini. Meski bermula dari bangunan sederhana yang difungsikan secara multifungsi sebagai kamar santri dan ruang mengaji, semangat pengabdian tersebut terus tumbuh hingga mampu mendirikan unit pendidikan formal seperti MTs MDI Jatirejo dan Madrasah Aliyah (MA) Nasrullah pada tahun 2000. Pasca wafatnya K.H. Abdul Khalim pada tahun 2012, tonggak estafet kepemimpinan dilanjutkan oleh putra beliau, Kyai Nur Khafid, yang membawa pesantren memasuki era modernisasi melalui pembaruan infrastruktur menyeluruh guna menunjang kenyamanan serta efektivitas belajar para santri.</p>

                        <p style="margin-bottom: 1.5rem;">Dalam menjalankan fungsinya, pesantren ini mengusung visi mulia untuk mewujudkan Insan Rabbani, yaitu pribadi yang terdidik untuk mencapai derajat manusia paripurna yang selamat di dunia dan akhirat.</p>
                        
                        <!-- Box Quote Visi Misi -->
                        <blockquote class="my-5 p-4 border-start border-warning border-5 bg-light fst-italic shadow-sm" style="border-radius: 0 12px 12px 0;">
                            "Visi ini diturunkan ke dalam misi yang berfokus pada penyelarasan akal, fitrah, dan kalbu dengan cahaya Al-Qur'an, serta menjadikan hafalan kalamullah sebagai kekuatan intelektual utama. "
                        </blockquote>
                        
                        <p style="margin-bottom: 1.5rem;">Pesantren berkomitmen menjadi pusat kajian ilmu-ilmu Al-Qur'an yang logis dan rasional, sekaligus menanamkan cinta pada kebenaran dan kebijaksanaan agar setiap lulusannya mampu menjadi pemecah persoalan sosial berdasarkan prinsip akhlakul karimah. Untuk mencapai target tersebut, pesantren menawarkan berbagai keunggulan program yang komprehensif, mulai dari program Tahfidz Al-Qur'an yang sistematis dengan tahapan Tahsin dan setoran harian, kajian mendalam Kitab Kuning, pengembangan bahasa melalui Khitobah (pidato) Arab dan Inggris, hingga pembekalan literasi teknologi di laboratorium komputer serta kegiatan ekstrakurikuler seperti bela diri pencak silat.</p>
                        <p style="margin-bottom: 1.5rem;">Keberhasilan proses pendidikan ini didukung oleh fasilitas yang memadai dan struktur organisasi yang profesional. Lingkungan pesantren dilengkapi dengan asrama putra dan putri yang nyaman, masjid sebagai pusat peribadatan, perpustakaan dengan koleksi kitab tafsir yang lengkap, aula kegiatan, serta fasilitas olahraga dan koperasi untuk memenuhi kebutuhan harian santri. Seluruh operasional ini dikelola di bawah naungan struktur organisasi yang tertata, mulai dari Pelindung dan Penasehat yang memberikan pengawasan strategis, Pengasuh sebagai otoritas tertinggi penetap kebijakan, hingga jajaran pengurus harian seperti Lurah Pondok, Sekretaris, dan Bendahara. Selain itu, terdapat bidang-bidang khusus yang menangani Pendidikan, Sarana Prasarana, serta Penelitian dan Pengembangan (Litbang), yang semuanya bersinergi untuk memastikan Pondok Pesantren Modern Khafidul Quran tetap relevan dalam mencetak generasi qur’ani yang siap menghadapi tantangan zaman.</p>
                    </div>
                    
                    <!-- Catatan Kaki Info Sumber -->
                    <div class="mt-5 pt-4 border-top text-muted small d-flex align-items-center justify-content-center justify-content-lg-start">
                        <i class="fas fa-info-circle me-2 text-primary"></i>
                        <span>Sumber: Dokumen Resmi Yayasan Pondok Pesantren Khafidul Quran.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================== -->
        <!-- FILOSOFI LOGO SECTION                      -->
        <!-- ========================================== -->
        <div class="shadow-sm" style="background: #fff; border-radius: 24px; padding: 40px; border: 1px solid #edf2f7; margin-top: 40px;">
            <h3 class="fw-bold h4 mb-5 border-bottom pb-3 text-center" style="color: #091E3E;">Filosofi dan Makna Elemen Logo</h3>
            <div class="row justify-content-center">
                <!-- Sisi Gambar & Tombol Download -->
                <div class="col-12 text-center mb-5">
                    <div class="d-inline-block p-4 border rounded bg-light shadow-sm mb-3" style="border-radius: 16px !important;">
                        <img src="img/logo.png" alt="Logo" class="img-fluid" style="max-height: 180px;">
                    </div>
                    <br>
<a href="img/logo.png" download class="btn btn-sm px-4 py-2 fw-bold shadow-sm text-white" 
   style="background-color: #091E3E; border-radius: 8px; border: none;">
    <i class="fas fa-download me-2"></i>Unduh Logo (.png)
</a>
                </div>
                
                <!-- List Keterangan Arti Poin Logo -->
                <div class="col-lg-11 col-xl-10">
                    <ul class="list-unstyled" style="padding: 0;">
                        
                        <li class="mb-4" style="position: relative; padding-left: 25px;">
                            <h5 class="fw-bold" style="color: #004b87"><i class="fas fa-book-open me-2 text-warning"></i>Al-Qur'an yang Terbuka</h5>
                            <p class="text-muted">Simbol utama ini melambangkan identitas inti pesantren sebagai lembaga Tahfidz. Al-Qur'an yang terbuka menunjukkan bahwa pesantren ini adalah tempat di mana kalam Allah dipelajari, dihafalkan, dan dijadikan pedoman hidup yang bersifat terbuka bagi siapa saja yang ingin menuntut ilmu.</p>
                        </li>
                        
                        <li class="mb-4" style="position: relative; padding-left: 25px;">
                            <h5 class="fw-bold" style="color: #004b87"><i class="fas fa-mosque me-2 text-warning"></i>Kubah Masjid</h5>
                            <p class="text-muted">Elemen kubah di bagian atas mencerminkan nilai-nilai keislaman dan ketaatan kepada Allah SWT. Kubah juga melambangkan tempat bernaung yang suci, menunjukkan bahwa seluruh kegiatan di pesantren ini berlandaskan pada ibadah dan pengabdian kepada agama.</p>
                        </li>
                        
                        <li class="mb-4" style="position: relative; padding-left: 25px;">
                            <h5 class="fw-bold" style="color: #004b87"><i class="fas fa-globe me-2 text-warning"></i>Bentuk Lingkungan Bundar/Global</h5>
                            <p class="text-muted">Lingkaran atau bingkai yang melingkupi seluruh elemen melambangkan kebulatan tekad dan persatuan. Selain itu, ini menunjukkan visi "Modern" pesantren yang ingin mencetak generasi yang mampu beradaptasi dengan dunia luar namun tetap dalam koridor nilai-nilai Islam yang kokoh.</p>
                        </li>
                        
                        <li class="mb-4" style="position: relative; padding-left: 25px;">
                            <h5 class="fw-bold" style="color: #004b87"><i class="fas fa-palette me-2 text-warning"></i>Warna Hijau</h5>
                            <p class="text-muted">Warna dominan hijau merupakan warna khas Islam yang melambangkan kesejukan, kesuburan spiritual, pertumbuhan, dan kedamaian. Ini mencerminkan harapan agar para santri dapat tumbuh menjadi pribadi yang membawa manfaat dan keteduhan bagi masyarakat.</p>
                        </li>
                        
                        <li class="mb-4" style="position: relative; padding-left: 25px;">
                            <h5 class="fw-bold" style="color: #004b87"><i class="fas fa-star me-2 text-warning"></i>Warna Kuning/Emas</h5>
                            <p class="text-muted">Warna kuning pada garis atau elemen tertentu melambangkan kemuliaan, kejayaan, dan keluhuran cita-cita. Ini merujuk pada upaya pesantren untuk mencetak "Insan Rabbani" yang memiliki martabat tinggi karena ilmu dan akhlaknya.</p>
                        </li>
                        
                        <li class="mb-4" style="position: relative; padding-left: 25px;">
                            <h5 class="fw-bold" style="color: #004b87"><i class="fas fa-id-card me-2 text-warning"></i>Tulisan Nama Pesantren</h5>
                            <p class="text-muted">Penyantuman nama <strong>Pondok Pesantren Modern Khafidul Quran</strong> dan lokasinya (Ampelgading - Pemalang) berfungsi sebagai identitas resmi dan penegasan eksistensi lembaga di tengah masyarakat.</p>
                        </li>
                        
                        <!-- Box Kesimpulan Arti Logo -->
                        <li class="p-4 bg-light border-start border-primary border-4 rounded shadow-sm" style="border-radius: 0 12px 12px 0 !important; list-style-type: none;">
                            <h5 class="fw-bold" style="color: #091E3E;">Kesimpulan Makna Keseluruhan</h5>
                            <p class="mb-0 text-muted">Secara keseluruhan, logo ini melambangkan sebuah institusi pendidikan yang bertekad melahirkan generasi penghafal Al-Qur'an yang visioner (modern), memiliki kedalaman ilmu agama (simbol Al-Qur'an dan Kubah), serta memiliki karakter yang sejuk dan mulia (simbol warna hijau dan emas).</p>
                        </li>
                    </ul>
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
                        <a class="text-decoration-none" href="#" style="color: #ced4da !important;">Galeri</a>
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>