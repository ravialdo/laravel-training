<?php

use Illuminate\Database\Seeder;
use App\MailCategori;

// Menambahkan data pada tabel mail_categories Menambahkan
// model file yang harus di panggil atau di import adalah model
// App\MailCategory;

class MailCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailCategori::create([
          'name'=> 'Kegiatan'
        ]);

        MailCategori::create([
          'name'=> 'Eskul'
        ]);

        MailCategori::create([
          'name'=> 'Rapat'
        ]);
    }
}
