<?php

use Illuminate\Database\Seeder;
use App\MailType;

class MailTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailType::create([
          'type' => 'surat masuk',
        ]);

        MailType::create([
          'type' => 'surat keluar',
        ]);
    }
}
