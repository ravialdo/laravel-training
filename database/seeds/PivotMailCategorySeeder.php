<?php

use Illuminate\Database\Seeder;

class PivotMailCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('mail_mail_categories')->insert([
          'mail_category_id' => 1,
          'mail_id' => 1,
        ]);

        \DB::table('mail_mail_categories')->insert([
          'mail_category_id' => 2,
          'mail_id' => 1,
        ]);

        \DB::table('mail_mail_categories')->insert([
          'mail_category_id' => 1,
          'mail_id' => 2,
        ]);

    }
}
