<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Cek ID kategori
         $dataScienceCategoryId = 1; // "Data Science"
         $networkSecurityCategoryId = 2; // "Network Security"
 
         // Data Science Courses
         Course::create([
             'categoryId' => $dataScienceCategoryId, 
             'writerId' => 1, // writer_id untuk Data Science
             'courseName' => 'Machine Learning',
             'courseContent' => 'Machine Learning adalah salah satu cabang dari ilmu komputer yang memungkinkan sistem belajar dari data tanpa harus diprogram secara eksplisit. Dalam kursus ini, Anda akan mempelajari algoritma-algoritma dasar dan teknik-teknik yang digunakan dalam Machine Learning. Anda akan belajar bagaimana mesin dapat dilatih untuk mengenali pola dalam data, membuat prediksi, dan melakukan tugas otomatisasi lainnya. Selain teori, kursus ini akan dilengkapi dengan studi kasus dan contoh nyata yang memperlihatkan bagaimana Machine Learning diterapkan dalam kehidupan sehari-hari.\n\nSelain itu, Anda akan memahami konsep seperti supervised dan unsupervised learning, regresi, klasifikasi, dan clustering. Setelah menyelesaikan kursus ini, Anda diharapkan mampu mengimplementasikan algoritma Machine Learning sederhana dan mengaplikasikannya dalam berbagai situasi bisnis maupun industri.',
             'courseImage' => 'images/DataScience/machine-learning.jpg',
             'created_at' => now(),
             'updated_at' => now()
         ]);
 
         Course::create([
             'categoryId' => $dataScienceCategoryId, 
             'writerId' => 2, // writer_id untuk Data Science
             'courseName' => 'Deep Learning',
             'courseContent' => 'Deep Learning adalah cabang dari Machine Learning yang fokus pada pemodelan jaringan saraf buatan yang terdiri dari banyak lapisan (layers). Teknologi ini telah mengubah cara kita menganalisis dan memproses data, terutama dalam aplikasi seperti pengenalan gambar, pemrosesan bahasa alami, dan deteksi suara. Dalam kursus ini, Anda akan belajar dasar-dasar arsitektur jaringan saraf, seperti convolutional neural networks (CNNs) dan recurrent neural networks (RNNs), serta bagaimana mereka bekerja.\n\nAnda juga akan mempelajari cara melatih jaringan saraf dalam berbagai tugas, mengoptimalkan parameter model, dan memahami teknik-teknik modern dalam Deep Learning seperti transfer learning dan fine-tuning. Dengan penyelesaian kursus ini, peserta diharapkan memiliki pemahaman mendalam tentang struktur jaringan saraf dan mampu mengaplikasikan deep learning dalam berbagai proyek.',
             'courseImage' => 'images/DataScience/deep-learning.jpg',
             'created_at' => now(),
             'updated_at' => now()
         ]);
 
         Course::create([
             'categoryId' => $dataScienceCategoryId, 
             'writerId' => 3, // writer_id untuk Data Science
             'courseName' => 'Natural Language Processing',
             'courseContent' => 'Natural Language Processing (NLP) adalah bidang studi yang memungkinkan komputer memahami, menafsirkan, dan menghasilkan bahasa manusia. Di kursus ini, Anda akan mempelajari cara kerja algoritma NLP yang banyak digunakan dalam aplikasi seperti chatbots, analisis sentimen, dan mesin terjemahan. Kursus ini juga akan membahas teknik pengolahan teks, ekstraksi informasi, serta analisis emosi yang banyak diterapkan dalam layanan pelanggan dan pemasaran.\n\nPeserta akan mengenal beberapa metode NLP seperti tokenisasi, stemming, dan parsing, serta pemahaman teks yang lebih kompleks menggunakan model modern. Melalui kursus ini, peserta akan memiliki kemampuan dasar untuk mengembangkan aplikasi berbasis NLP yang interaktif dan bermanfaat bagi kebutuhan bisnis',
             'courseImage' => 'images/DataScience/natural-language.jpg',
             'created_at' => now(),
             'updated_at' => now()
         ]);
 
         // Network Security Courses
         Course::create([
             'categoryId' => $networkSecurityCategoryId, 
             'writerId' => 4, // writer_id untuk Network Security
             'courseName' => 'Software Security',
             'courseContent' => 'Keamanan perangkat lunak adalah aspek penting dalam pengembangan aplikasi modern yang bertujuan untuk melindungi perangkat lunak dari serangan dan kerentanan. Dalam kursus ini, peserta akan belajar prinsip-prinsip dasar keamanan perangkat lunak, termasuk praktik pengkodean aman, deteksi kerentanan, dan metode mitigasi serangan. Selain itu, kursus ini juga mencakup studi kasus nyata tentang serangan siber pada perangkat lunak dan bagaimana mitigasi dilakukan.\n\nDengan menyelesaikan kursus ini, Anda akan memahami pentingnya keamanan di setiap tahap siklus hidup perangkat lunak, mulai dari desain hingga implementasi. Anda juga akan diajarkan mengenai teknik analisis risiko serta strategi untuk melindungi data dan informasi dari akses tidak sah.',
             'courseImage' => 'images/NetworkSecurity/software-security.jpg',
             'created_at' => now(),
             'updated_at' => now()
         ]);
 
         Course::create([
             'categoryId' => $networkSecurityCategoryId, 
             'writerId' => 5, // writer_id untuk Network Security
             'courseName' => 'Network Administration',
             'courseContent' => 'Administrasi jaringan adalah proses pengelolaan dan pemeliharaan jaringan komputer agar dapat berjalan optimal dan aman. Kursus ini akan membahas berbagai aspek administrasi jaringan, termasuk konfigurasi perangkat keras, pemantauan jaringan, serta pengamanan sistem jaringan. Selain itu, Anda akan mempelajari teknik troubleshooting untuk mengidentifikasi dan mengatasi masalah jaringan yang mungkin muncul.\n\nKursus ini juga mencakup pengenalan terhadap protokol jaringan utama seperti TCP/IP, serta konsep-konsep seperti subnetting dan pengelolaan IP. Setelah mengikuti kursus ini, peserta akan memiliki pemahaman yang kuat tentang cara menjaga jaringan agar tetap handal dan aman, serta siap menghadapi tantangan jaringan di lingkungan kerja.',
             'courseImage' => 'images/NetworkSecurity/network-administration.jpg',
             'created_at' => now(),
             'updated_at' => now()
         ]);
 
         Course::create([
             'categoryId' => $networkSecurityCategoryId, 
             'writerId' => 6, // writer_id untuk Network Security
             'courseName' => 'Popular Network Technology',
             'courseContent' => 'Kursus ini menawarkan panduan menyeluruh mengenai teknologi jaringan yang banyak digunakan saat ini, mencakup perangkat keras, perangkat lunak, dan protokol jaringan yang membentuk infrastruktur jaringan modern. Anda akan belajar tentang teknologi seperti VPN, firewall, dan sistem deteksi intrusi, yang esensial untuk menjaga keamanan jaringan.\n\nSelain itu, kursus ini juga akan membahas tren terkini dalam teknologi jaringan, termasuk IoT (Internet of Things) dan 5G, serta bagaimana teknologi ini mengubah cara kita berkomunikasi dan bekerja. Dengan mengikuti kursus ini, peserta diharapkan memiliki wawasan tentang lanskap teknologi jaringan yang terus berkembang dan memahami peran dari setiap komponen jaringan',
             'courseImage' => 'images/NetworkSecurity/top-networking.jpg',
             'created_at' => now(),
             'updated_at' => now()
         ]);
     
    }
}
