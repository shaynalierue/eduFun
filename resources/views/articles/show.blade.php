<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->articlesTitle }}</title>
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

    <!-- Detail Artikel -->
    <div class="container mt-5">
        <h2>{{ $article->articlesTitle }}</h2>
        <p class="text-muted">{{ $article->created_at->format('d M Y') }} | by {{ $article->writer->writersName }}</p>
        <img src="{{ asset($article->articleImage) }}" alt="{{ $article->articlesTitle }}" 
            class="img-fluid mb-4" 
            style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px;">
        <p>{{ $article->articleContent }}</p>
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
