@extends('layouts.app')

@section('content')
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Bootstrap & Asset --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> {{-- Animate.css --}}
    <style>
        .carousel-inner img {
            max-height: 600px;
            /* Atur tinggi maksimum */
            object-fit: cover;
            /* Menyesuaikan gambar agar tidak terdistorsi */
        }

        .carousel-caption {
            bottom: 20%;
            /* Menyesuaikan posisi teks */
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease-in-out;
        }

        .fade-in.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<div id="app">
    <main class="flex-grow-1">
        @yield('content')
        <div id="carouselExampleControls" class="carousel slide fade-in" data-bs-ride="carousel">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 210px">
                <div class="header text-center animate__animated animate__fadeInUp">
                    <h1 class="text-black">Mereka Membutuhkan Kita.</h1>
                    <p class="text-black">Bersama kita bisa membuat perubahan</p>
                </div>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ Vite::asset('resources/images/1.jpg') }}" alt="gambar1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ Vite::asset('resources/images/2.jpg') }}" alt="gambar1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ Vite::asset('resources/images/3.jpg') }}" alt="gambar1">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Teks About -->
                <div class="col-md-6 fade-in" id="about-text">
                    <h1 class="mb-4" style="color: #ffa500;">About FoodForAll</h1>
                    <p>
                        FoodForAll adalah sebuah platform digital yang dirancang untuk menyediakan makanan bagi mereka yang membutuhkan bantuan. Website ini tidak hanya menawarkan layanan distribusi makanan, tetapi juga menyediakan informasi tentang lokasi-lokasi yang aktif memberikan bantuan makanan. Selain itu, FoodForAll dilengkapi dengan berbagai fitur untuk mendukung pengguna dan donatur, seperti melakukan donasi, mendaftar akun, login, mengedit profil, serta melihat daftar donasi yang telah dilakukan. Platform ini bertujuan untuk menciptakan ekosistem berbagi yang lebih inklusif dan membantu mengurangi kesenjangan akses terhadap kebutuhan pangan.
                    </p>
                    <p>
                        FoodForAll membantu orang yang membutuhkan makanan dengan menyediakan informasi lokasi bantuan makanan dan memudahkan masyarakat untuk berdonasi secara online. Selain itu, platform ini juga bertujuan membangun solidaritas sosial, mempererat rasa kepedulian, serta menciptakan ekosistem berbagi yang lebih mudah dan transparan.
                    </p>
                </div>

                <!-- Gambar About -->
                <div class="col-md-6 text-center fade-in" id="about-image">
                    <img src="{{ Vite::asset('resources/images/faf.png') }}" alt="gambar faf" class="img-fluid rounded shadow" style="max-width: 100%;">
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-4 mt-auto">
        @include('layouts.footer') {{-- Footer --}}
    </footer>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fadeElements = document.querySelectorAll('.fade-in');
        fadeElements.forEach(el => {
            setTimeout(() => {
                el.classList.add('active');
            }, 300);
        });
    });
</script>
@endsection
