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

      \DB::table('jabatan_user')->insert([
        'jabatan_id'  => 1,
        'user_id'     => 1
      ]);

      \DB::table('jabatan_user')->insert([
        'jabatan_id'  => 1,
        'user_id'     => 2
      ]);

      \DB::table('jabatan_user')->insert([
        'jabatan_id'  => 2,
        'user_id'     => 1
      ]);

        Jabatan::create([
          'nama' => 'wali kelas',
        ]);

        Jabatan::create([
          'nama' => 'OSIS',
        ]);
    }
}
