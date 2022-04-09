<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('username')->after('name');
            $table->string('user_image')->default('assets/imgs/profile/person.png')->nullable()->after('password');
            $table->bigInteger('role_id')->after('user_image');
            $table->boolean('is_active')->default(1)->nullable()->after('role_id');
            $table->string('gender')->nullable()->after('is_active');
            $table->longText('bio')->nullable()->after('gender');
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
            //
            $table->dropColumn('username');
            $table->dropColumn('user_image');
            $table->dropColumn('role_id');
            $table->dropColumn('is_active');
            $table->dropColumn('gender');
            $table->dropColumn('bio');
        });
    }
};
