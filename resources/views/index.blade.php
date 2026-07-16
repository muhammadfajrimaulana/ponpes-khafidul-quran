<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pondok Pesantren Modern Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HTML Templates" name="keywords">
    <meta content="Pondok Pesantren Modern Khafidul Quran Pemalang" name="description">

    <link href="{{ asset('img/logo.png') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <div class="container-fluid px-5 d-none d-lg-block" style="background-color: #004b87;">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 40px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl Gunung Muria No 07 Desa
                        Jatirejo</small>
                    <small class="text-light"><i class="fa fa-envelope me-2"></i>ponpeskhafidulquran@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 40px;">
                    <a class="text-light me-3 text-decoration-none small" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href=""><i
                            class="fab fa-instagram"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href=""><i
                            class="fab fa-whatsapp"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href=""><i
                            class="fab fa-tiktok"></i></a>
                    <span class="text-light me-3">|</span>
                    <a class="btn btn-sm btn-outline-light px-3 py-1 text-uppercase fw-bold" href="#"
                        style="font-size: 0.75rem; border-radius: 4px;">Portal Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-5 py-3">
            <a href="{{ route('beranda') }}" class="navbar-brand p-0 d-flex align-items-center">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 50px; width: auto;" class="me-3">
                <div class="lh-1">
                    <span class="fw-bold text-primary text-uppercase d-block"
                        style="font-size: 0.9rem; letter-spacing: 0.5px;">PONDOK PESANTREN MODERN</span>
                    <span class="fw-bold text-dark text-uppercase"
                        style="font-size: 1.1rem; color: #004b87 !important;">KHAFIDUL QURAN PEMALANG</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 align-items-lg-center">
                    <a href="{{ route('beranda') }}" class="nav-item nav-link active fw-bold text-uppercase mx-1"
                        style="font-size: 0.85rem;">Beranda</a>

                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark"
                            data-bs-toggle="dropdown" style="font-size: 0.85rem;">Profil</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('sejarah') }}" class="dropdown-item">Sejarah</a>
                            <a href="{{ route('visi') }}" class="dropdown-item">Visi Dan Misi</a>
                            <a href="{{ route('pengurus') }}" class="dropdown-item">Data Pengurus</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark"
                            data-bs-toggle="dropdown" style="font-size: 0.85rem;">Jenjang</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('madrasah-tsanawiyah') }}" class="dropdown-item">Madrasah
                                Tsanawiyah</a>
                            <a href="{{ route('madrasah-aliyah') }}" class="dropdown-item">Madrasah Aliyah</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark"
                            data-bs-toggle="dropdown" style="font-size: 0.85rem;">Berita</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('kabar-pondok') }}" class="dropdown-item">Kabar Pondok</a>
                            <a href="{{ route('artikel') }}" class="dropdown-item">Artikel Dan Kajian</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark"
                            data-bs-toggle="dropdown" style="font-size: 0.85rem;">Dokumen</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('santri') }}" class="dropdown-item">Santri</a>
                            <a href="{{ route('alumni') }}" class="dropdown-item">Alumni</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-dark"
                            data-bs-toggle="dropdown" style="font-size: 0.85rem;">Galeri</a>
                        <div class="dropdown-menu m-0 border-0 shadow-sm">
                            <a href="{{ route('foto') }}" class="dropdown-item">Foto</a>
                            <a href="{{ route('video') }}" class="dropdown-item">Video</a>
                        </div>
                    </div>

                    <a href="#" class="nav-item nav-link text-dark ms-2" data-bs-toggle="modal"
                        data-bs-target="#searchModal">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/gambar9.png') }}" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/gambar1.png') }}" alt="Image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-graduation-cap text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Ponpes Khafidul Qur'an</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">1200</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-graduation-cap text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Madrasah Aliyah</h5>
                            <h1 class="mb-0" data-toggle="counter-up">2100</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-graduation-cap text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Madrasah Tsanawiyah</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">210</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-section py-5 bg-transparent">
        <div class="container text-center py-2">
            <img src="{{ asset('img/ahlan.png') }}" class="img-fluid mb-2" alt="Kaligrafi Ahlan Wa Sahlan"
                style="width: 180px;">
            <h6 class="font-weight-bold text-uppercase mb-3"
                style="color: #007bff; letter-spacing: 2px; font-size: 0.9rem;">
                Ahlan Wa Sahlan
            </h6>
            <h2 class="mb-4" style="color: #091E3E; font-weight: 700; font-size: clamp(1.5rem, 5vw, 2.5rem);">
                PONDOK PESANTREN MODERN <br>KHAFIDUL QURAN PEMALANG
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <p class="text-secondary" style="line-height: 1.6; font-size: 1.1rem; color: #6c757d !important;">
                        Sebagai salah satu pusat pendidikan Tahfidz Al-Quran yang mengintegrasikan kurikulum madrasah
                        (MTs & MA) dengan menekankan pada pembentukan karakter menuju Insan Rabbani yang Ulul Albab.
                        Semenjak berdiri pada tahun 1980 an, Pondok Pesantren Modern Khafidul Quran melakukan pembinaan
                        pada para santri melalui metode hafalan yang intensif, kajian keislaman dan kitab klasik, serta
                        dukungan sarana prasarana modern seperti laboratorium komputer dan jaringan internet. “Mari
                        bergabung bersama kami untuk tumbuh menjadi penjaga wahyu yang membumi, visioner, dan unggul di
                        era modern”.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="p-4 p-md-5 text-white shadow"
            style="background: linear-gradient(135deg, #091E3E, #0083b0); border-radius: 24px; position: relative; overflow: hidden;">
            <div
                style="position: absolute; right: -30px; top: -30px; width: 250px; height: 250px; background: rgba(255, 255, 255, 0.06); border-radius: 50%; pointer-events: none;">
            </div>
            <div
                style="position: absolute; right: 20px; bottom: -50px; width: 180px; height: 180px; background: rgba(255, 255, 255, 0.04); border-radius: 50%; pointer-events: none;">
            </div>

            <div class="row align-items-center position-relative" style="z-index: 2;">
                <div class="col-md-8 text-center text-md-start">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2">
                        <span
                            style="width: 6px; height: 6px; background-color: oklch(72.12% 0.14725 84.942); border-radius: 50%; display: inline-block; margin-right: 8px;"></span>
                        <small class="text-uppercase fw-bold"
                            style="color: #ffc107; font-size: 0.75rem; letter-spacing: 1px;">OFFICIAL PONPES MODERN
                            KHAFIDUL QURAN 2026</small>
                    </div>
                    <h2 class="fw-bold mb-2"
                        style="font-size: calc(1.35rem + 0.9vw); letter-spacing: -0.3px; color: #ffffff;">
                        Penerimaan Santri Baru TA 2026/2027
                    </h2>
                    <p class="mb-0 text-white-50" style="font-size: 1rem; font-weight: 400;">
                        Menjadi bagian dari pendidik masa depan yang profesional, berkualitas, dan berkarakter islami.
                    </p>
                </div>
                <div class="col-md-4 text-center text-md-end mt-4 mt-md-0">
                    <a href="#" target="_blank"
                        class="btn btn-light px-4 py-2-5 fw-bold d-inline-flex align-items-center gap-3 shadow-sm border-0"
                        style="color: #0083b0; font-size: 0.95rem; border-radius: 12px; transition: all 0.3s ease;">
                        <span>Daftar Sekarang</span>
                        <span class="d-flex align-items-center justify-content-center text-white rounded-circle"
                            style="width: 24px; height: 24px; background-color: #0083b0 !important;">
                            <i class="bi bi-arrow-right-short" style="font-size: 1.2rem; line-height: 1;"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" style="background-color: #e1f1f7;" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.5s">
                    <div class="position-relative"
                        style="height: 450px; width: 100%; padding-top: 40px; padding-left: 20px;">
                        <img class="img-fluid rounded shadow" src="{{ asset('img/kyai1.jpeg') }}"
                            alt="Gambar Pesantren 1"
                            style="object-fit: cover; width: 90%; position: absolute; bottom: 0; right: 0; z-index: 1; border: 8px solid #fff;">
                        <img class="img-fluid rounded shadow" src="{{ asset('img/kyai2.jpg') }}"
                            alt="Gambar Pesantren 2"
                            style="object-fit: cover; width: 40%; position: absolute; top: 0; left: 0; z-index: 2; border: 5px solid #fff;">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                        <h1 class="mb-0">Pondok Pesantren Modern Khafidul Quran</h1>
                    </div>
                    <p class="mb-4 text-dark" style="text-align: justify; line-height: 1.8; color: #000;">
                        Berdiri sejak tahun 1980 di Desa Jatirejo, salah satu desa di Kabupaten Pemalang, Pondok
                        Pesantren Modern Khafidul Quran bermula dari dedikasi dan pengabdian yang tulus dari K.H. Abdul
                        Khalim al-Hafiz (Alm) di kediaman pribadinya yang bersahaja, beliau mengajarkan berbagai macam
                        keilmuan dan pengetahuan ilmu-il-mu keislaman dengan selalu berpijak pada dakwah yang santun dan
                        rahmatan lil’alamiin. Kini, di bawah kepemimpinan penerus beliau genarasi kedua yaitu, Kyai Nur
                        Khafid al-Hafiz, lembaga ini telah berkembang pesat, namun tetap teguh dengan menjaga kemurnian
                        pengajaran agama dan menjadikan hafalan Al-Quran sebagai prioritas utama yang tidak tergoyahkan.
                    </p>
                    <p class="mb-4 text-dark" style="text-align: justify; line-height: 1.8; color: #000;">
                        Keunggulan kami sebagai lembaga pendidikan kredibel semakin kokoh dengan melakukan integrasi
                        kurikulum formal Kementerian Agama melalui Madrasah Tsanawiyah (MTs Majlis Dakwah Islamiyah) dan
                        Madrasah Aliyah (MA Nasrullah). Kami mendedikasikan diri untuk melakukan pembinaan kepada para
                        santri secara holistik demi mewujudkan generasi Qurani yang berakhlak mulia, berwawasan luas,
                        and siap menghadapi tantangan zaman.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Visi dan Misi</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <h3 class="mb-3 text-dark">VISI</h3>
                    <p class="text-dark" style="text-align: justify;">
                        Mewujudkan Insan Rabbani yang Paripurna, Menjadi lembaga pendidikan yang mencetak manusia
                        terdidik secara spiritual demi mencapai derajat insan kamil (manusia sempurna) di dunia dan
                        akhirat. Karakter ini dibangun di atas landasan niat yang tulus dan kesucian jiwa, sehingga
                        setiap tindakan yang dilakukan senantiasa didasari oleh rasa cinta kepada Allah SWT.
                    </p>

                    <h3 class="mt-4 mb-3 text-dark">MISI</h3>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                        <span class="text-dark"><strong>Membentuk insan rabbani</strong></span>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                        <span class="text-dark"><strong>Pusat kajian al-Quran, hadis dan kajian kitab
                                kuning</strong></span>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                        <span class="text-dark"><strong>Membentuk santri yang mandiri dan berakhlak
                                mulia</strong></span>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                    <div class="position-relative" style="min-height: 400px;">
                        <img class="img-fluid rounded shadow w-100" src="img/pondok/gambar4.png"
                            alt="Kegiatan Santri" style="object-fit: cover; height: 350px;">
                        <div class="position-absolute" style="bottom: -20px; left: -20px; width: 55%;">
                            <img class="img-fluid rounded shadow border border-5 border-white"
                                src="{{ asset('img/pondok/gambar3.jpg') }}" alt="Fasilitas Pondok">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Program Studi / Kurikulum Start -->
    <div class="py-5" style="background-color: #f8fafd;">
        <div class="container py-4">
            <!-- Judul Section -->
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-1" style="color: #091E3E; font-size: 2.25rem;">Kurikulum Pendidikan Pesantren
                </h2>
                <div class="mx-auto mt-2" style="width: 40px; height: 3px; background-color: #ffc107;"></div>
            </div>

            <!-- Grid dibuat lebar kesamping dengan g-5 -->
            <div class="row justify-content-center g-5">

                <!-- Kartu 1: MTs -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="px-2">

                        <!-- Elemen 1: Kotak Profil Kepala Sekolah (Diberi mb-4 agar memiliki jeda spasi dengan gambar bawah) -->
                        <div class="bg-white p-3 d-flex align-items-center gap-3 shadow-sm border-start border-4 mb-4"
                            style="border-color: #ffc107 !important; border-radius: 16px;">
                            <div class="ps-2">
                                <img src="{{ asset('img/profil.png') }}" alt="Kepala MTs"
                                    class="rounded-circle shadow-sm"
                                    style="width: 55px; height: 55px; object-fit: cover;">
                            </div>
                            <div class="text-start">
                                <small class="text-uppercase text-muted fw-bold d-block mb-1"
                                    style="font-size: 0.65rem; letter-spacing: 1px;">Kepala Sekolah MTs</small>
                                <h6 class="fw-bold text-primary mb-0" style="font-size: 0.95rem;">Asnawi Mangkualam
                                </h6>
                            </div>
                        </div>

                        <!-- Elemen 2: Kotak Utama (Gambar & Deskripsi Luas) -->
                        <div class="card border-0 shadow-sm bg-white overflow-hidden" style="border-radius: 16px;">
                            <!-- Gambar Dokumentasi -->
                            <div style="height: 280px; width: 100%;">
                                <img src="{{ asset('img/pondok/gambar7.jpg') }}" alt="MTs" class="w-100 h-100"
                                    style="object-fit: cover;">
                            </div>

                            <!-- Detail Teks Deskripsi Lebar -->
                            <div class="card-body p-5 text-center">
                                <div class="mb-4">
                                    <h4 class="fw-bold mb-2" style="color: #091E3E; font-size: 1.4rem;">Madrasah
                                        Tsanawiyah (MTs)</h4>
                                    <h5 class="text-muted mb-4" style="font-size: 1.1rem; font-weight: 500;">Majlis
                                        Dakwah Islamiyah</h5>
                                    <p class="text-muted mb-0"
                                        style="font-size: 0.925rem; line-height: 1.7; text-align: justify; letter-spacing: 0.3px;">
                                        Madrasah Tsanawiyah (MTs) Majlis Dakwah Islamiyah didirikan oleh Yayasan Pondok
                                        Pesantren Modern Khafidul Quran merupakan lembaga pendidikan formal yang mengacu
                                        pada kurikulum Kementerian Agama setara dengan Sekolah Menengah Pertama berada
                                        di bawah naungan yayasan Pondok Pesantren Modern Khafidul Quran.
                                    </p>
                                </div>
                                <!-- Badge Akreditasi -->
                                <div class="w-100 text-center mt-3">
                                    <span class="d-inline-block fw-bold py-2 px-4"
                                        style="background-color: #fff9e6; color: #ffb300; font-size: 0.75rem; letter-spacing: 0.5px; border-radius: 8px; text-transform: uppercase;">
                                        JENJANG MTs - TERAKREDITASI B
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Kartu 2: MA -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="px-2">

                        <!-- Elemen 1: Kotak Profil Kepala Sekolah (Diberi mb-4 agar memiliki jeda spasi dengan gambar bawah) -->
                        <div class="bg-white p-3 d-flex align-items-center gap-3 shadow-sm border-start border-4 mb-4"
                            style="border-color: #004b87 !important; border-radius: 16px;">
                            <div class="ps-2">
                                <img src="{{ asset('img/profil.png') }}" alt="Kepala MA"
                                    class="rounded-circle shadow-sm"
                                    style="width: 55px; height: 55px; object-fit: cover;">
                            </div>
                            <div class="text-start">
                                <small class="text-uppercase text-muted fw-bold d-block mb-1"
                                    style="font-size: 0.65rem; letter-spacing: 1px;">Kepala Sekolah MA</small>
                                <h6 class="fw-bold text-primary mb-0" style="font-size: 0.95rem;">Arwani,S.Pd</h6>
                            </div>
                        </div>

                        <!-- Elemen 2: Kotak Utama (Gambar & Deskripsi Luas) -->
                        <div class="card border-0 shadow-sm bg-white overflow-hidden" style="border-radius: 16px;">
                            <!-- Gambar Dokumentasi -->
                            <div style="height: 280px; width: 100%;">
                                <img src="{{ asset('img/pondok/gambar8.jpg') }}" alt="MA" class="w-100 h-100"
                                    style="object-fit: cover;">
                            </div>

                            <!-- Detail Teks Deskripsi Lebar -->
                            <div class="card-body p-5 text-center">
                                <div class="mb-4">
                                    <h4 class="fw-bold mb-2" style="color: #091E3E; font-size: 1.4rem;">Madrasah
                                        Aliyah (MA)</h4>
                                    <h5 class="text-muted mb-4" style="font-size: 1.1rem; font-weight: 500;">Nasrullah
                                        Jatirejo</h5>
                                    <p class="text-muted mb-0"
                                        style="font-size: 0.925rem; line-height: 1.7; text-align: justify; letter-spacing: 0.3px;">
                                        Madrasah Aliyah (MA) Nasrullah didirikan oleh Yayasan Pondok Pesantren Modern
                                        Khafidul Quran pada tahun 2003, merupakan lembaga pendidikan formal yang mengacu
                                        pada kurikulum Kementerian Agama setara dengan Sekolah Menengah Atas. Berfungsi
                                        memperluas kiprah lembaga dan mencetak lulusan berwawasan luas.
                                    </p>
                                </div>
                                <!-- Badge Akreditasi -->
                                <div class="w-100 text-center mt-3">
                                    <span class="d-inline-block fw-bold py-2 px-4"
                                        style="background-color: #e6f0fa; color: #004b87; font-size: 0.75rem; letter-spacing: 0.5px; border-radius: 8px; text-transform: uppercase;">
                                        JENJANG MA - TERAKREDITASI B
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Program Studi End -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Fasilitas Pesantren</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Asrama Santri Putra</h4>
                        <p class="m-0 text-muted small">Memiliki 12 unit kamar yang masing-masing ditempati oleh 5-6
                            orang. Fasilitas di dalam kamar meliputi kasur dan almari, dengan posisi gedung berada di
                            depan pondok pesantren Pondok Pesantren Modern Khafidul Quran.</p>
                        <a class="btn btn-lg btn-primary rounded mt-3" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Asrama Santri Putri</h4>
                        <p class="m-0 text-muted small">Terdiri dari 9 unit kamar yang masing-masing berkapasitas 4-5
                            orang. Fasilitas pendukungnya meliputi dua kasur dan almari, dengan lokasi bangunan berada
                            di bagian belakang Pondok Pesantren Modern Khafidul Quran.</p>
                        <a class="btn btn-lg btn-primary rounded mt-3" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Masjid Taju Khafidul Quran</h4>
                        <p class="m-0 text-muted small">Berukuran 15x15 meter yang terletak di tengah kompleks pondok
                            pesantren. Masjid ini berfungsi sebagai pusat ibadah, pengkajian kitab kuning, dan kegiatan
                            khataman al-Qur’an yang rutin dilakukan setiap tahun.</p>
                        <a class="btn btn-lg btn-primary rounded mt-3" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Lapangan Olahraga</h4>
                        <p class="m-0 text-muted small">Terletak di halaman belakang asrama putra and putri. Fasilitas
                            ini mencakup lapangan bola voli, lapangan badminton, dan lapangan bola basket.</p>
                        <a class="btn btn-lg btn-primary rounded mt-3" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">Aula Ngaji</h4>
                        <p class="m-0 text-muted small">Ruangan seluas 10x10 meter yang digunakan sebagai tempat
                            kegiatan pengajaran dan pertemuan santri dan alumni selain di masjid.</p>
                        <a class="btn btn-lg btn-primary rounded mt-3" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon mb-3">
                            <i class="fa fa-desktop text-white"></i>
                        </div>
                        <h4 class="mb-3">Laboratorium Komputer</h4>
                        <p class="m-0 text-muted small">Sebagai salah satu sarana penunjang bagi santri untuk belajar
                            teknologi, mencakup pengajaran dasar seperti Microsoft Word, Excel, Power Point, dan
                            pembuatan blog.</p>
                        <a class="btn btn-lg btn-primary rounded mt-3" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3" style="font-size: clamp(1.8rem, 5vw, 2.3rem);">Kenapa Harus Memilih <br><span
                        class="text-primary"> Pondok Pesanten Khafidul Qur'an?</span></h2>
                <div class="mx-auto" style="width: 50px; height: 3px; background: #ffc107;"></div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <i class="fas fa-mosque fa-3x text-primary mb-3"></i>
                        <h5 class="font-weight-bold">Nilai Keislaman</h5>
                        <p class="text-muted small">Kurikulum yang mengintegrasikan ilmu pengetahuan modern dan
                            nilai-nilai keislaman.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <i class="fas fa-hand-holding-usd fa-3x text-primary mb-3"></i>
                        <h5 class="font-weight-bold">Kurikulum Terpadu & Rasional</h5>
                        <p class="text-muted small">Mengintegrasikan ayat-ayat suci Al-Quran, Hadis, dan kitab kuning
                            dengan melakukan elaborasi pemikiran Islam yang logis untuk memperkuat fondasi kebijaksanaan
                            bagi setiap santri.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <i class="fas fa-user-tie fa-3x text-primary mb-3"></i>
                        <h5 class="font-weight-bold">Fasilitas Penunjang Lengkap</h5>
                        <p class="text-muted small">Pondok Pesantren Modern Khafidul Quran juga menyediakan sarana
                            prasarana mandiri untuk mendukung kemaslahatan santri, mulai dari asrama putra dan putri,
                            masjid sebagai pusat ibadah, hingga area olahraga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Pesan Alumni</h1>
                <h5 class="fw-bold text-primary text-uppercase">Apa Kata Mereka?</h5>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('img/testimonial-1.jpg') }}"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Fajri Maulana</h4>
                            <small class="text-uppercase">Alumni</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('img/testimonial-2.jpg') }}"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Doni Setiawan</h4>
                            <small class="text-uppercase">Alumni</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;"
                            alt="">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Risky Saputra</h4>
                            <small class="text-uppercase">Orang Tua Santri</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('img/testimonial-4.jpg') }}"
                            style="width: 60px; height: 60px;" alt="">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Putri Indriani</h4>
                            <small class="text-uppercase">Alumni</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Kabar Pesantren</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/blog-1.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/blog-2.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/blog-3.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light mt-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #1a1a1a;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 40px;" class="me-2">
                    </div>
                    <p class="mb-4">Mencetak generasi Qur'ani yang modern, berwawasan global, dan menjunjung tinggi
                        nilai-nilai keislaman.</p>
                    <div class="d-flex">
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle me-2" href="#"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-danger btn-sm rounded-circle" href="#"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Tautan</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2 text-decoration-none" href="#">Profil</a>
                        <a class="text-light mb-2 text-decoration-none" href="#">Akademik</a>
                        <a class="text-light mb-2 text-decoration-none" href="#">Informasi</a>
                        <a class="text-light mb-2 text-decoration-none" href="#">Database</a>
                        <a class="text-light text-decoration-none" href="#">Galeri</a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <h5 class="text-white mb-4">Informasi Kontak</h5>
                    <p>Jangan ragu untuk menghubungi kami!</p>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt-fill text-danger me-3"></i>
                        <p class="mb-0">Jatirejo, Ampelgading, Pemalang</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone-fill text-danger me-3"></i>
                        <p class="mb-0">082329117255</p>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-envelope-fill text-danger me-3"></i>
                        <p class="mb-0">ponpeskhafidulquran@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright border-top border-secondary py-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0">Copyright &copy; 2026 Fajri Maulana.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
