<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <style>
        .sponsorship {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 15px;
        }

        .sponsorship img {
            max-width: 150px;
            height: auto;
            padding: 5px;
            transition: transform 0.3s;
        }
    </style>
</head>

<footer class="footer bg-dark text-center">
    <div class="container">
        <div class="row">
            <!-- Logo dan Deskripsi -->
            <div class="col-md-4 mb-3">
                <img src="{{ Vite::asset('resources/images/no-bg.png') }}" alt="Sponsor 1" class="img-fluid"
                    width="120">
                <h5 class="text-uppercase"></h5>
                <p>
                    Food for All adalah platform yang menghubungkan komunitas melalui blog inspiratif sekaligus
                    menyediakan bantuan makanan bagi mereka yang membutuhkan, untuk bersama-sama mengurangi kelaparan.
                </p>
            </div>


            <!-- Media Sosial -->
            <div class="col-md-4 mb-4 text-end">
                <h5 class="text-uppercase">Ikuti Kami</h5>
                <div class="social-icons">
                    <a href="https://facebook.com" class="text-white text-decoration-none me-3" aria-label="Facebook">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://twitter.com" class="text-white text-decoration-none me-3" aria-label="Twitter">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="https://instagram.com" class="text-white text-decoration-none" aria-label="Instagram">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr class="bg-secondary">
    <p class="mb-0">
        &copy; {{ date('Y') }} <strong>Tugas Besar Mata Kuliah Pengembangan Aplikasi Website</strong>
    </p>
    <br class="bg-secondary">
    <div class="container">
        <br>
        <h4 style="text-align:center">Berkolaborasi dengan</h4>
        <section class="sponsorship">
            <img src="{{ Vite::asset('resources/images/1.png') }}" alt="Sponsor 1">
            <img src="{{ Vite::asset('resources/images/2.png') }}" alt="Sponsor 2">
            <img src="{{ Vite::asset('resources/images/3.png') }}" alt="Sponsor 2">
            <img src="{{ Vite::asset('resources/images/4.png') }}" alt="Sponsor 2">
        </section>
        <section class="sponsorship">
            <img src="{{ Vite::asset('resources/images/5.png') }}" alt="Sponsor 1">
            <img src="{{ Vite::asset('resources/images/6.png') }}" alt="Sponsor 2">
            <img src="{{ Vite::asset('resources/images/7.png') }}" alt="Sponsor 2">
        </section>
    </div>
    </div>

    <style>
        .footer {
            background-color: #ffffff;
            font-size: 14px;
        }

        .footer-link:hover {
            color: #00bcd4;
            text-decoration: underline;
        }

        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #ffc107;
        }

        .social-icons a {
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #00bcd4;
        }

        .footer p {
            font-size: 12px;
            color: #ffffff;
        }
    </style>
</footer>
