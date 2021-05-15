<?php

use Illuminate\Database\Seeder;
use App\User;
// gunakan ini klo pake data seeder
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
        // data indonesia
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		User::create([
    			'nama_lengkap' => $faker->name,
    			'email' => $faker->email,
    			'password' => $faker->password
    		]);
    	}
        // make seeder
        // php artisan make:seeder UserSeeder

        // run
        // php artisan db:seed
        // php artisan db:seed --class=UserSeeder
 
    }
}
