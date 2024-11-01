<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writers;
use Faker\Factory as Faker;

class WritersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        foreach (range(1,5) as $index) {
            Writers::create([
                'writersName' => $faker->name,
                'writersImage' => "images/writers/writers-{$index}.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
