<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // 'name', 'last_name', 'email', 'bio', 'genre', 'birthdate', 'province', 'city', 'avatar', 'password',
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('email', '120')->unique();
            $table->text('bio', '250')->nullable();
            $table->integer('genre');
            $table->date('birthdate')->nullable();
            $table->string('avatar')->nullable()->default('profile.jpg');
            $table->string('province');
            $table->string('city');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default('1');
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
