<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->datetime('incoming_at');
            $table->char('mail_code');
            $table->date('mail_date');
            $table->string('mail_from');
            $table->string('mail_to');
            $table->string('mail_subject');
            $table->text('description');
            $table->string('file_upload');

            $table->integer('mail_type_id');
            $table->bigInteger('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
