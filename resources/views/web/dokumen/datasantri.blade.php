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
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">
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
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        /* Card Santri Styling (Disamakan dengan model Card Alumni) */
        .card-santri {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
            height: 100%;
            position: relative;
            border: 1px solid #edf2f7;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-santri:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        /* Link utility pada Bagian Footer */
        .footer-link {
            color: #ced4da !important;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #ffcc00 !important;
            /* Warna accent kuning saat hover */
        }
    </style>
</head>

<body style="background-color: #f8f9fa;">

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
                    <a class="text-light me-3 text-decoration-none small" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i
                            class="fab fa-instagram"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i
                            class="fab fa-youtube"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i
                            class="fab fa-whatsapp"></i></a>
                    <a class="text-light me-3 text-decoration-none small" href="#"><i
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
            <!-- Logo & Nama Sekolah -->
            <a href="{{ route('beranda') }}" class="navbar-brand p-0 d-flex align-items-center">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 50px; width: auto;" class="me-3">
                <div class="lh-1">
                    <span class="fw-bold text-primary text-uppercase d-block"
                        style="font-size: 0.9rem; letter-spacing: 0.5px;">PONDOK PESANTREN MODERN</span>
                    <span class="fw-bold text-uppercase" style="font-size: 1.1rem; color: #004b87;">KHAFIDUL QURAN
                        PEMALANG</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <!-- Daftar Menu -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 align-items-lg-center">
                    <a href="{{ route('beranda') }}" class="nav-item nav-link fw-bold text-uppercase mx-1"
                        style="font-size: 0.85rem;">Beranda</a>

                    <div class="nav-item dropdown mx-1">
                        <a href="#" class="nav-link dropdown-toggle fw-bold text-uppercase text-primary active"
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
                            <a href="{{ route('madrasah-tsanawiyah') }}" class="dropdown-item">Madrasah Tsanawiyah</a>
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
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid"
        style="position: relative; background: linear-gradient(135deg, #004b87 0%, #003366 100%); min-height: 300px; display: flex; align-items: center; color: white; padding: 40px 0 90px 0;">
        <div class="container px-5 text-center text-lg-start">
            <h1 class="m-0 text-white" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2;">
                Database <br><span class="text-warning">Data Santri Aktif</span></h1>
            <div class="mt-4"
                style="display: inline-flex; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 8px 25px; border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2); font-size: 0.9rem;">
                <a href="index.html" class="text-decoration-none text-white">Beranda</a>
                <i class="fas fa-chevron-right mx-3 text-white-50" style="font-size: 0.7rem; line-height: 24px;"></i>
                <span class="text-warning fw-bold">Data Santri</span>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="shadow-sm"
            style="background: #fff; padding: 50px 35px; border-radius: 24px; margin-top: -40px; position: relative; z-index: 5;">

            <form action="{{ route('santri') }}" method="GET"
                class="row g-3 mb-5 justify-content-center p-4 bg-light border-0" style="border-radius: 16px;">
                <div class="col-md-3">
                    <select name="kelas" class="form-select shadow-none" onchange="this.form.submit()">
                        <option value="">Pilih Jenjang/Kelas</option>
                        @foreach (['VII / 1 MTs', 'VIII / 2 MTs', 'IX / 3 MTs', 'X / 1 MA', 'XI / 2 MA', 'XII / 3 MA'] as $k)
                            <option value="{{ $k }}" {{ request('kelas') == $k ? 'selected' : '' }}>
                                {{ $k }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control shadow-none"
                                placeholder="Cari nama atau NISN Santri..." value="{{ request('search') }}">

                            <button type="submit" class="btn btn-primary px-3 gap-4">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>

                        <a href="{{ route('santri') }}" class="btn btn-secondary px-3">
                            Reset
                        </a>
                    </div>
                </div>
            </form>

            <div class="text-center text-lg-start mb-4">
                <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1px;">Daftar Seluruh
                    Santri Aktif</span>
                <p class="text-muted small m-0 mt-1">Berikut adalah data resmi santri Pondok Pesantren Modern Khafidul
                    Quran Pemalang.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="row g-4 justify-content-center">
                    @forelse ($santri as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="card-santri">
                                <div
                                    style="height: 120px; background: linear-gradient(to right, #004b87 0%, #003366 100%); position: relative;">
                                    <div
                                        style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 2;">
                                        @php
                                            $fotoPath = 'storage/profiles/' . $item->foto;
                                            $fotoTersedia = !empty($item->foto) && file_exists(public_path($fotoPath));
                                        @endphp

                                        <img src="{{ $fotoTersedia ? asset($fotoPath) : asset('storage/profiles/default.jpg') }}"
                                            alt="Foto {{ $item->nama_santri }}"
                                            style="width: 110px; height: 110px; border-radius: 50%; border: 5px solid #fff; object-fit: cover; background: #f8f9fa;">
                                    </div>
                                </div>
                                <div style="padding: 70px 20px 35px 20px;">
                                    <h5
                                        style="font-weight: 800; font-size: 1.1rem; color: #003366; margin-bottom: 5px; text-transform: uppercase;">
                                        {{ $item->nama_santri }}</h5>
                                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px;">
                                        {{ $item->kelas }}</p>
                                    <!-- Tombol memicu JavaScript untuk mengisi modal -->
                                    <button type="button" onclick="showDetail({{ json_encode($item) }})"
                                        class="btn btn-sm btn-outline-primary px-4 rounded-pill fw-bold">Lihat
                                        Detail</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <div class="alert alert-warning d-inline-block px-5 py-3 shadow-sm" role="alert">
                                <i class="bi bi-info-circle me-2"></i>
                                <strong>Oops!</strong> Data santri tidak ditemukan untuk kriteria pencarian tersebut.
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDetail" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Body dengan ID agar bisa diisi JS -->
                <div class="modal-body p-4 text-start">
                    <div class="text-center mb-4">
                        <img id="mFoto" src="" class="rounded-circle"
                            style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #004b87;">
                        <h4 id="mNama" class="fw-bold mt-2" style="color: #004b87;"></h4>
                    </div>
                    <table class="table table-striped table-bordered" style="font-size: 0.9rem;">
                        <tr>
                            <th>NISN</th>
                            <td id="mNisn"></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td id="mJk"></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td id="mKelas"></td>
                        </tr>
                    </table>
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
                    <p class="mb-4" style="color: #ced4da !important;">Mencetak generasi Qur'ani yang modern,
                        berwawasan global, dan menjunjung tinggi nilai-nilai keislaman.</p>
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
                        <p class="mb-0" style="color: #ced4da !important;">Copyright &copy; 2026 M Fajri Maulana.
                            All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"
        style="position: fixed; bottom: 30px; right: 30px; z-index: 99;"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });
        $('.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1500, 'easeInOutExpo');
            return false;
        });

        function showDetail(data) {
            let baseUrl = "{{ asset('storage/profiles/') }}/";
            let fotoUrl = data.foto ? baseUrl + data.foto : "{{ asset('storage/profiles/default.jpg') }}";
            // Isi data ke dalam modal
            document.getElementById('mFoto').src = fotoUrl;
            document.getElementById('mNama').innerText = data.nama_santri;
            document.getElementById('mNisn').innerText = data.nisn;
            document.getElementById('mJk').innerText = data.jenis_kelamin;
            document.getElementById('mKelas').innerText = data.kelas;

            // Tampilkan modal
            var myModal = new bootstrap.Modal(document.getElementById('modalDetail'));
            myModal.show();
        }
    </script>
</body>

</html>
