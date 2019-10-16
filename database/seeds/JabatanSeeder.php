<?php

use Illuminate\Database\Seeder;
use App\Jabatan;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::create([
          'nama' => 'wali kelas',
        ]);

        Jabatan::create([
          'nama' => 'OSIS',
        ]);
    }
}
