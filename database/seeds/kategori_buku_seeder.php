<?php

use Illuminate\Database\Seeder;
use App\Kategori;
use Faker\Factory as Faker;

class kategori_buku_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Kategori::class,10)->create();
    }
}
