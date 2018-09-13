<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 30)->create();
        factory(App\Product::class)->create([
          'code'  => '123456',
          'name'  => 'produto 1',
          'price' => '127.50'
        ]);

        factory(App\Product::class)->create([
          'code' => '654321',
          'name'  => 'produto 2',
          'price' => '120.50'
        ]);

        factory(App\Product::class)->create([
          'code' => '111222',
          'name'  => 'produto 3',
          'price' => '150.50'
        ]);
    }
}
