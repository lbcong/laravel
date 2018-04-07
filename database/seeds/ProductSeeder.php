<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('products')->insert([
                'id' => $index,
                'name' => $faker->name,
                'image' => $faker->imageUrl(600,400),
                'price' => $faker->numberBetween(0,1000)
            ]);
        }
        $this->call(ProductSeeder::class);
    }
}
