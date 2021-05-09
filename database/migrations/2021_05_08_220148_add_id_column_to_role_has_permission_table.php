<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdColumnToRoleHasPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_has_permissions', function (Blueprint $table) {
             // Remove the primary key
            $table->dropPrimary("permission_id");
            $table->dropPrimary("role_id");
            $table->increments("id");

           

            // Set the actual primary key
            $table->primary(array("id"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_has_permissions', function (Blueprint $table) {
            $table->dropPrimary("permission_id");
            $table->dropPrimary("role_id");
            $table->increments("id");

            // Remove the primary key
           

            // Set the actual primary key
            $table->primary(array("id"));
        });
    }
}
