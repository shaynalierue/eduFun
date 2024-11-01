<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Edu Fun</title>
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
                    <li class="nav-item"><a class="nav-link active" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/popular">Popular</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten About Us -->
    <div class="container mt-5">
        <h2 class="text-center">About Edu Fun</h2>
        <p class="text-center text-muted">Mengenal lebih dekat dengan Edu Fun</p>
        <div class="mt-4 text-center">
            <p>Edu Fun adalah platform edukasi digital yang dirancang untuk memberikan pengalaman belajar yang menarik, interaktif, dan bermanfaat bagi semua kalangan, mulai dari pelajar, profesional, hingga siapa pun yang ingin memperluas wawasan. Kami menawarkan berbagai topik edukatif yang berfokus pada pengembangan keterampilan praktis dan pengetahuan mendalam, sehingga pengguna dapat terus berkembang di dunia yang semakin kompetitif ini. Dari Data Science hingga Network Security, Edu Fun menghadirkan materi-materi yang dikurasi secara khusus oleh para ahli dan praktisi berpengalaman di bidangnya.</p>
            
            <p>Di Edu Fun, kualitas materi adalah prioritas kami. Kami percaya bahwa belajar tidak hanya soal menerima informasi, tetapi juga bagaimana informasi tersebut dapat diterapkan dalam kehidupan nyata. Dengan pendekatan yang berbasis kasus dan contoh-contoh praktis, kami memastikan setiap kursus tidak hanya informatif tetapi juga relevan dan mudah dipahami. Platform ini dirancang untuk mendukung proses belajar mandiri, memberikan fleksibilitas waktu dan metode yang memungkinkan pengguna untuk belajar kapan saja dan di mana saja.</p>

            <p>Untuk mencapai visi ini, Edu Fun bekerja sama dengan para writer dan instruktur berpengalaman yang memahami kebutuhan pembelajaran yang efektif. Setiap konten disajikan dengan bahasa yang mudah dipahami tanpa mengurangi kedalaman materi, sehingga pengguna dengan berbagai latar belakang pendidikan dapat dengan mudah mengikuti dan mendapatkan manfaat dari setiap kursus yang kami tawarkan. Selain itu, fitur-fitur interaktif seperti forum diskusi dan sesi tanya jawab dengan instruktur juga disediakan untuk mendukung proses belajar yang lebih kolaboratif.</p>

            <p>Selain itu, Edu Fun juga memiliki visi untuk menjangkau lebih banyak orang dengan menyediakan konten yang berkualitas namun terjangkau. Kami ingin menjadikan pendidikan berkualitas dapat diakses oleh semua orang, tanpa terkecuali. Melalui platform ini, kami juga berupaya membangun komunitas pembelajaran di mana setiap pengguna dapat berinteraksi, berbagi pengetahuan, dan belajar bersama, menciptakan lingkungan yang mendukung pertumbuhan intelektual dan keterampilan sosial.</p>

            <p>Selamat datang di Edu Fun, tempat di mana edukasi dan hiburan bersatu. Kami mengundang Anda untuk bergabung bersama kami, menjelajahi dunia pengetahuan, dan mempersiapkan diri untuk masa depan yang penuh peluang. Mari jadikan belajar sebagai aktivitas yang menyenangkan dan bermanfaat bersama Edu Fun!</p>
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
