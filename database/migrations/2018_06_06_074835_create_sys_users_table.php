<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_users', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->string('name', 100);
            $table->string('phone', 15)->nullable();
            $table->string('mobile', 15);
            $table->string('email', 100)->unique();
            $table->string('photo')->nullable();
            $table->string('username', 100)->unique();
            $table->string('password');
            $table->datetime('last_change_password')->nullable();
            $table->text('last_password')->nullable();
            $table->text('password_question')->nullable();
            $table->text('password_answer')->nullable();
            $table->integer('failed_password_answer')->default('0');
            $table->enum('status', ['0', '1', '2', '3'])->default('0')->comment('0 = Not Active, 1 = Active, 2 = Locked, 3 = Expired');
            $table->datetime('last_approved')->nullable();
            $table->datetime('last_locked')->nullable();
            $table->datetime('last_expired')->nullable();
            $table->enum('is_super_administrator', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');       
            $table->enum('can_be_logged_on', ['0', '1', '2', '3', '4', '5'])->default('0')->comment('0 = All Device, 1 = Windows ID, 2 = Computer Name, 3 = IP Address, 4 = MAC Address, 5 = User Login ID');
            $table->string('windows_id', 100)->nullable();
            $table->string('computer_name', 100)->nullable();
            $table->string('ip_address', 100)->nullable();
            $table->string('mac_address', 100)->nullable();
            $table->string('user_login_id', 100)->nullable();            
            $table->enum('login', ['0', '1'])->default('0')->comment('0 = No, 1 = Yes');
            $table->string('login_windows_id', 100)->nullable();
            $table->string('login_computer_name', 100)->nullable();
            $table->string('login_ip_address', 100)->nullable();
            $table->string('login_mac_address', 100)->nullable();
            $table->string('login_user_login_id', 100)->nullable();
            $table->datetime('last_login')->nullable();
            $table->integer('total_login')->default('0');
            $table->integer('failed_login_attemp')->default('0');
            
            $table->rememberToken();
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
        Schema::dropIfExists('sys_users');
    }
}
