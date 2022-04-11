<?php

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            Role::create([
                'name'          => 'super admin', 
                'display_name'  => 'Super Administrator',
                'description'   => 'This is role of super admin, has full permissions'
            ]);
            Role::create([
                'name'          => 'admin', 
                'display_name'  => 'Administrator',
                'description'   => 'This is role of admin, has partially permissions'
            ]);
    
            Role::create([
                'name'          => 'partner', 
                'display_name'  => 'Partner',
                'description'   => 'This is role of partner, who register to post a job'
            ]);
    
            Role::create([
                'name'          => 'applicant', 
                'display_name'  => 'Aapplicant',
                'description'   => 'This is role of applicant, who register to apply a job'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
};
