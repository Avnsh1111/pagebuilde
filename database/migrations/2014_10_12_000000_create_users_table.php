<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->default(0)->comment('0=Front;1=Admin');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile_no')->nullable()->default(null);
            $table->string('profile_image')->nullable()->default(null);
            $table->tinyInteger('login_type')->default('0')->comment('0=Normal;1=Google;');
            $table->text('login_data')->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('users');
    }
}
