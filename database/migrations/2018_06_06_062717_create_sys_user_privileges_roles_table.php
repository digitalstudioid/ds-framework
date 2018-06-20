<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysUserPrivilegesRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_user_privileges_roles', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->bigInteger('id_sys_user_privileges')->unsigned()->comment('from table sys_user_privileges');
            $table->bigInteger('id_sys_modules')->unsigned()->comment('from table sys_modules');

            $table->enum('is_visible', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            //$table->enum('is_read', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->enum('is_create', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->enum('is_edit', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->enum('is_delete', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->enum('is_print', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->enum('is_export', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');

            $table->timestamps();

            $table->foreign('id_sys_user_privileges')->references('id')->on('sys_user_privileges')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_sys_modules')->references('id')->on('sys_modules')
                ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_user_privileges_roles');
    }
}
