<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailFieldUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthday');
            $table->string('gender');
            $table->text('bio')->nullable()->default(null);
            $table->string('user_photo')->nullable()->default(null);
            $table->string('telephone')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthday');
            $table->string('gender');
            $table->text('bio');
            $table->string('user_photo');
            $table->string('telephone');
            $table->text('address');
        });
    }
}
