<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTableBatikPolaBatik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batik_pola_batik', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batik_id')->unsigned();
            $table->integer('pola_batik_id')->unsigned();
            $table->foreign('batik_id')
                ->references('id')
                ->on('batik')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('pola_batik_id')
                ->references('id')
                ->on('pola_batik')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::table('batik_pola_batik', function(Blueprint $table){
            $table->dropForeign('batik_pola_batik_batik_id_foreign');
            $table->dropForeign('batik_pola_batik_pola_batik_id_foreign');
        });
        Schema::dropIfExists('batik_pola_batik');
    }
}
