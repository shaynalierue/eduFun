<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $writer->writersName }} - Courses</title>
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

    <!-- Detail Writer -->
    <div class="container mt-5">
        <div class="text-center">
            <!-- Foto Writer -->
            <img src="{{ asset($writer->writersImage) }}" alt="{{ $writer->writersName }}" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
            <h2 class="mt-3">{{ $writer->writersName }}</h2>
            <p class="text-muted">{{ $writer->specialty }}</p>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Daftar Courses -->
            <div class="col-12">
                <h4 class="mb-4">Courses</h4>
                @foreach($writer->courses as $course)
                    <div class="card mb-3" style="height: 280px;"> <!-- Menetapkan tinggi tetap pada card -->
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset($course->courseImage) }}" class="img-fluid rounded-start" alt="{{ $course->courseName }}" style="height: 100%; object-fit: cover; border-radius: 5px;">
                            </div>
                            <div class="col-md-8 d-flex flex-column">
                                <div class="card-body" style="flex-grow: 1;">
                                    <h5 class="card-title">{{ $course->courseName }}</h5>
                                    <p class="card-text text-muted">{{ $course->created_at->format('d M Y') }} | by: {{ $writer->writersName }}</p>
                                    <p class="card-text">{{ Str::words($course->courseContent, 15, '...') }}</p>
                                </div>
                                <div class="text-end p-2">
                                    <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary btn-sm" style="background-color: #003366; border-radius: 15px;">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Daftar Articles -->
            <div class="col-12">
                <h4 class="mb-4">Articles</h4>
                @foreach($writer->articles as $article)
                    <div class="card mb-3" style="height: 280px;"> <!-- Menetapkan tinggi tetap pada card -->
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset($article->articleImage) }}" class="img-fluid rounded-start" alt="{{ $article->articlesTitle }}" style="height: 100%; object-fit: cover; border-radius: 5px;">
                            </div>
                            <div class="col-md-8 d-flex flex-column">
                                <div class="card-body" style="flex-grow: 1;">
                                    <h5 class="card-title">{{ $article->articlesTitle }}</h5>
                                    <p class="card-text text-muted">{{ $article->created_at->format('d M Y') }} | by: {{ $writer->writersName }}</p>
                                    <p class="card-text">{{ Str::words($article->articleContent, 15, '...') }}</p>
                                </div>
                                <div class="text-end p-2">
                                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary btn-sm" style="background-color: #003366; border-radius: 15px;">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
