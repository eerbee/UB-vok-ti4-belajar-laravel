<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Buku;
use Faker\Generator as Faker;

$factory->define(Buku::class, function (Faker $faker) 
{
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'tbuku_id' => strtoupper($faker->lexify('???')),
        'tbuku_judul' => $faker->word,
        'tbuku_penulis' => $faker->word,
        'tbuku_penerbit' => $faker->word,
        'tbuku_tahun_terbit' => $faker->year,
        'tbuku_kategori' => $faker->numberBetween(4,14),
        'tbuku_sinopsis' => $faker->word,
        'tbuku_cover_buku' => $faker->picsum('public/images',180,260, false)
    ];
});
