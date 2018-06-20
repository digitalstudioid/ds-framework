<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_settings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('app_name', 100);
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            $table->integer('min_password_length')->default('8')->comment('characters');
            $table->enum('password_should_be_complex', ['0', '1'])->default('1')->comment('0 = No, 1 = Yes (password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character)');
            $table->enum('allow_re_use_older_passwords', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->enum('max_older_passwords', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'])->default('10')->comment('Min 1 and Max 10');
            $table->integer('change_password_period')->default('120')->comment('days');
            $table->integer('max_login_attempts')->default('5')->comment('times');
            $table->enum('forced_idle_time', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->integer('idle_time')->default('300')->comment('seconds');

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
        Schema::dropIfExists('sys_settings');
    }
}
