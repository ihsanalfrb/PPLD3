<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CommentsSeeder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_komentar');
            $table->string('isi_komentar');
            $table->string('comment_by');
            $table->string('thread_id');
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
        Schema::dropIfExists('CommentsSeeder');
    }
}
