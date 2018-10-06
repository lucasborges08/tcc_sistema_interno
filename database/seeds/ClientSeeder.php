<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Client::class, 30)->create();
        factory(App\Client::class)->create([
        	'email' => 'teste@teste.com'
        ]);
    }
}
