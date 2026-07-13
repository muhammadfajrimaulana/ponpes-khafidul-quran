<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Data Santri - Pondok Pesantren Modern Khafidul Quran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pondok Pesantren Modern Khafidul Quran Pemalang" name="description">

    <link href="img/logo.png" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Base Reset & Typography */
        body { 
            font-family: 'Nunito', sans-serif; 
            background-color: #f8f9fa; 
        }

        /* Navigasi Dropdown Custom */
        .dropdown-menu {
            margin: 0;
            border: 0;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }

        /* Card Santri Styling (Disamakan dengan model Card Alumni) */
        .card-santri {
            background: #fff; 
            border-radius: 20px; 
            overflow: hidden; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.08); 
            text-align: center; 
            height: 100%; 
            position: relative;
            border: 1px solid #edf2f7;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-santri:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        /* Link utility pada Bagian Footer */
        .footer-link {
            color: #ced4da !important;
            transition: color 0.3s ease;
        }
        .footer-link:hover {
            color: #ffcc00 !important; /* Warna accent kuning saat hover */
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
            <h1 class="m-0 text-white" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2;">Database <br><span class="text-warning">Data Santri Aktif</span></h1>
            <div class="mt-4" style="display: inline-flex; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 8px 25px; border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.9rem;">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a> 
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem; line-height: 24px;"></i> 
                <span class="text-warning fw-bold">Data Santri</span>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="shadow-sm" style="background: #fff; padding: 50px 35px; border-radius: 24px; margin-top: -40px; position: relative; z-index: 5;">
            
            <div class="row g-3 mb-5 justify-content-center p-4 bg-light border-0" style="border-radius: 16px;">
                <div class="col-md-3">
                    <select class="form-select shadow-none" style="border-color: #ced4da;">
                        <option>Pilih Jenjang/Kelas</option>
                        <option>Kelas VII - MTs</option>
                        <option>Kelas VIII - MTs</option>
                        <option>Kelas IX - MTs</option>
                        <option>Kelas X - MA</option>
                        <option>Kelas XI - MA</option>
                        <option>Kelas XII - MA</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control shadow-none" placeholder="Cari nama atau NISN Santri...">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>

            <div class="text-center text-lg-start mb-4">
                <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Daftar Seluruh Santri Aktif</span>
                <p class="text-muted small m-0 mt-1">Berikut adalah data resmi santri Pondok Pesantren Modern Khafidul Quran Pemalang.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <div class="col-lg-4 col-md-6">
                    <div class="card-santri">
                        <div style="height: 120px; background: linear-gradient(to right, #004b87 0%, #003366 100%); position: relative;">
                            <div style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 2;">
                                <img src="https://via.placeholder.com/150x200" alt="Ahmad Zaki Al-Fatih" style="width: 110px; height: 110px; border-radius: 50%; border: 5px solid #fff; object-fit: cover; background: #f8f9fa; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                        <div style="padding: 70px 20px 35px 20px;">
                            <h5 style="font-weight: 800; font-size: 1.1rem; color: #003366; margin-bottom: 5px; text-transform: uppercase;">AHMAD ZAKI AL-FATIH</h5>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px; min-height: 25px;">Kelas VIII - MTs</p>
                            <button data-bs-toggle="modal" data-bs-target="#modalSantri1" class="btn btn-sm btn-outline-primary px-4 rounded-pill fw-bold" style="font-size: 0.8rem;">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-santri">
                        <div style="height: 120px; background: linear-gradient(to right, #004b87 0%, #003366 100%); position: relative;">
                            <div style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 2;">
                                <img src="https://via.placeholder.com/150x200" alt="Siti Fatimah Azzahra" style="width: 110px; height: 110px; border-radius: 50%; border: 5px solid #fff; object-fit: cover; background: #f8f9fa; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                        <div style="padding: 70px 20px 35px 20px;">
                            <h5 style="font-weight: 800; font-size: 1.1rem; color: #003366; margin-bottom: 5px; text-transform: uppercase;">SITI FATIMAH AZZAHRA</h5>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px; min-height: 25px;">Kelas XI - MA</p>
                            <button data-bs-toggle="modal" data-bs-target="#modalSantri2" class="btn btn-sm btn-outline-primary px-4 rounded-pill fw-bold" style="font-size: 0.8rem;">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-santri">
                        <div style="height: 120px; background: linear-gradient(to right, #004b87 0%, #003366 100%); position: relative;">
                            <div style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 2;">
                                <img src="https://via.placeholder.com/150x200" alt="Muhammad Rizky Pratama" style="width: 110px; height: 110px; border-radius: 50%; border: 5px solid #fff; object-fit: cover; background: #f8f9fa; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                        <div style="padding: 70px 20px 35px 20px;">
                            <h5 style="font-weight: 800; font-size: 1.1rem; color: #003366; margin-bottom: 5px; text-transform: uppercase;">MUHAMMAD RIZKY PRATAMA</h5>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px; min-height: 25px;">Kelas IX - MTs</p>
                            <button data-bs-toggle="modal" data-bs-target="#modalSantri3" class="btn btn-sm btn-outline-primary px-4 rounded-pill fw-bold" style="font-size: 0.8rem;">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-santri">
                        <div style="height: 120px; background: linear-gradient(to right, #004b87 0%, #003366 100%); position: relative;">
                            <div style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 2;">
                                <img src="https://via.placeholder.com/150x200" alt="Aisyah Humaira" style="width: 110px; height: 110px; border-radius: 50%; border: 5px solid #fff; object-fit: cover; background: #f8f9fa; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
                            </div>
                        </div>
                        <div style="padding: 70px 20px 35px 20px;">
                            <h5 style="font-weight: 800; font-size: 1.1rem; color: #003366; margin-bottom: 5px; text-transform: uppercase;">AISYAH HUMAIRA</h5>
                            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px; min-height: 25px;">Kelas XII - MA</p>
                            <button data-bs-toggle="modal" data-bs-target="#modalSantri4" class="btn btn-sm btn-outline-primary px-4 rounded-pill fw-bold" style="font-size: 0.8rem;">Lihat Detail</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSantri1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; overflow: hidden;">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #004b87, #003366); border: none;">
                    <h5 class="modal-title fw-bold text-white text-uppercase" style="font-size: 0.9rem; letter-spacing: 0.5px;"><i class="fas fa-user-circle me-2"></i>Detail Profil Santri</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-start">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/150x200" alt="Ahmad Zaki Al-Fatih" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid #004b87; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 class="fw-bold mt-2 mb-0" style="color: #004b87; font-size: 1.25rem;">AHMAD ZAKI AL-FATIH</h4>
                        <span class="badge bg-success px-3 py-2 rounded-pill mt-1" style="font-size: 0.75rem;">Aktif</span>
                    </div>
                    <table class="table table-striped table-bordered m-0" style="font-size: 0.9rem;">
                        <tbody>
                            <tr><th style="width: 38%; color: #003366;"><i class="fas fa-id-card text-primary me-2"></i>NISN</th><td>0054321011</td></tr>
                            <tr><th style="color: #003366;"><i class="fas fa-venus-mars text-primary me-2"></i>Jenis Kelamin</th><td>Laki-laki</td></tr>
                            <tr><th style="color: #003366;"><i class="fas fa-graduation-cap text-primary me-2"></i>Jenjang / Kelas</th><td>Kelas VIII - MTs</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-light" style="border: none;">
                    <button type="button" class="btn btn-secondary px-4 rounded-pill fw-bold" data-bs-dismiss="modal" style="font-size: 0.8rem;">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSantri2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; overflow: hidden;">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #004b87, #003366); border: none;">
                    <h5 class="modal-title fw-bold text-white text-uppercase" style="font-size: 0.9rem; letter-spacing: 0.5px;"><i class="fas fa-user-circle me-2"></i>Detail Profil Santri</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-start">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/150x200" alt="Siti Fatimah Azzahra" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid #004b87; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 class="fw-bold mt-2 mb-0" style="color: #004b87; font-size: 1.25rem;">SITI FATIMAH AZZAHRA</h4>
                        <span class="badge bg-success px-3 py-2 rounded-pill mt-1" style="font-size: 0.75rem;">Aktif</span>
                    </div>
                    <table class="table table-striped table-bordered m-0" style="font-size: 0.9rem;">
                        <tbody>
                            <tr><th style="width: 38%; color: #003366;"><i class="fas fa-id-card text-primary me-2"></i>NISN</th><td>0061234599</td></tr>
                            <tr><th style="color: #003366;"><i class="fas fa-venus-mars text-primary me-2"></i>Jenis Kelamin</th><td>Perempuan</td></tr>
                            <tr><th style="color: #003366;"><i class="fas fa-graduation-cap text-primary me-2"></i>Jenjang / Kelas</th><td>Kelas XI - MA</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-light" style="border: none;">
                    <button type="button" class="btn btn-secondary px-4 rounded-pill fw-bold" data-bs-dismiss="modal" style="font-size: 0.8rem;">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSantri3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; overflow: hidden;">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #004b87, #003366); border: none;">
                    <h5 class="modal-title fw-bold text-white text-uppercase" style="font-size: 0.9rem; letter-spacing: 0.5px;"><i class="fas fa-user-circle me-2"></i>Detail Profil Santri</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-start">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/150x200" alt="Muhammad Rizky Pratama" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid #004b87; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 class="fw-bold mt-2 mb-0" style="color: #004b87; font-size: 1.25rem;">MUHAMMAD RIZKY PRATAMA</h4>
                        <span class="badge bg-success px-3 py-2 rounded-pill mt-1" style="font-size: 0.75rem;">Aktif</span>
                    </div>
                    <table class="table table-striped table-bordered m-0" style="font-size: 0.9rem;">
                        <tbody>
                            <tr><th style="width: 38%; color: #003366;"><i class="fas fa-id-card text-primary me-2"></i>NISN</th><td>0059876543</td></tr>
                            <tr><th style="color: #003366;"><i class="fas fa-venus-mars text-primary me-2"></i>Jenis Kelamin</th><td>Laki-laki</td></tr>
                            <tr><th style="color: #003366;"><i class="fas fa-graduation-cap text-primary me-2"></i>Jenjang / Kelas</th><td>Kelas IX - MTs</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-light" style="border: none;">
                    <button type="button" class="btn btn-secondary px-4 rounded-pill fw-bold" data-bs-dismiss="modal" style="font-size: 0.8rem;">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSantri4" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 16px; border: none; overflow: hidden;">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #004b87, #003366); border: none;">
                    <h5 class="modal-title fw-bold text-white text-uppercase" style="font-size: 0.9rem; letter-spacing: 0.5px;"><i class="fas fa-user-circle me-2"></i>Detail Profil Santri</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-start">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/150x200" alt="Aisyah Humaira" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid #004b87; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 class="fw-bold mt-2 mb-0" style="color: #004b87; font-size: 1.25rem;">AISYAH HUMAIRA</h4>
                        <span class="badge bg-success px-3 py-2 rounded-pill mt-1" style="font-size: 0.75rem;">Aktif</span>
                    </div>
                    <table class="table table-striped table-bordered m-0" style="font-size: 0.9rem;">
                        <tbody>
                            <tr><th style="width: 38%; color: #003366;"><i class="fas fa-id-card text-primary me-2"></i>NISN</th><td>0048765432</td></tr>
                            <tr><th style="color: #003366;"><i class="fas fa-venus-mars text-primary me-2"></i>Jenis Kelamin</th><td>Perempuan</td></tr>
                            <tr><th style="color: #003366;"><i class="fas fa-graduation-cap text-primary me-2"></i>Jenjang / Kelas</th><td>Kelas XII - MA</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-light" style="border: none;">
                    <button type="button" class="btn btn-secondary px-4 rounded-pill fw-bold" data-bs-dismiss="modal" style="font-size: 0.8rem;">Tutup</button>
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
                        <a class="mb-2 text-decoration-none footer-link" href="index.html">Profil</a>
                        <a class="mb-2 text-decoration-none footer-link" href="#">Akademik</a>
                        <a class="mb-2 text-decoration-none footer-link" href="#">Informasi</a>
                        <a class="mb-2 text-decoration-none footer-link" href="#">Database</a>
                        <a class="text-decoration-none footer-link" href="#">Galeri</a>
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
                        <p class="mb-0" style="color: #ced4da !important;">+62 878-3052-0112</p>
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
                        <p class="mb-0" style="color: #ced4da !important;">Copyright &copy; 2026 M Fajri Maulana. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top" style="position: fixed; bottom: 30px; right: 30px; z-index: 99;"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });
        $('.back-to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
            return false;
        });
    </script>
</body>

</html>