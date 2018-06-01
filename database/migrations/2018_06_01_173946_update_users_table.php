<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('address')->nullable()->after('settings');
            $table->integer('city_id')->nullable()->after('settings');
            $table->integer('district_id')->nullable()->after('settings');
            $table->integer('ward_id')->nullable()->after('settings');
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
            $table->dropColumn('address');
            $table->dropColumn('city_id');
            $table->dropColumn('district_id');
            $table->dropColumn('ward_id');
        });
    }
}
