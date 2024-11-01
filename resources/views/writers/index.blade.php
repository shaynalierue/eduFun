<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Writers - Edu Fun</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo di sisi kiri -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="100" height="30">
            </a>

            <!-- Menu di sisi kanan -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <!-- Loop Kategori -->
                            @foreach($categories as $category)
                                <li><a class="dropdown-item" href="{{ route('category.show', $category->id) }}">{{ $category->categoryName }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/writers">Writers</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/popular">Popular</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Judul Halaman -->
    <div class="container mt-5">
        <h2 class="text-center">Our Writers</h2>
    </div>

     <!-- Daftar Writers -->
     <div class="container mt-4">
        <div class="row">
            @foreach($writers as $writer)
                <div class="col-md-4 text-center mb-4">
                    <!-- Foto Writer dengan Link ke Halaman Detail -->
                    <a href="{{ route('writers.show', $writer->id) }}">
                        <img src="{{ asset($writer->writersImage) }}" alt="{{ $writer->writersName }}" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                    </a>

                    <!-- Nama dan Spesialisasi Writer dengan Link ke Halaman Detail -->
                    <h5 class="mt-3">
                        <a href="{{ route('writers.show', $writer->id) }}" class="text-dark text-decoration-none">
                            {{ $writer->writersName }}
                        </a>
                    </h5>
                    <p class="text-muted">{{ $writer->specialty }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-lg-start mt-5">
        <div class="container d-flex justify-content-center align-items-center py-3">
        <span class="text-light">© EduFun 2024 | Web Programming | Fulgencia Shaynalie Rue | 2602187885</span>
        </div>
    </footer>

    <!-- Link ke Bootstrap JS lokal -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
