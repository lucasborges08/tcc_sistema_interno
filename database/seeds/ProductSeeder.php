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

        factory(App\Product::class)->create([
          'code'  => '111333',
          'name'  => 'produto 4',
          'price' => '63.50'
        ]);

        factory(App\Product::class)->create([
          'code' => '654321',
          'name'  => 'produto 5',
          'price' => '135.40'
        ]);

        factory(App\Product::class)->create([
          'code' => '777888',
          'name'  => 'produto 6',
          'price' => '550.50'
        ]);

        factory(App\Product::class)->create([
          'code'  => '888999',
          'name'  => 'produto 7',
          'price' => '58.50'
        ]);

        factory(App\Product::class)->create([
          'code' => '159786',
          'name'  => 'produto 8',
          'price' => '20.40'
        ]);

        factory(App\Product::class)->create([
          'code' => '258147',
          'name'  => 'produto 9',
          'price' => '56.50'
        ]);
    }
}
