<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        for ($i=0; $i <10 ; $i++) {
            Book::create([
                "category_id"=>mt_rand(1,5),
                "title"=>$faker->sentence()
            ]);
        }
    }
}
