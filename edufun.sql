-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2024 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edufun`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `articlesTitle` varchar(255) NOT NULL,
  `articleContent` text NOT NULL,
  `articleViews` int(11) NOT NULL DEFAULT 0,
  `articleImage` varchar(255) NOT NULL,
  `writersId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `articlesTitle`, `articleContent`, `articleViews`, `articleImage`, `writersId`, `created_at`, `updated_at`) VALUES
(1, 'University Texas in MSAI online', 'Velit est doloremque dolore repellendus explicabo et. Officia sed ipsum soluta voluptatum labore aut. Inventore molestiae nostrum quisquam quo incidunt dolor. Blanditiis ex omnis unde velit quod. A officia itaque quo corporis.\n\nAutem molestiae repellendus ut laboriosam unde. Ad animi nostrum molestiae asperiores excepturi occaecati esse. Accusamus magnam nihil commodi amet omnis. Et harum placeat suscipit vero. Est voluptatem nobis nostrum.\n\nNihil sed enim soluta. Et velit ea rem earum esse. Magni nisi dolores quo asperiores voluptas deleniti minima tempore.', 4147, 'images/popular/popular-1.jpg', 1, '2024-11-01 02:24:48', '2024-11-01 02:24:48'),
(2, '10 Best Free Course Udemy', 'Impedit autem voluptates rerum dolor consequatur consequatur dolor. Consequatur exercitationem aut quam voluptate aut. Assumenda non dignissimos quia ea dignissimos numquam ut commodi. Nobis incidunt vel vel molestiae quas qui.\n\nEum exercitationem illo omnis unde corporis eius. Aliquid ad maxime id id omnis quia. Enim culpa fuga tempore doloribus sint.\n\nNecessitatibus ut porro sint sequi iusto adipisci ut. Ducimus possimus facere nihil perferendis sunt. Nam totam impedit nulla omnis dolore incidunt.', 1308, 'images/popular/popular-2.jpg', 2, '2024-11-01 02:24:48', '2024-11-01 02:24:48'),
(3, 'Top Machine Learning in 2022', 'Et sit incidunt tempore totam omnis. Dolores cupiditate est nam cum neque dolorum in. In explicabo delectus aut dolorem similique commodi rem. Eos accusantium quisquam nihil ut.\n\nTempore unde rerum et corrupti officiis. Sapiente quisquam cupiditate animi et ullam.\n\nAperiam labore qui maiores et est corrupti. Eum qui et asperiores omnis blanditiis maxime necessitatibus et. Nihil magnam voluptatum eligendi porro adipisci et.', 1156, 'images/popular/popular-3.jpg', 3, '2024-11-01 02:24:48', '2024-11-01 02:24:48'),
(4, 'Machine Learning Full Course', 'Sequi sapiente eos est doloribus voluptas fugiat. Repellat ullam aut quaerat ut necessitatibus magnam expedita. Sit eum aut dolores delectus dolorem velit minus.\n\nMolestias aliquam porro accusantium. Quia voluptates et corporis laboriosam quo. A dolor fuga eaque. Esse ut a et fuga.\n\nMollitia consectetur nobis deserunt repellendus est itaque. Enim reiciendis eaque molestiae vitae similique et accusantium. Blanditiis neque aut qui qui. Id quia consectetur inventore ullam incidunt quas.', 3889, 'images/popular/popular-4.jpg', 4, '2024-11-01 02:24:48', '2024-11-01 02:24:48'),
(5, 'Why Learning AI', 'Enim neque voluptas quidem vel error nesciunt. Quia rerum aut tempora accusantium possimus provident assumenda. Eligendi libero exercitationem doloremque neque dolore quidem voluptates. Voluptatem et vitae nihil ducimus minus nobis libero. Necessitatibus velit eligendi possimus voluptas.\n\nA vitae animi in quisquam aut. Laboriosam praesentium ducimus iusto exercitationem non. Ab quod praesentium consequatur et consequuntur repellat et. Quia omnis qui occaecati et.\n\nEt voluptatem quibusdam ut qui in. Delectus nobis ipsa sed corrupti. Eos ipsum dolor magni. Voluptates voluptas nesciunt voluptatem ad velit.', 2887, 'images/popular/popular-5.jpg', 5, '2024-11-01 02:24:48', '2024-11-01 02:24:48'),
(6, 'What are the topics and Syllabus in AI', 'Eligendi rerum consequatur eum itaque quo labore atque. Neque aut rerum molestias sit.\n\nEt voluptatibus ut corporis officia minima laboriosam fugit. Aut eaque et quia quae nihil corporis fugiat. Saepe natus assumenda labore tenetur doloribus. Sequi qui qui qui ut.\n\nVelit nobis veniam dolor molestiae soluta sunt odit. Est excepturi quis libero esse. Voluptas reprehenderit velit voluptatem ducimus.', 3317, 'images/popular/popular-6.jpg', 6, '2024-11-01 02:24:48', '2024-11-01 02:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `created_at`, `updated_at`) VALUES
(1, 'Data Science', '2024-10-31 23:40:22', '2024-10-31 23:40:22'),
(2, 'Network Security', '2024-10-31 23:40:22', '2024-10-31 23:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `writerId` bigint(20) UNSIGNED NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `courseContent` text NOT NULL,
  `courseImage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `categoryId`, `writerId`, `courseName`, `courseContent`, `courseImage`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Machine Learning', 'Machine Learning adalah salah satu cabang dari ilmu komputer yang memungkinkan sistem belajar dari data tanpa harus diprogram secara eksplisit. Dalam kursus ini, Anda akan mempelajari algoritma-algoritma dasar dan teknik-teknik yang digunakan dalam Machine Learning. Anda akan belajar bagaimana mesin dapat dilatih untuk mengenali pola dalam data, membuat prediksi, dan melakukan tugas otomatisasi lainnya. Selain teori, kursus ini akan dilengkapi dengan studi kasus dan contoh nyata yang memperlihatkan bagaimana Machine Learning diterapkan dalam kehidupan sehari-hari.\\n\\nSelain itu, Anda akan memahami konsep seperti supervised dan unsupervised learning, regresi, klasifikasi, dan clustering. Setelah menyelesaikan kursus ini, Anda diharapkan mampu mengimplementasikan algoritma Machine Learning sederhana dan mengaplikasikannya dalam berbagai situasi bisnis maupun industri.', 'images/DataScience/machine-learning.jpg', '2024-11-01 00:18:35', '2024-11-01 00:18:35'),
(2, 1, 2, 'Deep Learning', 'Deep Learning adalah cabang dari Machine Learning yang fokus pada pemodelan jaringan saraf buatan yang terdiri dari banyak lapisan (layers). Teknologi ini telah mengubah cara kita menganalisis dan memproses data, terutama dalam aplikasi seperti pengenalan gambar, pemrosesan bahasa alami, dan deteksi suara. Dalam kursus ini, Anda akan belajar dasar-dasar arsitektur jaringan saraf, seperti convolutional neural networks (CNNs) dan recurrent neural networks (RNNs), serta bagaimana mereka bekerja.\\n\\nAnda juga akan mempelajari cara melatih jaringan saraf dalam berbagai tugas, mengoptimalkan parameter model, dan memahami teknik-teknik modern dalam Deep Learning seperti transfer learning dan fine-tuning. Dengan penyelesaian kursus ini, peserta diharapkan memiliki pemahaman mendalam tentang struktur jaringan saraf dan mampu mengaplikasikan deep learning dalam berbagai proyek.', 'images/DataScience/deep-learning.jpg', '2024-11-01 00:18:35', '2024-11-01 00:18:35'),
(3, 1, 3, 'Natural Language Processing', 'Natural Language Processing (NLP) adalah bidang studi yang memungkinkan komputer memahami, menafsirkan, dan menghasilkan bahasa manusia. Di kursus ini, Anda akan mempelajari cara kerja algoritma NLP yang banyak digunakan dalam aplikasi seperti chatbots, analisis sentimen, dan mesin terjemahan. Kursus ini juga akan membahas teknik pengolahan teks, ekstraksi informasi, serta analisis emosi yang banyak diterapkan dalam layanan pelanggan dan pemasaran.\\n\\nPeserta akan mengenal beberapa metode NLP seperti tokenisasi, stemming, dan parsing, serta pemahaman teks yang lebih kompleks menggunakan model modern. Melalui kursus ini, peserta akan memiliki kemampuan dasar untuk mengembangkan aplikasi berbasis NLP yang interaktif dan bermanfaat bagi kebutuhan bisnis', 'images/DataScience/natural-language.png', '2024-11-01 00:18:35', '2024-11-01 00:18:35'),
(4, 2, 4, 'Software Security', 'Keamanan perangkat lunak adalah aspek penting dalam pengembangan aplikasi modern yang bertujuan untuk melindungi perangkat lunak dari serangan dan kerentanan. Dalam kursus ini, peserta akan belajar prinsip-prinsip dasar keamanan perangkat lunak, termasuk praktik pengkodean aman, deteksi kerentanan, dan metode mitigasi serangan. Selain itu, kursus ini juga mencakup studi kasus nyata tentang serangan siber pada perangkat lunak dan bagaimana mitigasi dilakukan.\\n\\nDengan menyelesaikan kursus ini, Anda akan memahami pentingnya keamanan di setiap tahap siklus hidup perangkat lunak, mulai dari desain hingga implementasi. Anda juga akan diajarkan mengenai teknik analisis risiko serta strategi untuk melindungi data dan informasi dari akses tidak sah.', 'images/NetworkSecurity/software-security.jpg', '2024-11-01 00:18:35', '2024-11-01 00:18:35'),
(5, 2, 5, 'Network Administration', 'Administrasi jaringan adalah proses pengelolaan dan pemeliharaan jaringan komputer agar dapat berjalan optimal dan aman. Kursus ini akan membahas berbagai aspek administrasi jaringan, termasuk konfigurasi perangkat keras, pemantauan jaringan, serta pengamanan sistem jaringan. Selain itu, Anda akan mempelajari teknik troubleshooting untuk mengidentifikasi dan mengatasi masalah jaringan yang mungkin muncul.\\n\\nKursus ini juga mencakup pengenalan terhadap protokol jaringan utama seperti TCP/IP, serta konsep-konsep seperti subnetting dan pengelolaan IP. Setelah mengikuti kursus ini, peserta akan memiliki pemahaman yang kuat tentang cara menjaga jaringan agar tetap handal dan aman, serta siap menghadapi tantangan jaringan di lingkungan kerja.', 'images/NetworkSecurity/network-administration.jpg', '2024-11-01 00:18:35', '2024-11-01 00:18:35'),
(6, 2, 6, 'Popular Network Technology', 'Kursus ini menawarkan panduan menyeluruh mengenai teknologi jaringan yang banyak digunakan saat ini, mencakup perangkat keras, perangkat lunak, dan protokol jaringan yang membentuk infrastruktur jaringan modern. Anda akan belajar tentang teknologi seperti VPN, firewall, dan sistem deteksi intrusi, yang esensial untuk menjaga keamanan jaringan.\\n\\nSelain itu, kursus ini juga akan membahas tren terkini dalam teknologi jaringan, termasuk IoT (Internet of Things) dan 5G, serta bagaimana teknologi ini mengubah cara kita berkomunikasi dan bekerja. Dengan mengikuti kursus ini, peserta diharapkan memiliki wawasan tentang lanskap teknologi jaringan yang terus berkembang dan memahami peran dari setiap komponen jaringan', 'images/NetworkSecurity/top-networking.jpg', '2024-11-01 00:18:35', '2024-11-01 00:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '0001_01_01_000000_create_users_table', 1),
(12, '0001_01_01_000001_create_cache_table', 1),
(13, '0001_01_01_000002_create_jobs_table', 1),
(14, '2024_11_01_021216_create_writers_table', 2),
(15, '2024_11_01_023201_create_categories_table', 3),
(16, '2024_11_01_021152_create_articles_table', 4),
(17, '2024_11_01_021100_create_courses_table', 5),
(18, '2024_11_01_062434_add_specialty_to_writers_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9Fuh3oJ0OdYyvHtRFLeEHQj5bt0gZR7gNbpdG8hd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzI1ZjZFRmQwV1VmOVM2RmNzQmRuWGlQWlVMQlFsbnd1cGZqTkZ5MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3B1bGFyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1730460977);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `writersName` varchar(255) NOT NULL,
  `writersImage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `writersName`, `writersImage`, `created_at`, `updated_at`, `specialty`) VALUES
(1, 'Septi Susanti S.Pt', 'images/writers/writers-1.jpg', '2024-10-31 21:15:59', '2024-10-31 21:15:59', 'Spesialis Data Science'),
(2, 'Ismail Wacana', 'images/writers/writers-2.jpg', '2024-10-31 21:15:59', '2024-10-31 21:15:59', 'Spesialis Data Science'),
(3, 'Endah Salimah Lailasari S.I.Kom', 'images/writers/writers-3.jpg', '2024-10-31 21:15:59', '2024-10-31 21:15:59', 'Spesialis Data Science'),
(4, 'Pranawa Salahudin', 'images/writers/writers-4.jpg', '2024-10-31 21:15:59', '2024-10-31 21:15:59', 'Spesialis Network Security'),
(5, 'Gandi Setiawan S.T.', 'images/writers/writers-5.jpg', '2024-10-31 21:15:59', '2024-10-31 21:15:59', 'Spesialis Network Security'),
(6, 'Oni Calista Pudjiastuti', 'images/writers/writers-6.jpg', '2024-10-31 23:49:58', '2024-10-31 23:49:58', 'Spesialis Network Security');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_writersid_foreign` (`writersId`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_categoryid_foreign` (`categoryId`),
  ADD KEY `courses_writerid_foreign` (`writerId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_writersid_foreign` FOREIGN KEY (`writersId`) REFERENCES `writers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_writerid_foreign` FOREIGN KEY (`writerId`) REFERENCES `writers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
