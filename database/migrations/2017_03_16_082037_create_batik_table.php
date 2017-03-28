<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_batik');
            $table->text('makna_batik');
            $table->text('sejarah_batik');
            $table->string('cluster_batik')->nullable();
            $table->string('asal_daerah');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batik');
    }
}
