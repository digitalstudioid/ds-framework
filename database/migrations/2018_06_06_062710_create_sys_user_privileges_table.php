<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysUserPrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_user_privileges', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->string('name')->nullable();
            $table->string('theme_color')->nullable();
            $table->enum('is_superadmin', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->enum('is_default', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->enum('is_active', ['0', '1'])->default('1')->comment('0 = No, 1 = Yes');     

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
        Schema::dropIfExists('sys_user_privileges');
    }
}
