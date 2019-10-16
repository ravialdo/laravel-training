<?php

use Illuminate\Database\Seeder;
use App\Mail;
use App\MailCategori;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     // $table->datetime('incoming_at');
     // $table->char('mail_code');
     // $table->date('mail_date');
     // $table->string('mail_from');
     // $table->string('mail_to');
     // $table->string('mail_subject');
     // $table->text('description');
     // $table->string('file_upload');
     //
     // $table->integer('mail_type_id');
     // $table->bigInteger('user_id');

    public function run()
    {

      \DB::table('mail_mail_categories')->insert(
            [
                [
                    'mail_category_id' => 1,
                    'mail_id' => 1
                ],
                [
                    'mail_category_id' => 1,
                    'mail_id' => 2
                ],
                [
                    'mail_category_id' => 2,
                    'mail_id' => 1
                ],
                [
                    'mail_category_id' => 2,
                    'mail_id' => 2
                ],
            ]
    );

      MailCategori::create([
            'name' => 'Lomba'
        ]);

        MailCategori::create([
            'name' => 'Rapat'
        ]);

        MailCategori::create([
            'name' => 'Kegiatan Lainnya'
        ]);

        Mail::create([
          'incoming_at' => '2019-10-01 05:53:24',
          'mail_code' => '2019/22/23/23/RPLSMKN1TALAGA',
          'mail_date' => '2019-10-01 05:53:24',
          'mail_from' => 'sma 1 talaga',
          'mail_to' => 'smkn 1 talaga',
          'mail_subject' => 'Acara lomba',
          'description' => 'Dimohon untuk hadir di waktu yang sesuai.',
          'file_upload' => 'lampiran.jpg',
          'mail_type_id' => 1,
          'user_id' => 1,
        ]);

        Mail::create([
          'incoming_at' => '2019-10-01 05:53:24',
          'mail_code' => '2019/22/23/23/RPLSMKN1TALAGA',
          'mail_date' => '2019-10-01 05:53:24',
          'mail_from' => 'sma 1 majalengka',
          'mail_to' => 'smkn 1 talaga',
          'mail_subject' => 'Acara lomba',
          'description' => 'Dimohon untuk hadir di waktu yang sesuai.',
          'file_upload' => 'lampiran.jpg',
          'mail_type_id' => 1,
          'user_id' => 1,
        ]);

        Mail::create([
          'incoming_at' => '2019-10-01 05:53:24',
          'mail_code' => '2019/22/23/23/RPLSMKN1TALAGA',
          'mail_date' => '2019-10-01 05:53:24',
          'mail_from' => 'sma 1 cihaur',
          'mail_to' => 'smkn 1 talaga',
          'mail_subject' => 'Acara lomba',
          'description' => 'Dimohon untuk hadir di waktu yang sesuai.',
          'file_upload' => 'lampiran.jpg',
          'mail_type_id' => 1,
          'user_id' => 1,
        ]);
    }
}
