<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Iansui&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}"">
    <title>AKP Persada</title>
</head>

<body>
    <!-- Start Hero Section-->
    <section id=" hero" class="position-relative" style="height: 100vh;">
    <div class="video-wrapper position-absolute top-0 start-0 w-100 h-100 z-n1">
        <video autoplay muted loop playsinline id="bg-video">
            <source src="{{ asset('videos/video.mp4') }}" type="video/mp4" />
        </video>
        <div class="video-overlay position-absolute w-100 h-100"></div>
    </div>

    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="text-center text-white" data-aos="fade-up" data-aos-delay="300">
            <h1 data-aos="fade-up">PT. AKP PERSADA</h1>
            <p class="fs-4" data-aos="fade-up" data-aos-delay="100">Mitra Andal dalam Perdagangan Umum dan Jasa
                Industri</p>
            <a href="#" class="btn-custom mt-3" data-aos="fade-up" data-aos-delay="200">Hubungi Kami</a>
        </div>
    </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Tentang -->
    <section id="tentang" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-center py-5">
                <p class="judul text-dark" data-aos="fade-down">Tentang Kami</p>
            </div>
            <div class="row">
                <div class="d-flex flex-column flex-xl-row align-items-center">
                    <div class="col-xl-6 mb-4 mb-xl-0 pe-xl-4" data-aos="fade-right">
                        <img src="{{ asset('images/background.jpg') }}" alt="Tentang Kami"
                            class="img-fluid rounded mb-4 mb-md-0">
                    </div>
                    <div class="col-xl-6" data-aos="fade-left">
                        <p class="text-dark" style="text-align: justify;">PT. AKP Persada bergerak di bidang
                            perdagangan umum dan jasa, beberapa
                            produk kami dibidang Perindustrian, meliputi: Industri Karet, Kertas, Karton dll. PT. AKP
                            Persada berdiri pada tanggal 23 Juli 2018, berdasarkan akta Notaris Zaenab, S.H., No. 03.
                            Perseroan ini berdiri atas dasar untuk memberikan kontribusi dalam meningkatkan kegiatan
                            ekonomi
                            dan merupakan salah satu kontribusi kami dalam menciptakan kesejahteraan dan kemakmuran
                            bersama.
                        </p>
                        <div class="row text-dark text-center pt-3">
                            <div class="col-6 col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                                <i class="fas fa-clipboard-check icon pb-2"></i>
                                <h5 class="pro">100 ++</h5>
                                <h5 class="pro">Projek</h5>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                                <i class="fas fa-box icon pb-2"></i>
                                <h5 class="pro">20 ++</h5>
                                <h5 class="pro">Produk</h5>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                                <i class="fas fa-users icon pb-2"></i>
                                <h5 class="pro">50 ++</h5>
                                <h5 class="pro">Klien</h5>
                            </div>
                            <div class="col-6 col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="400">
                                <i class="fas fa-clock icon pb-2"></i>
                                <h5 class="pro">7 ++</h5>
                                <h5 class="pro">Pengalaman</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 gx-5">
                <div class="col-12 col-md-5 vimi mb-4 mb-md-0" data-aos="fade-right">
                    <div class="vimi-header d-flex justify-content-between align-items-center mb-3">
                        <h5 class="m-0">Visi</h5>
                        <div class="dots d-flex gap-2">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                    <p>Menjadikan perusahaan kami salah satu perusahaan yang besar dapat berkembang dan mampu bersaing
                        secara global dengan perusahaan-perusahaan lainnya.</p>
                </div>

                <div class="col-12 col-md-5 offset-md-1 vimi" data-aos="fade-left" data-aos-delay="100">
                    <div class="vimi-header d-flex justify-content-between align-items-center mb-3">
                        <h5 class="m-0">Misi</h5>
                        <div class="dots d-flex gap-2">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                    <p>Misi kami adalah berkomitmen untuk terus maju dan berkembang dengan mengutamakan kualitas dan
                        memberikan pelayanan yang optimal.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tentang -->

    <!-- Start Layanan -->
    <section id="layanan">
        <div class="container py-5">
            <div class="d-flex justify-content-center pb-5">
                <p class="judul text-dark" data-aos="fade-down">Layanan Kami</p>
            </div>
            <div class="text-center text-dark">
                <h3 class="fw-semibold" data-aos="fade-up">Solusi Tepat untuk <span style="color: #335FCE;">Industri
                        Anda</span></h3>
                <p data-aos="fade-up" data-aos-delay="100">Kami hadir untuk mendukung kelancaran usaha Anda dengan
                    berbagai produk unggulan dan layanan
                    profesional
                    di berbagai bidang industri. Kami berkomitmen memberikan kualitas dan pelayanan terbaik untuk
                    membantu
                    bisnis Anda tumbuh dan berkembang.</p>
            </div>
            <div class="row layanan my-5 rounded-pill align-items-center" data-aos="fade-up">
                <!-- Bidang Percetakan -->
                <div class="col-md-6 d-flex align-items-center mb-4 mb-md-0" data-aos="fade-right">
                    <div class="circle-icon me-3 d-flex justify-content-center align-items-center" data-aos="zoom-in">
                        <i class="fas fa-print"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Bidang Percetakan</h5>
                        <ul>
                            <li data-aos="fade-right" data-aos-delay="100">Penerbitan, Penjilidan & Pengepakan Buku</li>
                            <li data-aos="fade-right" data-aos-delay="150">Desain & Cetak Grafis</li>
                            <li data-aos="fade-right" data-aos-delay="200">Offset</li>
                            <li data-aos="fade-right" data-aos-delay="250">Majalah & Tabloid</li>
                            <li data-aos="fade-right" data-aos-delay="300">Sablon & Dokumen</li>
                        </ul>
                    </div>
                </div>

                <!-- Bidang Perdagangan -->
                <div class="col-md-6 d-flex align-items-center" data-aos="fade-left">
                    <div class="circle-icon me-3 d-flex justify-content-center align-items-center" data-aos="zoom-in"
                        data-aos-delay="100">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Bidang Perdagangan</h5>
                        <ul>
                            <li data-aos="fade-left" data-aos-delay="100">Export & Import</li>
                            <li data-aos="fade-left" data-aos-delay="150">Agen</li>
                            <li data-aos="fade-left" data-aos-delay="200">Grosir</li>
                            <li data-aos="fade-left" data-aos-delay="250">Supplier</li>
                            <li data-aos="fade-left" data-aos-delay="300">Distributor</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row layanan my-5 rounded-pill align-items-center" data-aos="fade-up">
                <!-- Bidang Perindustrian -->
                <div class="col-md-6 d-flex align-items-center mb-4 mb-md-0" data-aos="fade-right">
                    <div class="circle-icon me-3 d-flex justify-content-center align-items-center" data-aos="zoom-in">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Bidang Perindustrian</h5>
                        <ul>
                            <li data-aos="fade-right" data-aos-delay="100">Industri Karet</li>
                            <li data-aos="fade-right" data-aos-delay="150">Industri Kertas</li>
                            <li data-aos="fade-right" data-aos-delay="200">Industri Karton</li>
                            <li data-aos="fade-right" data-aos-delay="250">Industri Kayu</li>
                        </ul>
                    </div>
                </div>

                <!-- Bidang Jasa -->
                <div class="col-md-6 d-flex align-items-center" data-aos="fade-left">
                    <div class="circle-icon me-3 d-flex justify-content-center align-items-center" data-aos="zoom-in"
                        data-aos-delay="100">
                        <i class="fas fa-computer"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Bidang Jasa</h5>
                        <ul>
                            <li data-aos="fade-left" data-aos-delay="100">Periklanan</li>
                            <li data-aos="fade-left" data-aos-delay="150">Promosi</li>
                            <li data-aos="fade-left" data-aos-delay="200">Pemasaran (Billboard, Logo, Brosur, dll)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Layanan -->

    <!-- Start Alat -->
    <section id="alat">
        <div class="container py-5">
            <div class="d-flex justify-content-center pb-5">
                <p class="judul text-dark" data-aos="fade-down">Alat Kami</p>
            </div>
            <div class="container mb-4 text-center">
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <button onclick="filterAlat(null)"
                        class="kategori-btn {{ request('kategori_alat_id') == null ? 'active' : '' }}">
                        <span>Semua</span>
                    </button>

                    @foreach ($kategorisAlat as $kategori)
                    <button onclick="filterAlat({{ $kategori->id }})"
                        class="kategori-btn {{ request('kategori_alat_id') == $kategori->id ? 'active' : '' }}">
                        <span>{{ $kategori->nama }}</span>
                    </button>
                    @endforeach
                </div>
            </div>

            <div id="alat-container">
                <div class="loading-spinner" id="loading-spinner"></div>
                <div class="row">
                    @forelse ($alats as $alat)
                    <div class="col-md-3">
                        <div class="alat-card">
                            <img src="{{ asset('storage/' . $alat->gambar) }}" alt="{{ $alat->nama }}">
                            <div class="alat-overlay">
                                <div>{{ $alat->nama }}</div>
                                <div class="alat-view-icon"
                                    onclick="showImageModal('{{ asset('storage/' . $alat->gambar) }}', '{{ $alat->nama }}')">
                                    <i class="fas fa-eye"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-danger">Tidak ada alat dalam kategori ini.</p>
                    @endforelse
                </div>
            </div>

            <!-- Modal Gambar Alat -->
            <div class="modal-overlay" id="imageModal">
                <div class="modal-container">
                    <button class="close-modal" onclick="closeImageModal()">&times;</button>
                    <div class="modal-image-wrapper">
                        <img id="modalImage" src="" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Alat -->

    <!-- Start Legalitas -->
    <section id="legalitas">
        <div class="container py-5">
            <div class="d-flex justify-content-start pb-3">
                <p class="judul text-white" data-aos="fade-down">Legalitas</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                    <h3 class="fw-bold text-white pb-3">
                        Legalitas Terjamin, Kepercayaan Anda Adalah Prioritas Kami!
                    </h3>
                    <p style="text-align: justify;">
                        Kami percaya bahwa kesuksesan dimulai dari dasar yang kokoh. Legalitas yang lengkap menjadi
                        salah satu pilar utama kami dalam menjalankan setiap bisnis dan kerja sama. Dengan landasan
                        hukum yang kuat, kami tidak hanya menawarkan produk dan layanan, tetapi juga memberikan
                        kepercayaan dan keamanan yang Anda butuhkan.
                    </p>
                    <p style="text-align: justify;">
                        Sebagai mitra yang profesional, kami siap membantu Anda mengembangkan bisnis dengan
                        langkah-langkah yang aman dan transparan. Setiap transaksi, setiap proyek, kami jalankan dengan
                        komitmen yang jelas dan penuh tanggung jawab.
                    </p>
                </div>

                <div class="col-lg-6 text-dark">
                    <div class="legal-card mb-4 d-flex" data-aos="fade-right">
                        <div class="legal-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="legal-content">
                            <h5 class="fw-semibold mb-2">Terdaftar dan Diakui</h5>
                            <p class="mb-0">Terdaftar secara resmi, menjamin keamanan dan kepercayaan dalam setiap
                                transaksi.</p>
                        </div>
                    </div>

                    <div class="legal-card mb-4 d-flex" data-aos="fade-right">
                        <div class="legal-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div>
                            <div class="legal-content">
                                <h5 class="fw-semibold mb-2">Dokumen Lengkap & Transparan</h5>
                                <p class="mb-0">Semua izin dan dokumen legal perusahaan kami tersimpan rapi dan selalu
                                    diperbarui.</p>
                            </div>
                        </div>
                    </div>

                    <div class="legal-card mb-4 d-flex" data-aos="fade-right">
                        <div class="legal-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <div>
                            <div class="legal-content">
                                <h5 class="fw-semibold mb-2">Komitmen pada Standar Resmi</h5>
                                <p class="mb-0">Dengan legalitas lengkap, kami berkomitmen menjalankan usaha sesuai
                                    dengan peraturan yang berlaku.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Legalitas -->

    <!-- Start Produk -->
    <section id="produk" class="py-5">
        <div class="container py-5">
            <div class="d-flex justify-content-center pb-5">
                <p class="judul text-dark" data-aos="fade-down">Produk Kami</p>
            </div>
            <div class="container mb-4 text-center">
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <button onclick="filterProduk(null)"
                        class="kategori-btn {{ request('kategori_produk_id') == null ? 'active' : '' }}">
                        <span>Semua</span>
                    </button>

                    @foreach ($kategorisProduk as $kategori)
                    <button onclick="filterProduk({{ $kategori->id }})"
                        class="kategori-btn {{ request('kategori_produk_id') == $kategori->id ? 'active' : '' }}">
                        <span>{{ $kategori->nama }}</span>
                    </button>
                    @endforeach
                </div>
            </div>

            <div id="produk-container">
                <div class="loading-spinner" id="loading-spinner-produk"></div>
                <div class="row">
                    @forelse ($produks as $produk)
                    <div class="col-md-3">
                        <div class="produk-card">
                            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}">
                            <div class="produk-overlay">
                                <div>{{ $produk->nama }}</div>
                                <div class="produk-view-icon"
                                    onclick="showImageModal('{{ asset('storage/' . $produk->gambar) }}', '{{ $produk->nama }}')">
                                    <i class="fas fa-eye"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-danger">Tidak ada produk dalam kategori ini.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Modal Gambar (sudah ada di kode Anda) -->
        <div class="modal-overlay" id="imageModal">
            <div class="modal-container">
                <button class="close-modal" onclick="closeImageModal()">&times;</button>
                <div class="modal-image-wrapper">
                    <img id="modalImage" src="" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Produk -->

    <!-- Start Klien -->
    <section id="klien" class="py-5 overflow-hidden">
        <div class="container">
            <div class="d-flex justify-content-center pb-5">
                <p class="judul text-dark" data-aos="fade-down">Klien Kami</p>
            </div>
            <div class="client-slider d-flex align-items-center">
                <div class="client-track d-flex">
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/ark.webp') }}" alt="Klien 1">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/bri-life.webp') }}" alt="Klien 2">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/crona.webp') }}" alt="Klien 3">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/dragon-pack.webp') }}" alt="Klien 4">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/gfs.webp') }}" alt="Klien 1 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/inna.webp') }}" alt="Klien 2 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/intifood.webp') }}" alt="Klien 3 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/java-hills-honey.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/mawar-cipta-mandiri.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/megah-nusantara.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/nassau.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/ocbc-nisp.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/qianhu-indonesia.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/toa.webp') }}" alt="Klien 4 duplicate">
                    </div>

                    <div class="client-logo">
                        <img src="{{ asset('images/klien/ark.webp') }}" alt="Klien 1">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/bri-life.webp') }}" alt="Klien 2">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/crona.webp') }}" alt="Klien 3">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/dragon-pack.webp') }}" alt="Klien 4">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/gfs.webp') }}" alt="Klien 1 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/inna.webp') }}" alt="Klien 2 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/intifood.webp') }}" alt="Klien 3 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/java-hills-honey.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/mawar-cipta-mandiri.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/megah-nusantara.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/nassau.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/ocbc-nisp.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/qianhu-indonesia.webp') }}" alt="Klien 4 duplicate">
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/klien/toa.webp') }}" alt="Klien 4 duplicate">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Klien -->

    <!-- Start Kontak -->
    <section id="kontak" class="py-5">
        <div class="container">
            <!-- Judul -->
            <div class="d-flex justify-content-center pb-5">
                <p class="judul text-dark" data-aos="fade-down">Kontak Kami</p>
            </div>

            <div class="row g-5">
                <!-- Konten Kiri -->
                <div class="col-12 col-lg-6 pe-lg-4">
                    <!-- Ditambah pe-lg-4 untuk gap lebih besar -->
                    <div class="kontak-content d-flex flex-column h-100">
                        <div class="mb-4">
                            <h3 class="fw-bold text-dark">Butuh Informasi Lebih Lanjut?</h3>
                            <h3 class="fw-bold mb-3">Hubungi Kami</h3>
                            <p class="text-secondary mb-3">
                                Kami percaya bahwa komunikasi yang baik adalah awal dari hubungan bisnis yang sukses.
                                Jangan
                                ragu untuk menghubungi kami melalui telepon, email, atau kunjungi langsung kantor kami.
                            </p>
                            <p class="text-secondary mb-1">Senin - Jumat : 09.00 - 17.00</p>
                            <p class="text-secondary mb-4">Sabtu - Minggu : Tutup</p>
                        </div>

                        <!-- Email & Telepon -->
                        <div class="row g-3 mb-3">
                            <div class="col-12 col-md-6">
                                <div
                                    class="kontak-box rounded-4 p-3 d-flex flex-column align-items-center text-center h-100">
                                    <i class="fas fa-envelope fs-2 mb-2"></i>
                                    <span>agrapaa76.pt@gmail.com</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div
                                    class="kontak-box rounded-4 p-3 d-flex flex-column align-items-center text-center h-100">
                                    <i class="fas fa-phone fs-2 mb-2"></i>
                                    <div>
                                        <div>0813-1752-2983 (Marwan)</div>
                                        <div>0896-0105-7136 (Syifa)</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="mt-auto">
                            <!-- mt-auto untuk push ke bawah -->
                            <div class="kontak-box rounded-4 p-3 d-flex flex-column align-items-center text-center">
                                <i class="fas fa-map-marker-alt fs-2 mb-2"></i>
                                <span>Jl. Tunas Raya RT 001 RW 004, Sukamaju Baru, Tapos, Depok</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Konten Kanan (Google Maps) -->
                <div class="col-12 col-lg-6 ps-lg-4">
                    <!-- Ditambah ps-lg-4 untuk gap lebih besar -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253842.2631939413!2d106.66754395!3d-6.3874999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebadad89b0b9%3A0x18457fa0d67838da!2sDepok%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1653631864367!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-4">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kontak -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 800,
        once: false, // agar animasi bisa terulang saat scroll bolak-balik
        mirror: true, // animasi akan terbalik saat scroll ke atas
        easing: 'ease-in-out-quad'
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    function filterAlat(kategoriId) {
        // Tampilkan spinner dan sembunyikan konten dengan efek
        $('#loading-spinner').show();
        $('#alat-container .row').css('opacity', '0');

        $.ajax({
            url: "{{ route('filter.alat') }}",
            type: "GET",
            data: {
                kategori_alat_id: kategoriId
            },
            success: function(response) {
                // Sembunyikan spinner dan tampilkan konten baru dengan efek
                $('#loading-spinner').hide();
                $('#alat-container .row').replaceWith(response)
                    .css('opacity', '0')
                    .animate({
                        opacity: 1
                    }, 300);

                // Update active button
                $('.kategori-btn').removeClass('active');
                if (kategoriId === null) {
                    $('.kategori-btn:first').addClass('active');
                } else {
                    $(`button[onclick="filterAlat(${kategoriId})"]`).addClass('active');
                }
            },
            error: function(xhr) {
                $('#loading-spinner').hide();
                $('#alat-container .row').css('opacity', '1');
                console.log(xhr.responseText);
            }
        });
    }

    function filterProduk(kategoriId) {
        // Tampilkan spinner dan sembunyikan konten dengan efek
        $('#loading-spinner-produk').show();
        $('#produk-container .row').css('opacity', '0');

        $.ajax({
            url: "{{ route('filter.produk') }}",
            type: "GET",
            data: {
                kategori_produk_id: kategoriId
            },
            success: function(response) {
                // Sembunyikan spinner dan tampilkan konten baru dengan efek
                $('#loading-spinner-produk').hide();
                $('#produk-container .row').replaceWith(response)
                    .css('opacity', '0')
                    .animate({
                        opacity: 1
                    }, 300);

                // Update active button
                $('.kategori-btn').removeClass('active');
                if (kategoriId === null) {
                    $('.kategori-btn:first').addClass('active');
                } else {
                    $(`button[onclick="filterProduk(${kategoriId})"]`).addClass('active');
                }
            },
            error: function(xhr) {
                $('#loading-spinner-produk').hide();
                $('#produk-container .row').css('opacity', '1');
                console.log(xhr.responseText);
            }
        });
    }
    </script>

    <script>
    // Fungsi untuk menampilkan modal gambar
    function showImageModal(imageSrc, caption) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        modalImage.src = imageSrc;

        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Fungsi untuk menutup modal gambar
    function closeImageModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
    </script>
    </body>


</html>