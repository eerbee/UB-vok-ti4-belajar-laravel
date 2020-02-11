<?php

use Illuminate\Database\Seeder;
use App\Buku;
use Faker\Factory as Faker;

class buku_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Buku::class,10)->create();
    }
}
