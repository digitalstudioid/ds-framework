<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_modules', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->string('path')->nullable();
            //$table->string('table_name')->nullable();
            //$table->string('controller')->nullable();
            //$table->enum('is_protected', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
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
        Schema::dropIfExists('sys_modules');
    }
}
