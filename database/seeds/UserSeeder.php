<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        // insert data ke table pegawai
        for($a=1; $a<=20; $a++) {
            $gender = $faker->randomElement(['L', 'P']);
            $level = $faker->randomElement(['2', '3', '4', '5']);
            DB::table('user')->insert([
                'user_nip' => $faker->unique()->randomNumber($nbDigits = 8),
                'user_nama' => $faker->name,
                'user_alamat' => $faker->address,
                'user_sex' => $gender,
                'user_tlp' => $faker->phoneNumber,
                'user_email' => preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail),
                'user_pict' => 'admin.jpg',
                'user_level' => $level,
                'user_username' => $faker->userName,
                'user_password' => sha1('siap2020'),
                'user_create' => $faker->date('Y-m-d'),
                'user_update' => $faker->date('Y-m-d'),
                'user_lastlogin' => $faker->date('Y-m-d')
            ]);
        }
    }
}
