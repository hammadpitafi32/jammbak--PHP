<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use DB;

class AddIdToRoleHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::table('role_has_permissions', function(Blueprint $table) {
            DB::statement('ALTER TABLE role_has_permissions ADD id INT NOT NULL AUTO_INCREMENT AFTER role_id,  ADD INDEX (id)'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_has_permissions', function(Blueprint $table) {
            DB::statement('ALTER TABLE role_has_permissions ADD id INT NOT NULL AUTO_INCREMENT AFTER role_id,  ADD INDEX (id)'); 
        });
    }
}
