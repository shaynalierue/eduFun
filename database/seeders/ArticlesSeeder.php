<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Articles;
use Faker\Factory as Faker;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i <= 6; $i++) {
            $titles = [
                "University Texas in MSAI online",
                "10 Best Free Course Udemy",
                "Top Machine Learning in 2022",
                "Machine Learning Full Course",
                "Why Learning AI",
                "What are the topics and Syllabus in AI"
            ];
        
            Articles::create([
                'articlesTitle' => $titles[$i - 1], // Mengambil judul dari array berdasarkan urutan
                'articleContent' => $faker->paragraphs(3, true), // Menambahkan 3 paragraf konten dummy
                'articleViews' => $faker->numberBetween(100, 5000), // Views antara 100 hingga 5000
                'articleImage' => "images/popular/popular-$i.jpg",
                'writersId' => $i, // Menggunakan ID writers dari 1 hingga 6
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        
    }
}
