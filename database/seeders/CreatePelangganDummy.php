<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;
use Faker\Factory as Faker;

class CreatePelangganDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan lokasi Indonesia untuk data dummy yang relevan
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 100; $i++) {
            Pelanggan::create([
                'first_name' => $faker->firstName,
                'last_name'  => $faker->lastName,
                'birthday'   => $faker->date('Y-m-d', '2005-01-01'),
                'gender'     => $faker->randomElement(['male', 'female']),
                'email'      => $faker->unique()->safeEmail,
                'phone'      => $faker->phoneNumber,
            ]);
        }
    }
}
