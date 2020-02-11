<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Buku;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Buku::class, function (Faker $faker) 
{
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'tbuku_id' => $faker->words(10),
        'tbuku_judul' => $faker->words(50),
        'tbuku_penulis' => $faker->name,
        'tbuku_penerbit' => $faker->words(30),
        'tbuku_tahun_terbit' => $faker->year,
        'tbuku_kategori' => $faker->words(20),
        'tbuku_sinopsis' => $faker->words(500),
        'tbuku_cover_buku' => $faker->picsum('public/images', 180, 260, false)
    ];
});
