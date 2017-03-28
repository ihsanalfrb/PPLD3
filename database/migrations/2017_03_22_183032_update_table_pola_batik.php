<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePolaBatik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pola_batik', function (Blueprint $table) {
            $table->foreign('batik_id')
                ->references('id')
                ->on('batik')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pola_batik', function (Blueprint $table) {
            $table->dropForeign('pola_batik_batik_id_foreign');
        });
    }
}
