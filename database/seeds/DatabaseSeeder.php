<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(admin_seeder::class);
        $this->call(kategori_buku_seeder::class);
        $this->call(buku_seeder::class);
    }
}
