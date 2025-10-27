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
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">

    <!-- Open Graph Meta Tags -->
    <meta property=" og:title" content="CV. Ajang Jaya Rubber - Perdagangan Umum dan Jasa Industri">
    <meta property="og:description" content="Mitra Andal dalam Perdagangan Umum dan Jasa Industri">
    <meta property="og:image" content="https://rezasuryaa.github.io/background.jpg">
    <meta property="og:url" content="https://rezasuryaa.github.io">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CV. Ajang Jaya Rubber - Perdagangan Umum dan Jasa Industri">
    <meta name="twitter:description" content="Mitra Andal dalam Perdagangan Umum dan Jasa Industri">
    <meta name="twitter:image" content="https://rezasuryaa.github.io/background.jpg">

    <title>AKP Persada</title>
    <style>
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            position: relative;
            font-family: "Poppins", sans-serif;
            background: url({{ asset('images/background.jpg') }}) no-repeat center center/cover;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        h1 {
            font-size: 2.5rem;
        }

        .btn-custom {
            padding: 12px 15px;
            border-radius: 10px;
            color: white;
            background-color: #335FCE;
            border: none;
            margin-top: 20px;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 1px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.5s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-custom:hover {
            color: #335FCE;
            background-color: white;
            border: none;
            transform: translateY(0) scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .btn-custom {
                padding: 10px 13px;
            }

            a {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.6rem;
            }

            .btn-custom {
                padding: 8px 10px;
                border-radius: 6px;
            }

            a {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center text-white vh-100 position-relative"
        style="z-index: 1;">
        <h1 data-aos="zoom-in-down" data-aos-delay="=100">Selamat Datang di</h1>
        <h1 data-aos="zoom-in-down" data-aos-delay="250">PT. AKP PERSADA</h1>
        <div data-aos="zoom-in-down" data-aos-delay="300">
            <a href="{{ route('home') }}" class="btn-custom mt-3">Kunjungi Website</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JS Settiing AOS Animation -->
    <script>
        AOS.init({
            duration: 800,
            once: false,
            mirror: true,
            easing: 'ease-in-out-quad'
        });
    </script>

</body>

</html>