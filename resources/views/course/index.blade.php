<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->courseName }} - Edu Fun</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="100" height="30">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
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

    <!-- Konten Detail Course -->
    <div class="container mt-5">
        <!-- Judul Category -->
        <h5 class="text-muted">{{ $course->category->categoryName }}</h5>

        <!-- Judul Course -->
        <h1>{{ $course->courseName }}</h1>

        <!-- Gambar Course -->
        <div class="my-4">
            <img src="{{ asset($course->courseImage) }}" alt="{{ $course->courseName }}" class="img-fluid w-100" style="max-height: 400px; border-radius: 15px; object-fit: cover;">
        </div>

        <!-- Tanggal dan Writer -->
        <p class="text-muted">
            {{ $course->created_at->format('d M Y') }} | by: {{ $course->writer->writersName }}
        </p>

        <!-- Konten Course -->
        <div class="mt-4">
            <p>{{ $course->courseContent }}</p>
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
