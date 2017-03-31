<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThreadsSeeder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_thread');
            $table->string('created_by');
            $table->integer('views');
            $table->integer('replies');
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
        Schema::dropIfExists('ThreadsSeeder');
    }
}
