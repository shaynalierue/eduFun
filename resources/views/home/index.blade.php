<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu Fun</title>

    <!-- LINK KE BOOTSTRAP -->
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

    <!-- Banner -->
    <div class="container-fluid p-0">
        <img src="{{ asset('images/banner.jpg') }}" alt="Banner Image" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
    </div>

    <!-- Konten Courses -->
    <div class="container mt-4">
        @foreach($courses as $course)
            <div class="row mb-4 p-3 border rounded">
                <!-- Gambar Course -->
                <div class="col-md-3">
                    <img src="{{ asset($course->courseImage) }}" alt="{{ $course->courseName }}" class="img-fluid rounded" style="border-radius: 15px;">
                </div>
                <!-- Detail Course -->
                <div class="col-md-9 d-flex flex-column justify-content-between">
                    <!-- Judul dan Informasi Course -->
                    <div>
                        <h4>{{ $course->courseName }}</h4>
                        <p class="text-muted">
                            {{ $course->created_at->format('d M Y') }} | by: {{ $course->writer->writersName }}
                        </p>
                        <p>{{ Str::words($course->courseContent, 15, '...') }}</p>
                    </div>
                    <!-- Tombol Read More -->
                    <div class="text-end">
                        <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary btn-sm" style="background-color: #003366; border-radius: 15px; border: none; padding: 0.5rem 2rem; width: fit-content;">Read more</a>

                      <!-- <a href="#" class="btn btn-primary btn-sm" style="background-color: #003366; border-radius: 15px; border: none; padding: 0.5rem 2rem; width: fit-content;">Read more</a> -->
                    </div>
                </div>
            </div>
        @endforeach
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
