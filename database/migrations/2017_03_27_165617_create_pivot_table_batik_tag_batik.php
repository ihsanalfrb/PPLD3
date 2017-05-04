<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTableBatikTagBatik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batik_tag_batik', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batik_id')->unsigned();
            $table->integer('tag_batik_id')->unsigned();
            $table->foreign('batik_id')
                ->references('id')
                ->on('batik')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('tag_batik_id')
                ->references('id')
                ->on('tag_batik')
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
        Schema::table('batik_tag_batik', function(Blueprint $table){
           $table->dropForeign('batik_tag_batik_batik_id_foreign');
           $table->dropForeign('batik_tag_batik_tag_batik_id_foreign');

        });
        Schema::dropIfExists('batik_tag_batik');
    }
}
