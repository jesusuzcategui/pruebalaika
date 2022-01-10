<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for( $i = 0; $i < 15; $i++ ){
            Products::create([
                "title" => 'Product ' . ($i+1),
                "price" => $faker->randomDigit,
                "price_offert" => $faker->randomDigit,
                "score" => $faker->numberBetween($min = 1, $max = 5),
                "image" => $faker->imageUrl($width=800, $height=800)
            ]);
        }

    }
}
