<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
			'name' => 'Ravialdo Imanda Putra',
			'level' => 'admin',
			'email' => 'ravialdo@dev.id',
			'password' => bcrypt('12345'),
	   ]);
	
	   User::create([
			'name' => 'Pengguna',
			'level' => 'pengguna',
			'email' => 'pengguna@user.id',
			'password' => bcrypt('12345'),
	   ]);
    }
}
