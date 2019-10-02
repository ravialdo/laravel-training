<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
			'nis' => '11366736',
			'nama' => 'Abdul',
	   ]);
	
	   Student::create([
			'nis' => '57685757',
			'nama' => 'Asep',
	   ]);
	
		Student::create([
			'nis' => '86776566',
			'nama' => 'Agus',
	   ]);
    }
}
