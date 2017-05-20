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
            $table->date('birthday')->default('1946-01-01');
            $table->string('gender')->default('other');
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
        if (Schema::hasColumn('users', 'birthday')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('birthday');
            });
        }

        if (Schema::hasColumn('users', 'gender')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('gender');
            });
        }

        if (Schema::hasColumn('users', 'bio')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('bio');
            });
        }

        if (Schema::hasColumn('users', 'user_photo')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('user_photo');
            });
        }

        if (Schema::hasColumn('users', 'telephone')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('telephone');
            });
        }

        if (Schema::hasColumn('users', 'address')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('address');
            });
        }
    }
}
